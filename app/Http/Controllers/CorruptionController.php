<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorruptionController extends Controller{
    public function viewCorruptions(){
        return view('pages.corruptions');
    }
}
