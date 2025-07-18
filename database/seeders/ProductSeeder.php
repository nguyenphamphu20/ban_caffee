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
                'danh_muc_id' => 1,
                'cung_cap_id' => 1,
                'ten_san_pham' => 'Cà Phê Đen',
                'mo_ta' => 'Cà phê đen truyền thống',
                'do_rang' => 'Dark',
                'huong_vi' => 'Đậm đà, vị đắng',
                'hinh' => 'ca-phe-den.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 25000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 2,
                'ten_san_pham' => 'Latte',
                'mo_ta' => 'Cà phê sữa Ý',
                'do_rang' => 'Medium',
                'huong_vi' => 'Béo ngậy, vị nhẹ',
                'hinh' => 'latte.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 45000,
            ],
            [
                'danh_muc_id' => 2,
                'cung_cap_id' => 3,
                'ten_san_pham' => 'Trà Đào',
                'mo_ta' => 'Trà đào cam sả',
                'do_rang' => 'Light',
                'huong_vi' => 'Ngọt thanh, hương đào',
                'hinh' => 'tra-dao.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 35000,
            ],
            [
                'danh_muc_id' => 4,
                'cung_cap_id' => 4,
                'ten_san_pham' => 'Matcha Đá Xay',
                'mo_ta' => 'Matcha đá xay kem tươi',
                'do_rang' => 'Light',
                'huong_vi' => 'Vị trà xanh đậm đà',
                'hinh' => 'matcha-da-xay.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 40000,
            ],
            [
                'danh_muc_id' => 3,
                'cung_cap_id' => 2,
                'ten_san_pham' => 'Tiramisu',
                'mo_ta' => 'Bánh tiramisu Ý',
                'do_rang' => 'Medium',
                'huong_vi' => 'Cà phê, cacao',
                'hinh' => 'tiramisu.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 35000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 2,
                'ten_san_pham' => 'Cappuccino',
                'mo_ta' => 'Cà phê sữa Ý với bọt sữa dày',
                'do_rang' => 'Medium',
                'huong_vi' => 'Béo ngậy, thơm',
                'hinh' => 'cappuccino.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 45000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 5,
                'ten_san_pham' => 'Americano',
                'mo_ta' => 'Cà phê đen pha loãng kiểu Mỹ',
                'do_rang' => 'Dark',
                'huong_vi' => 'Đắng nhẹ, thanh',
                'hinh' => 'americano.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 40000,
            ],
            [
                'danh_muc_id' => 2,
                'cung_cap_id' => 1,
                'ten_san_pham' => 'Trà Sen',
                'mo_ta' => 'Trà xanh ướp hương sen',
                'do_rang' => 'Light',
                'huong_vi' => 'Thơm hương sen',
                'hinh' => 'tra-sen.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 45000,
            ],
            [
                'danh_muc_id' => 2,
                'cung_cap_id' => 3,
                'ten_san_pham' => 'Trà Oolong',
                'mo_ta' => 'Trà oolong cao cấp Đài Loan',
                'do_rang' => 'Medium',
                'huong_vi' => 'Hậu vị ngọt',
                'hinh' => 'tra-oolong.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 50000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 2,
                'ten_san_pham' => 'Espresso',
                'mo_ta' => 'Cà phê espresso nguyên chất',
                'do_rang' => 'Dark',
                'huong_vi' => 'Đậm đặc, vị đắng',
                'hinh' => 'espresso.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 25000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 6,
                'ten_san_pham' => 'Mocha',
                'mo_ta' => 'Cà phê pha với sô cô la',
                'do_rang' => 'Medium',
                'huong_vi' => 'Ngọt dịu, vị cacao',
                'hinh' => 'mocha.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 40000,
            ],
            [
                'danh_muc_id' => 2,
                'cung_cap_id' => 1,
                'ten_san_pham' => 'Trà Vải',
                'mo_ta' => 'Trà đen ướp vải thiều',
                'do_rang' => 'Light',
                'huong_vi' => 'Ngọt thanh, hương vải',
                'hinh' => 'tra-vai.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 60000,
            ],
            [
                'danh_muc_id' => 1,
                'cung_cap_id' => 5,
                'ten_san_pham' => 'Cold Brew',
                'mo_ta' => 'Cà phê ủ lạnh',
                'do_rang' => 'Medium',
                'huong_vi' => 'Ít đắng, vị thanh',
                'hinh' => 'cold-brew.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 55000,
            ],
            [
                'danh_muc_id' => 3,
                'cung_cap_id' => 6,
                'ten_san_pham' => 'Bánh Mousse Socola',
                'mo_ta' => 'Bánh mousse socola Pháp',
                'do_rang' => 'Dark',
                'huong_vi' => 'Ngọt đậm, béo ngậy',
                'hinh' => 'mousse-socola.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 30000,
            ],
            [
                'danh_muc_id' => 2,
                'cung_cap_id' => 1,
                'ten_san_pham' => 'Trà Gừng',
                'mo_ta' => 'Trà gừng mật ong',
                'do_rang' => 'Light',
                'huong_vi' => 'Ấm nóng, vị gừng',
                'hinh' => 'tra-gung.png',
                'trang_thai' => 'Còn Hàng',
                'gia' => 20000,
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
