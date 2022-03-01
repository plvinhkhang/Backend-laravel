<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
   protected $table="hoadonban";
   protected $primaryKey= 'id_hdb';
    
       // protected $guarded=[];
       public function cthdb()
       {
       	return $this->hasMany('App\Models\ChiTietHDB','id_hdb','id_hdb');
       }
}
