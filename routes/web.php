<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorruptionController;
use App\Http\Controllers\CorruptionDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitCorruptionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;


//main page route
Route::get('/',[UserController::class,'page']);
Route::get('/contact',[UserController::class,'viewContact']);
Route::get('/about',[UserController::class,'viewAbout']);
Route::get('/corruptions',[UserController::class,'viewCorruptions']);

//auth frontend view
Route::get('/user-Login',[UserController::class, 'viewLogin']);
Route::get('/user-Register',[UserController::class, 'viewRegister']);
//user profile view
Route::get('/userProfile',[UserController::class, 'userProfile']);

//Internal Route
Route::get('/corruptionsDetails',[UserController::class,'viewDetails']);
Route::get('/submitForm',[UserController::class,'submitForm'])->middleware([TokenVerificationMiddleware::class]);


//auth backend
Route::post('/UserRegistration',[UserController::class, 'UserRegistration']);
Route::post('/UserLogin',[UserController::class, 'UserLogin']);
//user logout
Route::get('/logout',[UserController::class,'UserLogout']);

//Corruption Report create
Route::post('/createReport',[UserController::class,'CreateReport'])->middleware([TokenVerificationMiddleware::class]);





//admin route
Route::get('/viewDashboard',[AdminDashboardController::class,'viewDashboard']);
Route::get('/adminViewReports',[AdminDashboardController::class,'adminViewReports']);
Route::get('/adminReportsDetails',[AdminDashboardController::class,'adminReportsDetails']);


