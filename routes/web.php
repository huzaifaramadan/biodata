<?php
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\JalurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ini adalah route tanpa MVC
Route::get('/jalurbaru', function () {
    return 'ini jalur baru tanpa MVC';
});



// ini adalah route mengunakan view
Route::get('/jalurview', function () {
    return view('viewjalur');
});

// ini adalah route mengunakan view & controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


// ini adalah route mengunakan view & controller & model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);


// ini adalah route mengunakan view & controller & model
Route::get('/jalurbiodata', [BiodataController::class, 'menampilkanBioData']);