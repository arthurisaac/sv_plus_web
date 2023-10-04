<?php

use App\Http\Controllers\AlertePersonneAPrevenirController;
use App\Http\Controllers\api\AlerteController;
use App\Http\Controllers\api\AlerteMessageController;
use App\Http\Controllers\api\AlerteSanteStructure;
use App\Http\Controllers\api\DiscussionController;
use App\Http\Controllers\api\EnroleController;
use App\Http\Controllers\api\SliderController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Connexion
Route::post('login', [AuthController::class, 'login']);

// Connexion avec le code qr
Route::post('login-with-qr', [AuthController::class, 'loginWithQr']);
Route::post('login-with-google', [AuthController::class, 'loginWithGoogle']);

// Inscription / Enregitrement du compte
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    // Mot de passe oublié
    Route::post('change-password', [AuthController::class, 'change_password']);
    Route::post('/me/update', [AuthController::class, 'change_profile']);

    // ressources alertes
    Route::apiResource('alertes', AlerteController::class);

    // ressources api
    Route::resource('messages', AlerteMessageController::class);

    // Ressuorces discussions
    Route::resource('discussions', DiscussionController::class);

    // Liste des messages d'un sujet donné
    Route::post('discussion-messages', [AlerteMessageController::class, 'discussionFromPopup']);

    // Alerte proches
    Route::post('alerte_personne_a_prevenir', [AlertePersonneAPrevenirController::class, 'index']);

    // Liste des proches
    Route::post('personne_a_prevenir_list', [AlertePersonneAPrevenirController::class, 'listeDesProches']);

    // Alerte proche
    Route::post('prevenir_une_personne', [AlertePersonneAPrevenirController::class, 'alerterUnProche']);

    // Ressuorces discussions
    Route::resource('alerte_sante_structure', AlerteSanteStructure::class);

    //
    // Route::post('messages', [AlerteMessageController::class, 'store']);

    // Information d'un enrole
    Route::post('enrole', [EnroleController::class, 'index']);

});

Route::post('sliders', [SliderController::class, 'index']);

//Broadcast::routes(['prefix' => 'api', 'middleware' => ['auth:api']]);
