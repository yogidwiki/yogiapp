<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::post('/admin/film/tambah/data-film', [App\Http\Controllers\AdminController::class, 'store']);
Route::post('/admin/film/update/{id}', [App\Http\Controllers\AdminController::class, 'update']);
Route::get('/admin/film/hapus/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);
Route::get('/admin/film/detail/{id}', [\App\Http\Controllers\AdminController::class,'show']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');