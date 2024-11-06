<?php
use App\Http\Controllers\GunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnifeController; // Import KnifeController

Route::get('/', function () {
    return view('welcome');
});
Route::get('/knives', [KnifeController::class, 'index']); 
Route::get('/guns', [GunController::class, 'index']);

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/others', function () {
    return view('others');
});
use App\Http\Controllers\CartController;

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart', [CartController::class, 'viewCart'])->name('cart.view'); // Tato cesta zůstává stejná
Route::get('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');




