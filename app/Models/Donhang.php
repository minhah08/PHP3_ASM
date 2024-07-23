<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Donhang extends Model
{
    use HasFactory;

    public function getListDH(){
        $data = DB::table("don_hangs") 
        ->join("tai_khoans","don_hangs.id_nguoi_dung","=","tai_khoans.id")
        ->select('don_hangs.*', 'tai_khoans.ho_ten')
        // ->join("phuong_thuc_thanh_toan","don_hangs.id_phuong_thuc","=","phuong_thuc_thanh_toan.id")
        // ->select('don_hangs.*', 'phuong_thuc_thanh_toan.ten_phuong_thuc')


        ->get();
        return $data;
       
    }
}
