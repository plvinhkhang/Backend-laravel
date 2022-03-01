<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="vp_products";
    protected $primaryKey= 'id_sp';
       protected $guarded=[];

       public function loaisp()
       {
       	return $this->belongTo('App\Models\Category','id_sp','id');
       }
       public function cthdb()
       {
       	return $this->belongTo('App\Models\ChiTietHDB','id_prod','id_hdb');
       }
}
