<?php

use App\Http\Controllers\BookingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/history', function () {
//     return view('History/emptyHistory');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Auth
Auth::routes();

//index
Route::get('/',[TripsController::class, 'index']);


Route::middleware('auth')->group(function(){
    
    //Trip Plan
    Route::get('/createTrip',[TripsController::class, 'create']);
    Route::post('/TravelList',[TripsController::class, 'store']);
    Route::get('/TravelList',[TripsController::class, 'list']);

    //history
    Route::get('/history',[BookingsController::class, 'indexHistory']);

    //Booking
    Route::post('/TravelList/booking/{book}',[BookingsController::class, 'store']);

    //Guider
    Route::get('/TourGuide',[TripsController::class, 'indexTourGuide'])->name('guideindex');
    Route::get('/createTripGuider',[TripsController::class, 'createTripGuider']);
    Route::get('/TravelListGuider',[TripsController::class, 'listTripGuider']);
    Route::post('/TravelListGuider',[TripsController::class, 'storeGuider']);

    //profile
    Route::get('/profile',[ProfileController::class, 'index']);
    Route::patch('/profile/update',[ProfileController::class, 'update']);

    //profile Guider
    Route::get('/profileGuider',[ProfileController::class, 'indexGuider']);
    Route::patch('/profileGuider/update',[ProfileController::class, 'updateGuider']);
});

