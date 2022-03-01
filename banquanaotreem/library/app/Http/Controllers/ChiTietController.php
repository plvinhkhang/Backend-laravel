<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiTietController extends Controller
{
    public function getData()
    {
    	return view('frontend.ChiTiet');
    }
}
