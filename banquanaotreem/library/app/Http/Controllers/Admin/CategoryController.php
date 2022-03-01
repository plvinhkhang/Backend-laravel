<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
class CategoryController extends Controller
{
    public function getCate(){
    	$data['catelist']=Category::where('status',1)->get();
    	return view('backend.category',$data);
    }

    public function postCate(AddCateRequest $req){
        
    	$category=new Category();
    	$category->name=$req->txtTen;    	
    	$category->save();
    	return back();
    }

    public function getEditCate($id){
        $data['datacate']=Category::find($id);
    	return view('backend.editcategory',$data);
    }
    public function postEditCate(Request $req){
        $category= Category::find($req->id);
        $category->name=$req->tenloai;       
        $category->save();        
        return back();
    }
    public function getDeleteCate(Request $req,$id){
        $loaisp=Product::where('id_sp',$req->id)->count();
        if($loaisp==0)
        {
            Category::destroy($id);
        }
    	else
        {
            // $lsp=Category::find($id);
            // $lsp->status=0;
            // $lsp->save();
            echo
            "
            <script type='text/javascript'>
                alert('Bạn không thể xóa loại sản phẩm này!');
                window.location='";
                echo asset('admin/category');
                echo "'
            </script>";
            
        }
        // return back();
    }

}
