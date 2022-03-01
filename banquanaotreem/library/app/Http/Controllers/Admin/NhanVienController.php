<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use App\Models\HoaDonNhap;
class NhanVienController extends Controller
{
    public function getDSNV(){
    	$data['nhanvien']=NhanVien::where('status',1)->get();
    	return view('backend.nhanvien',$data);
    }
     public function postNV(Request $req){
        $this->validate($req,[
            'email'=>'required|unique:nhanvien,email'
        ],
        ['email.unique'=>'Không thể thêm nhân viên vì email đã tồn tại']);
    	$nhanvien=new NhanVien();
    	$nhanvien->hoten=$req->txtTen;
    	$nhanvien->ngaysinh=$req->ngaysinh;  
    	$nhanvien->diachi=$req->diachi; 
    	$nhanvien->email=$req->email;
    	$nhanvien->sodienthoai=$req->sdt;
        $nhanvien->user=$req->user1;
        $nhanvien->password=bcrypt($req->pass1); 	
    	$nhanvien->save();
    	return back()->with('thongbao');
    }
	public function postEditNV(Request $req){
        
    
    	$nhanvien=NhanVien::find($req->id);
    	$nhanvien->hoten=$req->ten;
    	$nhanvien->ngaysinh=$req->ns;  
    	$nhanvien->diachi=$req->dc; 
    	$nhanvien->email=$req->mail;
    	$nhanvien->sodienthoai=$req->sodt; 
        $nhanvien->user=$req->user;
        $nhanvien->password=bcrypt($req->pass);	
    	$nhanvien->save();
    	return back();
    }
    public function getDeleteNV(Request $req,$id)
    {
    	$nhanvien=HoaDonNhap::where('id_nv',$req->id)->count();
        if($nhanvien==0)
        {
            NhanVien::destroy($id);
        }
        else
        {
            $nv=NhanVien::find($id);
            $nv->status=0;
            $nv->save();
            
        }
        return back();
    }
}
