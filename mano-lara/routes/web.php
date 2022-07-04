<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get('/bebras', fn () => 'Valio, bebrams!');

Route::get('/barsukas', [AnimalController::class, 'barsukas']);   //[kontrolerio klase, kontrolerio metodas]

Route::get('/briedis/{id}', [AnimalController::class, 'briedis']);

Route::get('/suma/{a}/{b?}', [AnimalController::class, 'suma']); // ? nurodo optional
