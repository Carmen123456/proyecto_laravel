<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\ciudadController;
use App\Http\Controllers\alianzaController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('Cliente', App\Http\Controllers\clienteController::class);
Route::resource('Ciudad', App\Http\Controllers\ciudadController::class);
Route::resource('Alianza', App\Http\Controllers\alianzaController::class);

Route::resource('Bill', App\Http\Controllers\billController::class);
Route::resource('Categorie', App\Http\Controllers\categorieController::class);
Route::resource('Checkout', App\Http\Controllers\checkoutController::class);

Route::resource('Document', App\Http\Controllers\documentController::class);
Route::resource('Product', App\Http\Controllers\productController::class);
Route::resource('Provider', App\Http\Controllers\providerController::class);

Route::resource('Usuario', App\Http\Controllers\UserController::class);
Route::resource('Sale', App\Http\Controllers\saleController::class);

Route::resource('Profile', App\Http\Controllers\ProfileController::class);
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Inicio');
