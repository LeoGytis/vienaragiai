<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController as C; //nepamirsti pasi'usinti
use App\Http\Controllers\FundsController as Funds;

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

Route::get('/home', [C::class, 'index'])->name('clients-index');


// ========================== CLIENTS ==========================

Route::get('/clients', [C::class, 'index'])->name('clients-index')->middleware('rp:user');
Route::get('/clients/create', [C::class, 'create'])->name('clients-create')->middleware('rp:user');
Route::post('/clients', [C::class, 'store'])->name('clients-store')->middleware('rp:user');
Route::get('/clients/edit/{client}', [C::class, 'edit'])->name('clients-edit')->middleware('rp:admin');
Route::put('/clients/{client}', [C::class, 'update'])->name('clients-update')->middleware('rp:admin');
Route::delete('/clients/{client}', [C::class, 'destroy'])->name('clients-delete')->middleware('rp:admin');
Route::get('/clients/show/{id}', [C::class, 'show'])->name('clients-show')->middleware('rp:user');

// ========================== FUNDS ==========================

Route::get('/clients/funds/{client}', [C::class, 'funds'])->name('clients-funds');
Route::put('/clients/addfunds/{client}', [C::class, 'addfunds'])->name('clients-addfunds');
Route::put('/clients/withdrawfunds/{client}', [C::class, 'withdrawfunds'])->name('clients-withdrawfunds');
Route::put('/clients/editfunds/{client}', [C::class, 'editfunds'])->name('clients-editfunds');

// ========================== VITE ==========================
Auth::routes();
