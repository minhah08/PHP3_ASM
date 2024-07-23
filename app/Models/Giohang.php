<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Giohang extends Model
{
    use HasFactory;
    public function getListGH(){
        $data = DB::table("gio_hangs") 
        ->join("tai_khoans","gio_hangs.id_nguoi_dung","=","tai_khoans.id")
        ->select('gio_hangs.*', 'tai_khoans.ho_ten')
        // ->join("phuong_thuc_thanh_toan","don_hangs.id_phuong_thuc","=","phuong_thuc_thanh_toan.id")
        // ->select('don_hangs.*', 'phuong_thuc_thanh_toan.ten_phuong_thuc')


        ->get();
        return $data;
       
    }
}
