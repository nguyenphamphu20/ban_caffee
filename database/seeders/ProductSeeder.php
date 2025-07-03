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
            ],
            [
                'ten_san_pham' => 'Cappuccino',
                'mo_ta' => 'Cà phê sữa Ý với bọt sữa dày',
                'danh_muc_id' => 1,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Italia',
                'huong_vi' => 'Béo ngậy, thơm',
                'hinh' => 'cappuccino.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Americano',
                'mo_ta' => 'Cà phê đen pha loãng kiểu Mỹ',
                'danh_muc_id' => 1,
                'do_rang' => 'Dark',
                'nguon_goc' => 'Mỹ',
                'huong_vi' => 'Đắng nhẹ, thanh',
                'hinh' => 'americano.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Trà Sen',
                'mo_ta' => 'Trà xanh ướp hương sen',
                'danh_muc_id' => 2,
                'do_rang' => 'Light',
                'nguon_goc' => 'Việt Nam',
                'huong_vi' => 'Thơm hương sen',
                'hinh' => 'tra-sen.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Trà Oolong',
                'mo_ta' => 'Trà oolong cao cấp Đài Loan',
                'danh_muc_id' => 2,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Đài Loan',
                'huong_vi' => 'Hậu vị ngọt',
                'hinh' => 'tra-oolong.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Espresso',
                'mo_ta' => 'Cà phê espresso nguyên chất',
                'danh_muc_id' => 1,
                'do_rang' => 'Dark',
                'nguon_goc' => 'Italia',
                'huong_vi' => 'Đậm đặc, vị đắng',
                'hinh' => 'espresso.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Mocha',
                'mo_ta' => 'Cà phê pha với sô cô la',
                'danh_muc_id' => 1,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Pháp',
                'huong_vi' => 'Ngọt dịu, vị cacao',
                'hinh' => 'mocha.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Trà Vải',
                'mo_ta' => 'Trà đen ướp vải thiều',
                'danh_muc_id' => 2,
                'do_rang' => 'Light',
                'nguon_goc' => 'Việt Nam',
                'huong_vi' => 'Ngọt thanh, hương vải',
                'hinh' => 'tra-vai.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Cold Brew',
                'mo_ta' => 'Cà phê ủ lạnh',
                'danh_muc_id' => 1,
                'do_rang' => 'Medium',
                'nguon_goc' => 'Mỹ',
                'huong_vi' => 'Ít đắng, vị thanh',
                'hinh' => 'cold-brew.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Bánh Mousse Socola',
                'mo_ta' => 'Bánh mousse socola Pháp',
                'danh_muc_id' => 3,
                'do_rang' => 'Dark',
                'nguon_goc' => 'Pháp',
                'huong_vi' => 'Ngọt đậm, béo ngậy',
                'hinh' => 'mousse-socola.jpg',
                'trang_thai' => 'Còn Hàng'
            ],
            [
                'ten_san_pham' => 'Trà Gừng',
                'mo_ta' => 'Trà gừng mật ong',
                'danh_muc_id' => 2,
                'do_rang' => 'Light',
                'nguon_goc' => 'Việt Nam',
                'huong_vi' => 'Ấm nóng, vị gừng',
                'hinh' => 'tra-gung.jpg',
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
