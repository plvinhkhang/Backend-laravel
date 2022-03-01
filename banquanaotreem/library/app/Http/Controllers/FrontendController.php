<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;
use App\Models\DanhGia;
class FrontendController extends Controller
{
    public function getHome(){
    	$data['new_product']=Product::where('noibat',1)->orderBy('id_sp','desc')->take(8)->get();
    	$data1['best_sale']=Product::where('best_sell',1)->orderBy('id_sp','desc')->take(8)->get();

    	return view('frontend.Home',$data,$data1);
    }
    public function getDetail($id)
    {
    	$data['item']=Product::find($id);
        $data['product']=Product::where('id_type',$data['item']->id_type)->orderBy('id_sp','desc')->take(4)->get();
        $data['comments']=Comment::where('product',$id)->get();
         $data['danhgia']=DanhGia::where('id_product',$id)->get();
    	return view('frontend.ChiTiet',$data);
    }
    public function getIntro()
    {
        return view('frontend.GioiThieu');
    }
    public function getNew()
    {
        return view('frontend.TinTuc');
    }
    public function getContact()
    {
        return view('frontend.LienHe');
    }
    public function getSearch(Request $request)
    {
        
        $product=Product::where('tensp','like','%'.$request->result.'%')->get();
        return view('frontend.Search',compact('product'));
    }
    
    public function getLSP($id){
        $data['categories']=Product::where('id_type',$id)->orderBy('id_sp','asc')->get();
    	return view('frontend.DoBoBeGai',$data);
    }
    
    public function postComment(Request $request,$id)
    {
        $comment=new Comment();
        $comment->name=$request->name;
        $comment->email=$request->email;
        $comment->content=$request->content;
        $comment->product=$id;
        $comment->save();
        return back();

    }
    public function postDanhGia(Request $request,$id)
    {
        $danhgia=new DanhGia();
        $danhgia->hoten=$request->txtten;
        $danhgia->email=$request->txtmail;
        $danhgia->sodt=$request->sdt;
        $danhgia->nhanxet=$request->nhanxet;
        $danhgia->sodiem=$request->danhgia;
        $danhgia->id_product=$id;
        $danhgia->save();
        return back();

    }
}
