<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{
    public function viewContact(){
        return view('pages.contact');
    }
}
