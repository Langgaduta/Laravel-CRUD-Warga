<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AboutController;
use App\HTTP\Controllers\WargaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/warga', [WargaController::class, 'index']);
    Route::get('/warga/create', [WargaController::class, 'create']);
    Route::post('/warga/store', [wargaController::class, 'store']);
    Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
    Route::put('/warga/{id}', [WargaController::class, 'update']);
    Route::delete('warga/{id}', [WargaController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
