<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HoaDonBan;
use App\Models\ChiTietHDB;
use Auth;
class HomeController extends Controller
{
    public function getHome(){
    	return view('backend.index');
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('login');
    }
    public function getHDB(){
    	$data['hdb']=HoaDonBan::where('trangthai',0)->get();
    	return view('backend.index',$data);
    }
    
    
}
