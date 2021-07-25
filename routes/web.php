<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index')->middleware('auth');

Route::get('/showerrormsg/{blog}',[BlogController::class,'showAlertMsg'])->name('blogs.destory')->middleware('auth');
Route::get('/deleteblogs/{blog}',[BlogController::class,'destory'])->middleware('auth');
Route::get('/blogs/{blog}/edit',[BlogController::class,'edit'])->name('blogs.edit')->middleware('auth');
Route::get('/blogs/{blog}',[BlogController::class,'show']);
Route::put('/blogs/{blog}',[BlogController::class,'update'])->name('blogs.update')->middleware('auth');

Route::get('/createblog',[BlogController::class,'create'])->name('blogs.create')->middleware('auth');

Route::post('/blogs',[BlogController::class,'store'])->name('blogs.store')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
