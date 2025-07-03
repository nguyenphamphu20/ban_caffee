<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfSuppliers = [
            [
                'ten_cung_cap' => 'Công Ty Cà Phê Nguyên Chất',
                'nguoi_lien_he' => 'Lê Văn Tâm',
                'email' => 'cungcapcaphe@nguyenchat.com',
                'sdt' => '0912300001',
                'dia_chi' => '123 Đường Cà Phê, Q.1, TP.HCM'
            ],
            [
                'ten_cung_cap' => 'Trà & Nguyên Liệu Á Đông',
                'nguoi_lien_he' => 'Trần Thị Mai',
                'email' => 'tralieu@adong.com',
                'sdt' => '0912300002',
                'dia_chi' => '456 Đường Trà, Q.3, TP.HCM'
            ],
            [
                'ten_cung_cap' => 'Bánh Ngọt Nhập Khẩu',
                'nguoi_lien_he' => 'Nguyễn Hồng Nhung',
                'email' => 'banhngot@nhapkhau.com',
                'sdt' => '0912300003',
                'dia_chi' => '789 Đường Bánh, Q.5, TP.HCM'
            ],
            [
                'ten_cung_cap' => 'Nguyên Liệu Nước Ép Tươi',
                'nguoi_lien_he' => 'Nguyễn Văn Giang',
                'email' => 'nuocaptuoi@cungcap.com',
                'sdt' => '0912300004',
                'dia_chi' => '101 Đường Trái Cây, Q.10, TP.HCM'
            ],
            [
                'ten_cung_cap' => 'Socola Nhập Khẩu Châu Âu',
                'nguoi_lien_he' => 'Trần Văn Bảo',
                'email' => 'socola@chauau.com',
                'sdt' => '0912300005',
                'dia_chi' => '202 Đường Socola, Q.7, TP.HCM'
            ],
            [
                'ten_cung_cap' => 'Bánh Mì & Đồ Ăn Nhanh',
                'nguoi_lien_he' => 'Lý Thị Cẩm',
                'email' => 'banhmi@anviet.com',
                'sdt' => '0912300006',
                'dia_chi' => '303 Đường Bánh Mì, Q.Gò Vấp, TP.HCM'
            ]
        ];

        try {
            foreach ($listOfSuppliers as $supply) {
                DB::table("nha_cung_caps")->insert($supply);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
