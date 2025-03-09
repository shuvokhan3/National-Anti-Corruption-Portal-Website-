<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function page(Request $request){
        return view('pages.home');
    }
}
