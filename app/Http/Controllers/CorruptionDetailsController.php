<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorruptionDetailsController extends Controller {
    public function viewDetails(){
        return view('pages.corruptionsDetails');
    }
}
