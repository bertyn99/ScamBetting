<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EquipeController;
use \App\Http\Controllers\JeuController;
use \App\Http\Controllers\ParisController;
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
Route::get('admin/equipe/{id}/edit', [EquipeController::class, 'edit'])->middleware('admin')->name("equipe.edit");
Route::put('admin/equipe/{id}/update', [EquipeController::class, 'update'])->middleware('admin')->name("equipe.update");
Route::delete('admin/equipe', [EquipeController::class, 'destroy'])->middleware('admin')->name("equipe.destroy");

#CRUD JEU
Route::get('admin/jeu', [JeuController::class, 'index'])->middleware('admin')->name("jeu.index");
Route::get('admin/jeu/create', [JeuController::class, 'create'])->middleware('admin')->name("jeu.create");
Route::post('admin/jeu', [JeuController::class, 'store'])->middleware('admin')->name("jeu.store");
Route::get('admin/jeu/{id}/edit', [JeuController::class, 'edit'])->middleware('admin')->name("jeu.edit");
Route::put('admin/jeu/{id}/update', [JeuController::class, 'update'])->middleware('admin')->name("jeu.update");
Route::get('admin/jeu/{id}/delete', [JeuController::class, 'destroy'])->middleware('admin')->name("jeu.destroy");

#CRUD PARIS
Route::get('admin/paris', [ParisController::class, 'index'])->middleware('admin')->name("bet.index");
Route::get('admin/paris/create', [ParisController::class, 'create'])->middleware('admin')->name("bet.create");
Route::post('admin/paris', [ParisController::class, 'store'])->middleware('admin')->name("bet.store");
Route::get('admin/paris/{id}/edit', [ParisController::class, 'edit'])->middleware('admin')->name("bet.edit");
Route::put('admin/paris/{id}/update', [ParisController::class, 'update'])->middleware('admin')->name("bet.update");
Route::get('admin/paris/{id}/delete', [ParisController::class, 'destroy'])->middleware('admin')->name("bet.destroy");


Route::get('/home', [HomeController::class, 'index'])->name('home');
