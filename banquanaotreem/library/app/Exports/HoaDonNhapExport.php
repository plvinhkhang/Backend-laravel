<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\HoaDonNhap;
use App\Models\ChiTietHDN;
class HoaDonNhapExport implements FromCollection
{
    public function collection()
    {
        return ChiTietHDN::all();
    }
}
