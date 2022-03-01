<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VayBeGaiController extends Controller
{
    public function getData(){
    	return view('frontend.VayDamBeGai');
    }
}
