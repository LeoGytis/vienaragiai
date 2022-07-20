<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoshopController as Auto;
use App\Http\Controllers\ServiceController as Service;
use App\Http\Controllers\MechanicController as Mechanic;
use App\Http\Controllers\ClientController as Client;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ========================== AUTOSHOPS ==========================

Route::group(['prefix' => 'autoshops'], function () {
    Route::get('', [Auto::class, 'index'])->name('auto.index');
    Route::get('create', [Auto::class, 'create'])->name('auto.create');
    Route::post('store', [Auto::class, 'store'])->name('auto.store');
    Route::get('edit/{auto}', [Auto::class, 'edit'])->name('auto.edit');
    Route::post('update/{auto}', [Auto::class, 'update'])->name('auto.update');
    Route::post('delete/{auto}', [Auto::class, 'destroy'])->name('auto.destroy');
    Route::get('show/{auto}', [Auto::class, 'show'])->name('auto.show');
});
