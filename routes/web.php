<?php

use App\Http\Controllers\AlerteController;
use App\Http\Controllers\AlerteDiscussionController;
use App\Http\Controllers\AlerteNotificationController;
use App\Http\Controllers\AlerteUserController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagingController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // resources alerts
    Route::resource('alertes', AlerteController::class);

    Route::resource('discussions', AlerteDiscussionController::class);

    Route::resource('sliders', SliderController::class);

    // Resource utilisateurs
    Route::resource('alerte-users', AlerteUserController::class);

    // Resouces ambulances
    Route::resource('ambulances', AmbulanceController::class);

    Route::post('affect-ambulance', [AmbulanceController::class, 'affectAmbulance'])->name('ambulance.affecter');

    Route::post('traiter-alerte', [AmbulanceController::class, 'alerteTraite'])->name('alertes.traiter');

    Route::get('notifications', [AlerteNotificationController::class, 'index'])->name("me.notifications");

    Route::get('discussion/{id}', [MessagingController::class, 'one'])->name("messaging.one");

    Route::post('message-reponse', [MessagingController::class, 'respondeMessage'])->name("messaging.respond");

});

Route::post('messages/{id}', [AlerteDiscussionController::class, 'getMessages']);

Route::post('alertes-custom', [AlerteController::class, 'customAlertes']);

Route::group(['middleware' => 'auth', 'prefix' => 'accounts'], function () {
    // Voir les notifications
});
