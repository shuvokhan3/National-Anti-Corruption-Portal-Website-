<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitCorruptionController extends Controller{
    public function submitForm(){
        return view('pages.corruptionInfoForm');
    }
}
