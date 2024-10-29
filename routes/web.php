<?php

use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ovqat',[OvqatController::class,'index'])->name('ovqat.index');
Route::post('/ovqat-create',[OvqatController::class,'store'])->name('ovqat.store');
Route::put('/ovqat-update/{ovqat}',[OvqatController::class,'update'])->name('ovqat.put');


Route::get('/masalliq',[MasalliqController::class,'index']);
