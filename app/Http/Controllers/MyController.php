<?php

namespace App\Http\Controllers;
use App\Models\Lieu;
use App\Models\Sport;
use App\Models\Spectateur;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyController extends Controller
{
    public function filtreDate($date) {
        $competitions = Competition::where('jour', $date)->get();
        return view('filtredate', ['competitions' => $competitions, 'date' => $date]);
    }

    public function filtre($sportNom) {
        $sport = Sport::where('nom', $sportNom)->first();
        $competitions = Competition::where('sport_id', $sport->id)->get();
        return view('filtre', ['competitions' => $competitions, 'sport' => $sport]);
    }
    
    public function filtrex($sportNom, $date) {
        $sport = Sport::where('nom', $sportNom)->first();
        $competition = Competition::where('sport_id', $sport->id)->where('jour', $date)->first();
        return view('filtrex', ['competition' => $competition]);
    }
    
    public function generateCalendar() {
        $sports = Sport::all();
        $startDate = '2024/07/24';
        $endDate = '2024/08/11';
        $dates = [];
        while (strtotime($startDate) <= strtotime($endDate)) {
            $dates[] = date('d-m-Y', strtotime($startDate));
            $startDate = date('Y/m/d', strtotime($startDate . ' +1 day'));
        }
        $calendar = [];
        $competitions = Competition::all();
        foreach ($sports as $sport) {
            foreach ($dates as $date) {
                $sportName = $sport->nom;
                $competitionFound = false; 
                foreach ($competitions as $competition) {
                    if ($competition->sport->nom === $sportName && $competition->jour === $date) {
                        $calendar[$sportName][$date] = 'x';
                        $competitionFound = true;
                        break; 
                    }
                }
                
        
                if (!$competitionFound) {
                    $calendar[$sportName][$date] = '';
                }
            }
        }
        
        return view ('calendar', ['calendar'=>$calendar, 'sports'=>$sports,'dates' => $dates]);
    }

    public function createForm(){
        return view('authcreateLogin');
        }
        
        public function create(Request $request) {
        $request->validate( [
        'name'=>'required |string',
        'email'=>'required|email',
        'password'=> 'required | min:4'
        ]);
        
        
        User::create ([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>Hash:: make ($request->input ( 'password' ) )
        ]);
        
        return view('accueil');
    }
        public function account(){
        return view('organisation'); }


        /**
     *
     * @param  Competition  $competition
     * @return int
     */

    public function disponible(Competition $comp )
    {
        
        $capaciteLieu = $comp->lieu->capacite;
        $nombreReservations = $comp->spectateur()->count();
        $billets = session()->get('billets');
        $dispo = $capaciteLieu -( $nombreReservations + $billets );
        return $dispo ; 
    }

    public function disponible2(Competition $comp )
    {
        
        $capaciteLieu = $comp->lieu->capacite;
        $nombreReservations = $comp->spectateur()->count();
        $dispo = $capaciteLieu -( $nombreReservations );
        return $dispo ; 
    }

    public function total (array $comp )
    {
        $total = 0 ;
        $billets = session()->get('billets'); 
        foreach ( $comp as $c ) {
            $total = $total + ($c->prix)*($billets + 1) ; 
        }
        return $total ; 
    }



    public function execute1 (Request $request) {
        $request->validate( [
            'prenom'=>'required',
            'nom'=>'required',
            'tel'=>'required|min:10',
            'email'=>'required|email',
            'min'=>'required',
            'max'=>'required',
            'billets' => [
                'required',
                'not_in:Choisir...',
            ],
            ]);

        $prenom = $request->get('prenom');
        $nom = $request->get('nom');
        $tel = $request->get('tel');
        $email = $request->get('email');
        $min = $request->get('min');
        $max = $request->get('max');
        $billets = $request->get('billets');

        $request->session()->put('billets', $billets);
        $request->session()->put('tel', $tel);
        $request->session()->put('email', $email);
        $request->session()->put('min', $min);
        $request->session()->put('max', $max);

        $spectateur = new Spectateur(); 
        $spectateur->prenom = $prenom;
        $spectateur->nom = $nom;
        $spectateur->tel = $tel; 
        $spectateur->email = $email;
        $spectateur->save(); 
        $b1 = $spectateur ; 
        $request->session()->put('b1', $b1);
        if ($billets != 0 ) {
        return view ('form2', ['billets'=>$billets]);
        } else {
        $billetsup = [$b1];
        $request->session()->put('billetsup', $billetsup);
        $comp =  Competition::all();
        $tab = [] ; 
        $i = 0 ; 
        foreach ($comp as $c ) {
            if ($this->disponible($c) > 0 ) {
            $tab[$i] = $c ; 
            $i++;  
            }
        }
        return view('form3', ['comp' => $tab , 'min' => $min , 'max' => $max]);
        }
    }

    public function execute2(Request $request)
    {
        $tel = $request->session()->get('tel');
        $email = $request->session()->get('email');
        $billets = $request->session()->get('billets');
       
       $b1 = $request->session()->get('b1');
       $billetsup = [$b1];
       for ($i = 1; $i < $billets+1 ; $i++) {
        $nom = $request->get("nom$i");
        $prenom = $request->get("prenom$i");
       if (empty($nom) || empty($prenom)) {
        return view('form2' , ['billets'=>$billets] );
       }
    }
        for ($i = 1; $i < $billets+1 ; $i++) {
            $nom = $request->get("nom$i");
            $prenom = $request->get("prenom$i");
    
            $spectateur = new Spectateur();
            $spectateur->prenom = $prenom;
            $spectateur->nom = $nom;
            $spectateur->tel = $tel;
            $spectateur->email = $email;
            $spectateur->save();
            $billetsup [$i] = $spectateur ; 
           
        }
        $request->session()->put('billetsup', $billetsup);
        $comp =  Competition::all();
        $tab = [] ; 
        $i = 0 ; 
        foreach ($comp as $c ) {
            if ($this->disponible($c) > 0 ) {
            $tab[$i] = $c ; 
            $i++;  
            }
        }
        $request->session()->put('tab', $tab);
        $min = $request->session()->get('min');
        $max = $request->session()->get('max');
        return view('form3', ['comp' => $tab , 'min' => $min , 'max' => $max]);
    }

    public function execute3(Request $request)
    {

        $selectedValues = $request->except('_token');

        if (empty($selectedValues)) {
            $min = $request->session()->get('min');
            $max = $request->session()->get('max');
            $tab = $request->session()->get('tab');
            return view ('form3' ,['comp' => $tab , 'min' => $min , 'max' => $max] );
        }

        $billets = $request->session()->get('billets');
        $billetsup =  $request->session()->get('billetsup');
        $comp = [] ; 
        $j = 0 ; 
        if (!empty($billetsup)) {
            foreach ($selectedValues as $key => $value) {
                $c = Competition::find($value);
                $comp[$j] = $c ; 
                for ($i = 0; $i < $billets + 1 ; $i++) {
                        $s = $billetsup[$i];
                        $c->spectateur()->attach($s);
                    }
                    $j++ ; 
                }
                
        } 
        $request->session()->put('comp', $comp);
        $total = $this->total($comp) ; 
        return  view ('panier',['sp' => $billetsup , 'comp' => $comp , 'total' => $total ]);
    }

    public function confirmer (Request $request) {
    $email = $request->session()->get('email');
    return view ('confirmation' , ['email' => $email]);
    }

    public function annuler (Request $request) {
    $sup = $request->session()->get('billetsup');
    $billets = $request->session()->get('billets');
    $comp = $request->session()->get('comp');
    if (!empty($sup)) {
        foreach ($comp as $c) {
            for ($i = 0; $i < $billets + 1 ; $i++) {
                    $s = $sup[$i];
                    $c->spectateur()->detach($s);
                    $s->delete();
                }
            }
    } 
    return view('annulation') ; 
    }

    public function new (Request $request) {
        $request->session()->forget(['tel','tab','email','billets','comp','min','max','billetsup']);
        return view('accueil');
    }

    public function create_comp (Request $request) {

        $request->validate( [
            'jour'=>'required',
            'heure_debut'=>'required|min:2',
            'heure_fin'=>'required|min:2',
            'sport' => [
                'required',
                'not_in:Choisir...',
            ],
            'lieu' => [
                'required',
                'not_in:Choisir...',
            ],
            'prix'=>'required',
            ]);
    $jour = $request->get('jour');
    $hd = $request->get('heure_debut');
    $hf = $request->get('heure_fin');
    $id1 = $request->get('sport');
    $id2 = $request->get('lieu');
    $prix = $request->get('prix');

     $sport = Sport::find($id1);
     $lieu = Lieu::find($id2);
     $jour = date('d-m-Y', strtotime($jour));
     $competition = new Competition();
     $competition -> sport()-> associate($sport) ; 
     $competition -> lieu() -> associate($lieu) ;
     $competition -> jour = $jour ; 
     $competition -> heure_debut = $hd ; 
     $competition -> heure_fin = $hf ; 
     $competition -> prix = $prix ; 
     $competition->save();
     return view('merci');
    }

    public function print_comp_s () {
      $comp = Competition::all();
      return view ('supprimer', ['comp'=>$comp]);
    }
    
    public function print_comp_m () {
        $comp = Competition::all();
        return view ('modifier', ['comp'=>$comp]);
      }

    public function print_comp_v () {
        $comp = Competition::all();
        return view ('visual1', ['comp'=>$comp]);
    }
    

    public function remove_comp (Request $request) {
        $request->validate( [
            'supp_selected'=>'required',]);

      $id = $request->get('supp_selected');
      $competition = Competition::find($id);

      
        $spectateurs = $competition->spectateur; 
        $competition->spectateur()->detach();


        foreach ($spectateurs as $spectateur) {
            if ($spectateur->competition()->count() === 0) { 
                $spectateur->delete(); 
            }
        }
        
        $competition->delete();
      return view('merci');
    }

    public function change_comp (Request $request) {
        $request->validate( [
            'mod_selected'=>'required',]);

        $id = $request->get('mod_selected');
        $id = $request->session()->put('mod_selected' , $id);
        return view ('newForm');
    }

    public function nbSpectateurs (Request $request) {
        $request->validate( [
            'vis_selected'=>'required',]);

        $id = $request->get('vis_selected');
        $comp = Competition::find($id); 
        $nombreReservations = $comp->spectateur()->count();
        $disponible = $this->disponible2($comp) ; 
        return view ('visual2' , ['nb' =>  $nombreReservations , 'dispo' => $disponible]);
    }
   
    public function everyReservations(Request $request) {
        $comp = Competition::all(); 
        $comps = [];
        $sp = [];
        $i = 0;
    
        foreach ($comp as $c) {
            if ($c->spectateur()->count() > 0) {
                $comps[$i] = $c;
                $sp[$i] = $c->spectateur;
                $i++; 
            }
        }
    
        return view('touteRes', ['j' => $i, 'c' => $comps, 'sp' => $sp]);
    }
    

    public function update (Request $request) {
        $id = $request->session()->get('mod_selected');
        $comp = Competition::find($id);

        if ($request->filled('newjour')) {
            $jour = $request->get('newjour');
            $jour = date('d-m-Y', strtotime($jour));
            $comp->jour = $jour ;
        }
     
        if ($request->filled('newheure_debut')) {
            $hd = $request->get('newheure_debut');
            $comp-> heure_debut = $hd ; 
        } 

        if ($request->filled('newheure_fin')) {
            $hf = $request->get('newheure_fin');
            $comp-> heure_fin = $hf ; 
        } 

        if ($request->filled('newprix')) {
            $prix = $request->get('newprix');
            $comp-> prix = $prix ; 
        } 
        
        $id2 = $request->get('newlieu');
        if ($id2 != 'Choisir...') {
            $lieu = Lieu::find($id2);
            $comp -> lieu() -> associate($lieu) ; 
        } 
        $request->session()->forget(['mod_selected']);
        $comp->save();
       
        return view('merci');
    }
}
   
 