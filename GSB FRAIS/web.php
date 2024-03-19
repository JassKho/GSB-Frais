<?php

use Illuminate\Support\Facades\Route;
//~ use App\Http\Controllers\RenseignementFDF;
//~ use App\Http\Controllers\RenseignerFDF;
//~ use App\Http\Controllers\ConsulterFDF;
//~ use App\Http\Controllers\SeConnecterV;
//~ use App\Http\Controllers\DeconnexionV;
//~ use App\Http\Controllers\DeconnexionC;
//~ use App\Http\Controllers\SeConnecterC;
//~ use App\Http\Controllers\ValiderFDF;
//~ use App\Http\Controllers\ValidationFDF;
//~ use App\Http\Controllers\SuivrePaiementFDF;
use App\Http\Controllers\Accueil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ConnexionV;
use App\Http\Controllers\ConnexionC;



Route::get('/',[Accueil::class,'Accueil']);

/*Visiteur*/

Route::get('/visiteur/connexion', 'App\Http\Controllers\ConnexionV@demandeConnexionV')->name('demandeConnexionV');

Route::post('/visiteur/connexion', 'App\Http\Controllers\ConnexionV@valideConnexionV')->name('valideConnexionV');

Route::get('/visiteur/v_sommaire', function () {
    return view('visiteur.v_sommaire');
});

/*Comptable*/

Route::get('/comptable/connexion', 'App\Http\Controllers\ConnexionC@demandeConnexionC')->name('demandeConnexionC');

Route::post('/comptable/connexion', 'App\Http\Controllers\ConnexionC@valideConnexionC')->name('valideConnexionC');

Route::get('/comptable/sommaireC', function () {
    return view('comptable.sommaireC');
});





Route::post('/logout', [ConnexionV::class, 'logout'])->name('logout');








//~ Route::get('/visiteur/RenseignementFDF',[RenseignementFDF::class,'RenseignementFDF']);

//~ Route::get('/visiteur/renseignerFDF',[RenseignerFDF::class,'RenseignerFDF']);

//~ Route::get('/visiteur/consulterFDF',[ConsulterFDF::class,'ConsulterFDF']);

//~ Route::get('/visiteur/SeConnecter',[SeConnecterV::class,'SeConnecterV']);

//~ Route::get('/visiteur/deconnexion',[DeconnexionV::class,'DeconnexionV']);

//~ Route::get('/comptable/connexion',[ConnexionC::class,'ConnexionC']);

//~ Route::get('/comptable/deconnexion',[DeconnexionC::class,'DeconnexionC']);

//~ Route::get('/comptable/SeConnecter',[SeConnecterC::class,'SeConnecterC']);

//~ Route::get('/comptable/validerFDF',[ValiderFDF::class,'ValiderFDF']);

//~ Route::get('/comptable/validationFDF',[ValidationFDF::class,'ValidationFDF']);

//~ Route::get('/comptable/SuivrePaiementFDF',[SuivrePaiementFDF::class,'SuivrePaiementFDF']);

