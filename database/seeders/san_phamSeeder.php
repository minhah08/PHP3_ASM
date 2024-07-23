<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class san_phamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->insert(
            [
                [
                    'mo_ta'=> 'giày đẹp',
                    'ten_san_pham'=> 'air force one',
                    'gia'=> 100000,
                    'so_luong'=> '12',
                    'ngay_nhap_hang'=> '2024-06-28',
                    'id_danh_muc'=> '1',
                   
                ],
                [
                    'mo_ta'=> 'giày xấu',
                    'ten_san_pham'=> 'air force two',
                    'gia'=> 2100000,
                    'so_luong'=> '14',
                    'ngay_nhap_hang'=> '2025-06-28',
                    'id_danh_muc'=> '2',
                ]
            ]
        );
    }
}
