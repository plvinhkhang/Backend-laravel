<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietHDB extends Model
{
    protected $table="chitiethdb";
   
       // protected $guarded=[];
       public function sanpham()
       {
       	return $this->belongTo('App\Models\Product','id','id');
       }
       public function hdb()
       {
       		return $this->belongTo('App\Models\HoaDonBan','id_hdb','id_hdb');
       }
}
