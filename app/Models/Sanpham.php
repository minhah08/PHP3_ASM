<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sanpham extends Model
{
    use HasFactory;

    public function getAll()
    {
        $data = DB::table("san_phams")
            ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id')
            ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
            ->orderBy('san_phams.id', 'desc')
            ->get();
        return $data;
    }

    public function createProduct($data)
    {
        DB::table('san_phams')->insert([
            'hinh_anh'=> $data['hinh_anh'],
            'ten_san_pham'=> $data['ten_san_pham'],
            'gia'=> $data['gia'],
            'so_luong'=> $data['so_luong'],
           'ngay_nhap_hang'=> $data['ngay_nhap_hang'],
            'id_danh_muc'=> $data['id_danh_muc'],
            'mo_ta'=> $data['mo_ta'],
        ]);
    }
}
