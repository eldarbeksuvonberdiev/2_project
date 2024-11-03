<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[OvqatController::class,'index'])->name('ovqat.index');
// Route::post('/ovqat-create',[OvqatController::class,'store'])->name('ovqat.store');
// Route::put('/ovqat-update/{ovqat}',[OvqatController::class,'update'])->name('ovqat.put');


// Route::get('/masalliq',[MasalliqController::class,'index']);


// Route::get('/',[UniversityController::class,'index'])->name('university');
// Route::post('/university-create',[UniversityController::class,'store'])->name('university.create');
// Route::put('/university-update/{university}',[UniversityController::class,'update'])->name('university.update');
// Route::delete('/university-delete/{university}',[UniversityController::class,'destroy'])->name('university.delete');

Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::post('/category-create',[CategoryController::class,'store'])->name('category.create');
Route::put('/category-edit/{category}',[CategoryController::class,'update'])->name('category.edit');
Route::delete('/category-delete/{category}',[CategoryController::class,'destroy'])->name('category.delete');

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::post('/post-create',[PostController::class,'store'])->name('post.create');
Route::put('/post-edit/{post}',[PostController::class,'update'])->name('post.edit');
Route::delete('/post-delete/{post}',[PostController::class,'destroy'])->name('post.delete');


Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/login',[AuthController::class,'loginPage'])->name('tologin');
Route::get('/register',[AuthController::class,'registerPage'])->name('toregister');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');



Route::get('/',[UserController::class,'index'])->name('user.index');


