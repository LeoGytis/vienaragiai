<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoshopController as Autoshop;
use App\Http\Controllers\ServiceController as Service;
use App\Http\Controllers\MechanicController as Mechanic;
use App\Http\Controllers\OrderController as O;
use App\Http\Controllers\ClientController as Client;
use App\Http\Controllers\CartController as Cart;

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
    Route::get('show/{autoshopid}', [Autoshop::class, 'show'])->name('autoshop.show');
});

// ========================== MECHANICS ==========================

Route::group(['prefix' => 'mechanics'], function () {
    Route::get('', [Mechanic::class, 'index'])->name('mechanic.index');
    Route::get('create', [Mechanic::class, 'create'])->name('mechanic.create');
    Route::post('store', [Mechanic::class, 'store'])->name('mechanic.store');
    Route::get('edit/{mechanic}', [Mechanic::class, 'edit'])->name('mechanic.edit');
    Route::post('update/{mechanic}', [Mechanic::class, 'update'])->name('mechanic.update');
    Route::post('delete/{mechanic}', [Mechanic::class, 'destroy'])->name('mechanic.destroy');
    Route::get('show/{mechanicid}', [Mechanic::class, 'show'])->name('mechanic.show');
    Route::put('/mechanic/delete-picture/{mechanic}', [Mechanic::class, 'deletePicture'])->name('mechanic-delete-picture');
});

// ========================== SERVICES ==========================

Route::group(['prefix' => 'services'], function () {
    Route::get('', [Service::class, 'index'])->name('service.index');
    Route::get('create', [Service::class, 'create'])->name('service.create');
    Route::post('store', [Service::class, 'store'])->name('service.store');
    Route::get('edit/{service}', [Service::class, 'edit'])->name('service.edit');
    Route::post('update/{service}', [Service::class, 'update'])->name('service.update');
    Route::post('delete/{service}', [Service::class, 'destroy'])->name('service.destroy');
    Route::get('show/{serviceid}', [Service::class, 'show'])->name('service.show');
});


// ========================== ORDERS ==========================


// Route::post('add-service-to-order', [O::class, 'add'])->name('front-add');
// Route::get('my-orders', [O::class, 'showMyOrders'])->name('my-orders');


Route::prefix('orders')->name('orders-')->group(function () {
    Route::post('add', [O::class, 'add'])->name('add');
    Route::get('show', [O::class, 'showMyOrders'])->name('show');

    Route::get('', [O::class, 'index'])->name('index');
    Route::put('status/{order}', [O::class, 'setStatus'])->name('status');
    Route::get('/pdf/{order}', [O::class, 'getPdf'])->name('pdf');
});
