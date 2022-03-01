<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ChiTietHDB;
use DB;
class ProductController extends Controller
{
    public function getPro(){
    	$data['productlist']=DB::table('vp_products')->join('vp_categories','vp_products.id_type','=','vp_categories.id')->where('vp_products.status',1)->orderby('id_sp','desc')->get();
        $data['catelist']=Category::all();
    	return view('backend.product',$data);
    }
   public function getProduct(){
        $data['listproduct']=DB::table('vp_products')->join('vp_categories','vp_products.id_type','=','vp_categories.id')->where('vp_products.status',0)->orderby('id_sp','desc')->get();
        return view('backend.an_product',$data);
    }
    
    public function postProduct(Request $req){
        $filename=$req->img->getClientOriginalName();
    	$product=new Product();
    	$product->tensp=$req->txtTen;
    	$product->id_Type=$req->txtLSP;
    	$product->gia=$req->txtGia;
    	$product->soluong=$req->txtSL;
    	$product->mau=$req->txtMau;
    	$product->size=$req->txtSize;
    	$product->img=$filename;
        $product->chatlieu=$req->txtCL;
    	$product->mota=$req->mota;
        $product->status=1;    	
    	$product->save();
        $req->img->storeAs('avatar',$filename);
    	return back();
    	}

    public function getDeleteProduct(Request $req,$id){
        $sanpham=ChiTietHDB::where('id_prod',$req->id)->count();
        if($sanpham==0)
        {
            Product::destroy($id);
        }
    	else
        {
            $sp=Product::find($id);
            $sp->status=0;
            $sp->save();
        }
        return back();
    }
    // public function getEditProduct($id)
    // {

    //     $data['dataprod']=Product::find($id);
    //     $data['listcate']=Category::all();
    //     return view('backend.editproduct',$data);
    // }
    
    public function postEditProduct(Request $req)
    {
         $product= Product::find($req->id);         
        $product->tensp=$req->ten;
       $product->id_Type=$req->loai;
       $product->gia=$req->gia;
       $product->soluong=$req->soluong;
        $product->mau=$req->mau;
        $product->size=$req->kichthuoc;       
       $product->chatlieu=$req->chatlieu;
        $product->mota=$req->motasp; 
         $filename=$req->anh->getClientOriginalName();
          $product->img=$filename;
        $product->save();
        
        $req->anh->storeAs('avatar',$filename);
        return back();
    }

}
