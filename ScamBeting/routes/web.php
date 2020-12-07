<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EquipeController;
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
Route::get('admin', [HomeController::class, 'admin'])->middleware('admin');

# CRUD EQUIPE
Route::get('admin/equipe', [EquipeController::class, 'index'])->middleware('admin')->name("equipe.index");
Route::get('admin/equipe/create', [EquipeController::class, 'create'])->middleware('admin')->name("equipe.create");
Route::post('admin/equipe', [EquipeController::class, 'store'])->middleware('admin')->name("equipe.store");
Route::put('admin/equipe', [EquipeController::class, 'edit'])->middleware('admin')->name("equipe.edit");
Route::put('admin/equipe/{id}/update', [EquipeController::class, 'update'])->middleware('admin')->name("equipe.update");
Route::delete('admin/equipe', [EquipeController::class, 'destroy'])->middleware('admin')->name("equipe.destroy");

Route::get('/home', [HomeController::class, 'index'])->name('home');
