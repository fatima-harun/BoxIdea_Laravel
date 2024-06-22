<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeeController;
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
