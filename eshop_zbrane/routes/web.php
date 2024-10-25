<?php
use App\Http\Controllers\GunController;
use Illuminate\Support\Facades\Route;

// Welcome page as the main layout
Route::get('/', function () {
    return view('welcome');
});

// Dummy routes for guns, Equipment, and Others
Route::get('/guns', [GunController::class, 'index']);

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/others', function () {
    return view('others');
});





