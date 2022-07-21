<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoshopController as Autoshop;
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
    Route::get('', [Autoshop::class, 'index'])->name('autoshop.index');
    Route::get('create', [Autoshop::class, 'create'])->name('autoshop.create');
    Route::post('store', [Autoshop::class, 'store'])->name('autoshop.store');
    Route::get('edit/{autoshop}', [Autoshop::class, 'edit'])->name('autoshop.edit');
    Route::post('update/{autoshop}', [Autoshop::class, 'update'])->name('autoshop.update');
    Route::post('delete/{autoshop}', [Autoshop::class, 'destroy'])->name('autoshop.destroy');
    Route::get('show/{autoshop}', [Autoshop::class, 'show'])->name('autoshop.show');
});

// ========================== MECHANICS ==========================

Route::group(['prefix' => 'mechanics'], function () {
    Route::get('', [Mecahnic::class, 'index'])->name('mecahnic.index');
    Route::get('create', [Mecahnic::class, 'create'])->name('mecahnic.create');
    Route::post('store', [Mecahnic::class, 'store'])->name('mecahnic.store');
    Route::get('edit/{mecahnic}', [Mecahnic::class, 'edit'])->name('mecahnic.edit');
    Route::post('update/{mecahnic}', [Mecahnic::class, 'update'])->name('mecahnic.update');
    Route::post('delete/{mecahnic}', [Mecahnic::class, 'destroy'])->name('mecahnic.destroy');
    Route::get('show/{mecahnic}', [Mecahnic::class, 'show'])->name('mecahnic.show');
});

// ========================== SERVICES ==========================

Route::group(['prefix' => 'services'], function () {
    Route::get('', [Service::class, 'index'])->name('service.index');
    Route::get('create', [Service::class, 'create'])->name('service.create');
    Route::post('store', [Service::class, 'store'])->name('service.store');
    Route::get('edit/{service}', [Service::class, 'edit'])->name('service.edit');
    Route::post('update/{service}', [Service::class, 'update'])->name('service.update');
    Route::post('delete/{service}', [Service::class, 'destroy'])->name('service.destroy');
    Route::get('show/{service}', [Service::class, 'show'])->name('service.show');
});
