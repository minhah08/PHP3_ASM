<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Danhmuc extends Model
{
    use HasFactory;
    public function getAllDM(){
        $data = DB::table("danh_mucs")->get();
        return $data;
       }

       public function createDM($datas){
        DB::table("danh_mucs")
        ->orderBy("id","desc")
        ->insert($datas);
       }
}
