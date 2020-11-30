<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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
    return view('accueil');
});

Route::get('/login', function () {
    return view('accueil');
});

Auth::routes();
Route::get('admin/routes', [HomeController::class, 'admin'])->middleware('admin');

# CRUD EQUIPE
Route::get('admin/equipe', [EquipeController::class, 'index'])->middleware('admin');
Route::get('admin/equipe', [EquipeController::class, 'create'])->middleware('admin');
Route::get('admin/equipe', [EquipeController::class, 'edit'])->middleware('admin');
Route::get('admin/equipe', [EquipeController::class, 'destroy'])->middleware('admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');

