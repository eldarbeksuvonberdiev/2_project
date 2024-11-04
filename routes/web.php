<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/category',[CategoryController::class,'index'])->name('category.index')->middleware('auth');
Route::post('/category-create',[CategoryController::class,'store'])->name('category.create');
Route::put('/category-edit/{category}',[CategoryController::class,'update'])->name('category.edit');
Route::delete('/category-delete/{category}',[CategoryController::class,'destroy'])->name('category.delete');

Route::get('/post',[PostController::class,'index'])->name('post.index')->middleware('auth');
Route::post('/post-create',[PostController::class,'store'])->name('post.create');
Route::put('/post-edit/{post}',[PostController::class,'update'])->name('post.edit');
Route::delete('/post-delete/{post}',[PostController::class,'destroy'])->name('post.delete');


Route::get('/login',[AuthController::class,'loginPage'])->name('tologin');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/register',[AuthController::class,'registerPage'])->name('toregister');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'index'])->name('user.index');




