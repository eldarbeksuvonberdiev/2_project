<?php

use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[OvqatController::class,'index'])->name('ovqat.index');
// Route::post('/ovqat-create',[OvqatController::class,'store'])->name('ovqat.store');
// Route::put('/ovqat-update/{ovqat}',[OvqatController::class,'update'])->name('ovqat.put');


// Route::get('/masalliq',[MasalliqController::class,'index']);


Route::get('/',[UniversityController::class,'index'])->name('university');
Route::post('/university-create',[UniversityController::class,'store'])->name('university.create');
Route::put('/university-update/{university}',[UniversityController::class,'update'])->name('university.update');
Route::delete('/university-delete/{university}',[UniversityController::class,'destroy'])->name('university.delete');