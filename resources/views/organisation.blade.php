
@extends('template3')

@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page" href="/prog">PROGRAMMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/supp">SUPPRIMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/mod">MODIFIER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visR">VISUALISER RESERVATIONS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">VISUALISER SPECTATEURS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">PLACES DISPONIBLES</a></li>


@endsection

@section('content')
<div class="container-fluid"> 
  
       
            <img src="https://www.visiterlyon.com/var/site/storage/images/1/7/5/7/887571-1-fre-FR/2d31a632ff4b-Clbration-athltes-Club-2024-1-.webp"  style="width: 100%; height: auto;">
        

</div>
<div class="w3-container text-center">
    <div class="row align-items-center justify-content-center">

        <div class="col-md-12">
            <br></br>
            <h4>Vous pouvez accéder aux fonctionnalités suivantes :</h4>
            <br></br>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="my-4 col-md-4">
            <img src="https://cdn.icon-icons.com/icons2/1462/PNG/512/098visualization_99988.png" alt="Image 1" style="width: 33.33%;">
            <div class="my-4">
                <a class="btn btn-primary" href="/visR">Visualiser Compétition</a>
            </div>
        </div>

        <div class="my-4 col-md-4">
            <img src="https://cdn-icons-png.flaticon.com/512/70/70310.png" alt="Image 2" style="width: 33.33%;">
            <div class="my-4">
                <a class="btn btn-primary" href="/prog">Programmer</a>
            </div>
        </div>

        <div class="my-4 col-md-4">
            <img src="https://cdn-icons-png.flaticon.com/512/7078/7078080.png" alt="Image 3" style="width: 33.33%;">
            <div class="my-4">
                <a class="btn btn-primary" href="/supp">Supprimer</a>
            </div>
        </div>
    </div>
   
    <div class="row justify-content-center">
       
        <div class="my-4 col-md-4">
            <img src="https://cdn.icon-icons.com/icons2/916/PNG/512/Edit_icon-icons.com_71853.png" alt="Modifier" style="width: 33.33%;">
            <div class="my-4">
                <a class="btn btn-primary" href="/mod">Modifier</a>
            </div>
        </div>
       
        <div class="my-4 col-md-4">
            <img src="https://static.vecteezy.com/ti/vecteur-libre/p3/6692135-liste-icone-modele-noir-couleur-modifiable-liste-icone-symbole-plat-vecteur-signe-isole-sur-fond-blanc-logo-simple-illustrationle-pour-graphique-et-web-design-gratuit-vectoriel.jpg" alt="Image 3" style="width: 33.33%;">
            <div class="my-4">
                <a class="btn btn-primary" href="/visS">Visualiser Spectateurs</a>
            </div>
        </div>
      
        <div class="my-4 col-md-4">
            <img src="https://static.vecteezy.com/ti/vecteur-libre/p1/23731917-oeil-icone-vecteur-optique-illustration-signe-ouvert-symbole-voir-logo-vectoriel.jpg" alt="Nouvelle Image" style="width: 33.33%;">
                <div class="my-4">
                    <a class="btn btn-primary" href="/visS">Places disponibles</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection


