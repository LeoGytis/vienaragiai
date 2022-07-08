<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController as C; //nepamirsti pasi'usinti

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

Route::get('/clients', [C::class, 'index'])->name('clients-index');
Route::get('/clients/create', [C::class, 'create']);
Route::post('/clients', [C::class, 'store'])->name('clients-store');
