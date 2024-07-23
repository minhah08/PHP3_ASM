<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Binhluan extends Model
{
    use HasFactory;

    public function getAllBL()
    {
        $data = DB::table("binh_luans")
            ->join('tai_khoans', 'binh_luans.id_tai_khoan', '=', 'tai_khoans.id')
            ->select('binh_luans.*', 'tai_khoans.ho_ten')
            // ->join('san_phams', 'binh_luans.id_san_pham', '=', 'san_phams.id')
            // ->select('binh_luans.*', 'san_phams.ten_san_pham')
            ->orderBy('binh_luans.id', 'desc')
            ->get();
        return $data;
    }
}
