<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\HoaDonBan;
use App\Models\ChiTietHDB;
use Mail;
class CartController extends Controller
{

    public function getAddCart($id){
    	
    	$product=Product::find($id);
    	Cart::add(['id' => $id, 'name' => $product->tensp, 'qty' => 1, 'price' => $product->gia, 'options' => ['img' => $product->img]]);
    	return redirect('cart/show');
    	

    }
    public function getInfo(){
        return view('frontend.TTKH');
    }
    public function getShowCart(){
    	$data['total']=Cart::total();
    	$data['items']=Cart::content();               
    	return view('frontend.GioHang',$data);
    }
    public function getDeleteCart($id){
    	Cart::remove($id);
    	return back();
    }
    public function getUpdateCart(Request $request){
    	Cart::update($request->rowId,$request->qty);
    	return back();
    }
   public function getCheckout()
    {
        $data['items']=Cart::content();
        $data['total']=Cart::total();
        return view('frontend.DatHang',$data);
    }
   
    public function getComplete(){
       $data1['items']=Cart::content();
        return view('frontend.Complete',$data1);

    }
   
    public function postComplete(Request $req){

        $data['cate']=Cart::content();
        $hdb=new HoaDonBan();
        $hdb->hotenkh=$req->ten;  
        $hdb->diachi=$req->diachi;  
        $hdb->email=$req->email;  
        $hdb->sdt=$req->sdt;  
        $hdb->ngayban=date('Y-m-d');
        $hdb->chuthich=$req->chuthich;
        $hdb->trangthai=0;
        $hdb->tongtien=str_replace(',', '', Cart::total());       
        $hdb->save();
        if(count($data['cate'])>0)
        {
            foreach ($data['cate'] as $key => $item) {
                $detail=new ChiTietHDB;
                $detail->id_hdb=$hdb->id_hdb;
                $detail->id_prod=$item->id;
                $detail->tensp=$item->name;
                $detail->gia=$item->price;
                $detail->soluong=$item->qty;
                $detail->thanhtien=$item->price*$item->qty;
                $detail->img=$item->options->img;
                $detail->save();
                $sp=Product::find($item->id);
                $sp->soluong=$sp->soluong-$item->qty;
                $sp->save();

            }
            Cart::destroy();
        }

        $data['info']=$req->all();
        $email=$req->email;
        
        Mail::send('frontend.Email', $data, function ($message) use($email) {
        $message->from('dothuylinhhy1998@gmail.com', 'Thùy Linh');

        $message->to($email,$email)->subject('Xác nhận mua hàng thành công!');
        $message->cc('iyoona451@gmail.com','Thùy Linh');
        
        });
        return redirect('complete');

    }
}
