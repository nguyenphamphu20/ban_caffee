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
