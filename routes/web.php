<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//main page route

Route::get('/',[HomeController::class,'page']);
