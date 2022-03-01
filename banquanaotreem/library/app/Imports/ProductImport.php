<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'id_type'     => $row[0],
            'tensp'    => $row[1], 
            'gia'    => $row[2],
            'soluong'    => $row[3],
            'mau'    => $row[4],
            'size'    => $row[5],
            'img'    => $row[6],
            'chatlieu'    => $row[7],
            'mota'    => $row[8],
            'noibat'    => $row[9],
            'status'    => $row[10],
        ]);
    }
}
