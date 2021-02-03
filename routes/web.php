<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('welcome');
})->middleware(['auth.shopify'])->name('home');*/

Route::get('/login', function () {
    if (Auth::user()) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::middleware(['auth.shopify'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Other routes that need the shop user

    Route::view('/products', 'products');

    Route::view('/customers', 'customers');

    Route::view('/settings', 'settings');
});
