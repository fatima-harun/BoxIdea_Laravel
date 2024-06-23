<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentaireController;
// use App\Http\Controllers\CategorieController;

// route de la page d'acceuil
Route::get('/', function () {
    return view('acceuil');
});

// route du formulaire d'ajout d'idée
Route::get('/ajout', [IdeeController::class, 'ajout']);
Route::post('/traiter', [IdeeController::class, 'traiter'])->name('traitement');
Route::get('/lister', [IdeeController::class, 'lister']);
Route::get('/detailsIdee/{id}', [IdeeController::class, 'detailsIdee'])->name('detailsIdee');

// route des commentaires
Route::get('/detailsIdee/{id}', [CommentaireController::class, 'affichercommentaire'])->name('affichercommentaire');
Route::post('/sauvegarder/{idee_id}', [CommentaireController::class, 'sauvegarder'])->name('sauvegardement');

// route du personnel
//route pour s'inscrire
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'registerPost'])->name('register');

// route pour se connecter
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginPost'])->name('login');


 Route::get('/home',[HomeController::class,'index']); 

//route pour se deconnecter
Route::delete('/logout',[UserController::class,'logout'])->name('logout');