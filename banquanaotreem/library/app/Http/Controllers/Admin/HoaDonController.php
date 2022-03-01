<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HoaDonBan;
use App\Models\HoaDonNhap;
use App\Models\NhanVien;
use App\Models\ChiTietHDB;
use App\Models\ChiTietHDN;
use DB;
use Mail;
class HoaDonController extends Controller
{
    public function getDSHDB(){
    	$data['hdb']=HoaDonBan::orderby('trangthai','asc')->get();
    	return view('backend.hoadonban',$data);
    } 

    public function getDSHDN(){
        $data['hdn']=DB::table('hoadonnhap')->join('nhanvien','hoadonnhap.id_nv','=','nhanvien.id_nv')->get();
        $data['info']=NhanVien::all();
        return view('backend.hoadonnhap',$data);
    }

    public function getDetails($id)
    {
    	
    	$data['items']=ChiTietHDB::where('id_hdb',$id)->get();
        $data['customerInfo']=HoaDonBan::find($id);
    	return view('backend.ct_hoadonban',$data);
    
    }
     public function getCTHDN($id)
    {
        
        // $data['chitiet']=ChiTietHDN::where('id_hdn',$id)->get();
       $data['tt']=DB::table('hoadonnhap')->join('nhanvien','hoadonnhap.id_nv','=','nhanvien.id_nv')->where('id_hdn',$id)->get();
        $data['chitiet']=DB::table('chitiethdn')->join('vp_products','chitiethdn.id_prod','=','vp_products.id_sp')->get();
        return view('backend.ct_hoadonnhap',$data);
    
    }
    // public function getDeleteHDB($id){
    // 	HoaDonBan::destroy($id);
    //     return back();
    // }
    // public function getEditDetails(Request $req,$id)
    // {
    // 	$data['hoadon']=HoaDonBan::find($id);
    // 	return view('backend.edit_hoadonban',$data);
    // }
    // public function getEditHoaDon($id)
    // {

    //     $data['hoadonban']=HoaDonBan::find($id);
    //     $data['listcate']=Category::all();
    //     return view('backend.edit_hoadonban',$data);
    // }
    public function postHDN(Request $req)
    {
        $hdn=new HoaDonNhap();
        $hdn->id_nv=$req->tennv;
        $hdn->date=$req->ngaynhap;
        $hdn->tongtien=($req->soluong)*($req->gia);
        $hdn->save();
        $detail=new ChiTietHDN;
        $detail->id_hdn=$hdn->id_hdn;        
        $detail->id_prod=$req->masp;
        $detail->soluong=$req->soluong;
        $detail->gia=$req->gia;
        $detail->save();
        return back();

    }
    public function postEditHoaDon($id)
    {
        
    	$hdb= HoaDonBan::find($id);       
        $hdb->trangthai=1;        
       $hdb->save();

        return redirect()->intended('admin/hoadonban');
    }
   
    // public function getDeleteCTHDB($id){
    //     ChiTietHDB::destroy($id);
    //     return back();
    // }

    public function pdfexport($id)
    {
        $data['chitiet']=DB::table('hoadonban')->join('chitiethdb','hoadonban.id_hdb','=','chitiethdb.id_hdb')->where('hoadonban.id_hdb',$id)->get();
        $data['hoadon']=HoaDonBan::find($id);
        $pdf=PDF::loadView('backend.pdf',$data);
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('HoaDon.pdf');
    }
}
