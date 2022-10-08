<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\CapitanController;

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

Route::get('/', function () {
  return view('admin.layouts.home');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



Route::prefix('admin')->name('admin.')->group(function () {
  Route::resource('passengers', PassengerController::class);
  Route::resource('flights', FlightController::class);
  Route::resource('capitans', CapitanController::class);
  Route::get('detachFlight/{id}/{passenger}', [FlightController::class, 'detachFlight'])->name('detachFlight');
  Route::get('detachFlightAll/{passenger}', [FlightController::class, 'detachFlightAll'])->name('detachFlightAll');
  Route::get('addFlight',[FlightController::class, 'addFlight'])->name('addFlight');
});
