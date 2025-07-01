<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listProducts =  [
            [
                'ten_san_pham' => 'Cà Phê Đen',
                'mo_ta' => 'Cà phê đen truyền thống',
                'danh_muc_id' => 1,
                'do_rang' => 'Dark',
                'nguon_goc' => 'Việt Nam',
                'huong_vi' => 'Đậm đà, vị đắng',
                'hinh' => 'ca-phe-den.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Latte',
                'mo_ta' => 'Cà phê sữa Ý',
                'danh_muc_id' => 1,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Italia',
                'huong_vi' => 'Béo ngậy, vị nhẹ',
                'hinh' => 'latte.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Trà Đào',
                'mo_ta' => 'Trà đào cam sả',
                'danh_muc_id' => 2,
                'do_rang' => 'Light',
                'nguon_goc' => 'Đài Loan',
                'huong_vi' => 'Ngọt thanh, hương đào',
                'hinh' => 'tra-dao.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Matcha Đá Xay',
                'mo_ta' => 'Matcha đá xay kem tươi',
                'danh_muc_id' => 4,
                'do_rang' => 'Light',
                'nguon_goc' => 'Nhật Bản',
                'huong_vi' => 'Vị trà xanh đậm đà',
                'hinh' => 'matcha-da-xay.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Tiramisu',
                'mo_ta' => 'Bánh tiramisu Ý',
                'danh_muc_id' => 3,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Italia',
                'huong_vi' => 'Cà phê, cacao',
                'hinh' => 'tiramisu.jpg',
                'trang_thai' => 'Còn Hàng'
            ]
        ];

        try {
            foreach ($listProducts as $product) {
                DB::table("san_phams")->insert($product);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
