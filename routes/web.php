<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeController;
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


Route::get('/admin', [AdminController::class, 'index']);
//Route::middleware(['role:admin'])->prefix('settings')->group(function () {
//});
Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
