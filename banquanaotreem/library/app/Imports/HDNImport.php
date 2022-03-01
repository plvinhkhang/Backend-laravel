<?php

namespace App\Imports;

use App\Models\HoaDonNhap;
use App\Models\ChiTietHDN;

use Maatwebsite\Excel\Concerns\ToModel;

class HoaDonNhapImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new HoaDonNhap([
            'id_nv'     => $row[0],
            'date'    => $row[1], 
            'tongtien'    => $row[2],
            
        ]);
        return new ChiTietHDN([
            'id_prod'     => $row[3],
            'soluong'    => $row[4], 
            'gia'    => $row[5],
            
        ]);
    }
}
