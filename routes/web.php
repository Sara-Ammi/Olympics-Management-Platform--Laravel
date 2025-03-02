<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('accueil');
 })->name('accueil');
Route::get('/prog', function () {
    return view('programmer');
});

Route::get ('/organisation', [MyController:: class, 'account'])->name('organisation');

Route::get('/calendar', [MyController::class, 'generateCalendar'])->name('calendar');

Route::get('/filtre/{sport}', [MyController::class, 'filtre'])->name('filtre');
Route::get('/filtrex/{sport}/{date}', [MyController::class, 'filtrex'])->name('filtrex');
Route::get('/filtredate/{date}', [MyController::class, 'filtredate'])->name('filtredate');


Route::get('/mod', [MyController::class , 'print_comp_m' ]);
Route::get('/supp', [MyController::class , 'print_comp_s' ]);
Route::get('/visS', [MyController::class , 'print_comp_v' ]);
Route::post('/vis1', [MyController::class , 'nbSpectateurs' ]);
Route::get('/visR', [MyController::class , 'everyReservations' ]);
Route::get('/retour',  function () {
    return view('form1');
});


Route::post('/checked1', [MyController::class , 'remove_comp']);
Route::post('/checked2', [MyController::class , 'change_comp']);
Route::post('/checked3', [MyController::class , 'update']);

Route::get('/fin', [MyController::class , 'new' ] );

Route::post('/filled1',[MyController::class , 'execute1' ] );
Route::post('/filled2',[MyController::class , 'execute2' ] );
Route::post('/filled3',[MyController::class , 'execute3' ] );
Route::get('/Conf', [MyController::class , 'confirmer' ]);
Route::get('/Ann', [MyController::class , 'annuler' ]);

Route::post('/ajouter' , [MyController::class , 'create_comp' ] );


Route:: get('/create', [MyController:: class, 'createForm'])->name('authcreateLogin');
Route:: post('/create', [MyController:: class, 'create']);

Route:: get ('/login', [AuthController:: class, 'login'])->name('authlogin');
Route:: post ('/login', [AuthController::class, 'doLogin']);

Route:: delete('/logout', [AuthController:: class, 'logout'])->name('authlogout' );