<?php

use App\Http\Controllers\clientController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\commandeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer des routes d'API pour votre application. Ces
| les routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
| se voit attribuer le groupe middleware "api". Amusez-vous à créer votre API !
|
*/

/*
|--------------------------------------------------------------------------
| API Routes pour les clients
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| API Routes pour les produits
|--------------------------------------------------------------------------
|
*/

Route::post('/produit', [ProduitsController::class, "ajouter"]);
Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);

/*
|--------------------------------------------------------------------------
| API Routes pour les commandes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
