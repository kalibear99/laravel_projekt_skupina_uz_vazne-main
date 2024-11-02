<?php
use App\Http\Controllers\GunController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guns', [GunController::class, 'index']);

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/others', function () {
    return view('others');
});





