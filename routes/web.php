<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
    return view('pages.home');
})->name('inicio');

Route::get('/carrito', function () {
    return view('pages.carrito');
})->name('carrito');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/boxy', function () {
    return view('pages.boxy');
})->name('boxy');


Route::post('addCart', [CartController::class, 'store'])->name('addCart');
Route::get('deleteCart/{id}', [CartController::class, 'destroy'])->name('deleteCart');
Route::post('datosCliente', [CartController::class, 'datosCliente'])->name('datosCliente');
Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('response', [CartController::class, 'response'])->name('response');