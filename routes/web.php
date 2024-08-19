<?php
use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/computers', [ComputerController::class, 'index'])->middleware('auth');
Route::get('/computers/create', [ComputerController::class, 'create']);
Route::post('/computers', [ComputerController::class, 'store'])->middleware('auth');
Route::get('/computers/{id}', [ComputerController::class, 'show'])->middleware('auth');
Route::delete('/computers/{id}', [ComputerController::class, 'destroy'])->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
