<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorruptionController;
use App\Http\Controllers\CorruptionDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitCorruptionController;
use Illuminate\Support\Facades\Route;


//main page route
Route::get('/',[HomeController::class,'page']);
Route::get('/contact',[ContactController::class,'viewContact']);
Route::get('/about',[AboutController::class,'viewAbout']);
Route::get('/corruptions',[CorruptionController::class,'viewCorruptions']);

//Internal Route
Route::get('/corruptionsDetails',[CorruptionDetailsController::class,'viewDetails']);
Route::get('/submitForm',[SubmitCorruptionController::class,'submitForm']);

