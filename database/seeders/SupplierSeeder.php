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
                'cung_cap_id' => 1,
                'ten_cung_cap' => 'Hồ Chí Minh, Việt Nam',
                'nguoi_lien_he' => 'Lê Văn Tâm',
                'email' => 'cungcapcaphe@nguyenchat.com',
                'sdt' => '0912300001',
                'dia_chi' => '123 Đường Cà Phê, Q.1, TP.HCM'
            ],
            [
                'cung_cap_id' => 2,
                'ten_cung_cap' => 'Rome, Italy',
                'nguoi_lien_he' => 'Trần Thị Mai',
                'email' => 'tralieu@adong.com',
                'sdt' => '0912300002',
                'dia_chi' => '456 Đường Trà, Q.3, TP.HCM'
            ],
            [
                'cung_cap_id' => 3,
                'ten_cung_cap' => 'Taipei, Đài Loan',
                'nguoi_lien_he' => 'Nguyễn Hồng Nhung',
                'email' => 'banhngot@nhapkhau.com',
                'sdt' => '0912300003',
                'dia_chi' => '789 Đường Bánh, Q.5, TP.HCM'
            ],
            [
                'cung_cap_id' => 4,
                'ten_cung_cap' => 'Tokyo, Nhật Bản',
                'nguoi_lien_he' => 'Nguyễn Văn Giang',
                'email' => 'nuocaptuoi@cungcap.com',
                'sdt' => '0912300004',
                'dia_chi' => '101 Đường Trái Cây, Q.10, TP.HCM'
            ],
            [
                'cung_cap_id' => 5,
                'ten_cung_cap' => 'New York, Mỹ',
                'nguoi_lien_he' => 'Trần Văn Bảo',
                'email' => 'socola@chauau.com',
                'sdt' => '0912300005',
                'dia_chi' => '202 Đường Socola, Q.7, TP.HCM'
            ],
            [
                'cung_cap_id' => 6,
                'ten_cung_cap' => 'Paris, Pháp',
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
