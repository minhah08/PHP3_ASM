<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chucvu extends Model
{
    use HasFactory;

    public function getallCV(){
        $data = DB::table("chuc_vus")->get();
        return $data;
    }

    public function createCV($data)
    {
        DB::table('chuc_vus')->insert([
            'ten_chuc_vu'=> $data['ten_chuc_vu'],
        ]);
    }
}
