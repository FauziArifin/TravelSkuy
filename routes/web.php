<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\StaticGuiderController;
use App\Http\Controllers\TripsController;

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
Route::get('/contact', function () {
    return view('contactWA');
});

Route::get('/profile', function () {
    return view('profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


//index
Route::get('/',[TripsController::class, 'index']);

//Trip Plan
Route::get('/createTrip',[TripsController::class, 'create']);
Route::post('/',[TripsController::class, 'store']);

//guider
Route::get('/TourGuide',[StaticGuiderController::class, 'index']);
Route::get('/createTripGuider',[TripsController::class, 'create']);