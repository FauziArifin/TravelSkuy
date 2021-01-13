<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\StaticGuiderController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/create', function () {
//     return view('create');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


//index
Route::get('/',[TripsController::class, 'index']);

//Trip Plan
Route::post('/',[TripsController::class, 'store']);

//guider
Route::get('/TourGuide',[StaticGuiderController::class, 'index'])->name('guideindex');


Route::middleware('auth')->group(function(){
    Route::get('/createTrip',[TripsController::class, 'create']);
    Route::get('/createTripGuider',[TripsController::class, 'create']);
    Route::get('/profile',[ProfileController::class, 'index']);
    Route::patch('/profile/update',[ProfileController::class, 'update']);
});

