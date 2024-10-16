<?php
use App\Http\Controllers\GunController;
use Illuminate\Support\Facades\Route;

// Welcome page as the main layout
Route::get('/', function () {
    return view('welcome');
});

// Dummy routes for Categories, Equipment, and Others
Route::get('/categories', function () {
    return view('categories');
});

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/others', function () {
    return view('others');
});




// Route::get('/', [GunController::class, 'index']);
// Route::get('/guns/{id}', [GunController::class, 'show']);
// Route::get('/', function () {
//     return view('welcome');
// });
