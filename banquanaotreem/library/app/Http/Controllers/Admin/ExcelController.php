<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use DB;
use App\Imports\ProductImport;
use App\Imports\HDNImport;
use App\Exports\ProductExport;
use App\Exports\HoaDonNhapExport;

use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    // public function getImport()
    // {
    // 	return view('backend.Import');
    // }
    
   
    public function export() 
    {
        return Excel::download(new ProductExport, 'MauFile.xlsx');
    }
    public function exportHDN() 
    {
        return Excel::download(new HoaDonNhapExport, 'HoaDonNhap.xlsx');
    }
    
    public function import() 
    {
        Excel::import(new ProductImport,'Public/backend/MauFile.xlsx');
           
        return back();
    }
    public function importHDN() 
    {
        Excel::import(new HDNImport,'Public/backend/HoaDonNhap.xlsx');
           
        return back();
    }
}
