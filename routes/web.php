<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;


Route::get('/', [ResultController::class, 'showForm'])->name('result.form');
Route::post('/result/calculate', [ResultController::class, 'calculateResult'])->name('result.calculate');
