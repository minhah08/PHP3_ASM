<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    public function getAllTK()
    {
        $data = DB::table("tai_khoans")
            ->join('chuc_vus', 'tai_khoans.id_chuc_vu', '=', 'chuc_vus.id')
            ->select('tai_khoans.*', 'chuc_vus.ten_chuc_vu')
            ->orderBy('tai_khoans.id', 'desc')
            ->get();
        return $data;
    }

    public function createTK($data){
        DB::table('tai_khoans')->insert([
            'hinh_anh'=> $data['hinh_anh'],
            'ho_ten'=> $data['ho_ten'],
            'email'=> $data['email'],
            'sdt'=> $data['sdt'],
           'gioi_tinh'=> $data['gioi_tinh'],
            'dia_chi'=> $data['dia_chi'],
            'ngay_sinh'=> $data['ngay_sinh'],
            'mat_khau'=> $data['mat_khau'],
            'id_chuc_vu'=> $data['id_chuc_vu'],
            'id_trang_thai'=> $data['id_trang_thai'],
        ]);
    }
}

