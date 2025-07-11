<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfStaffs = [
            [
                'ten_nhan_vien' => 'Phạm Văn Đức',
                'vai_tro' => 'Quản Lý',
                'email' => 'phamduc@coffeeshop.com',
                'sdt' => '0912000001'
            ],
            [
                'ten_nhan_vien' => 'Nguyễn Thị Hương',
                'vai_tro' => 'Barista',
                'email' => 'nguyenthihuong@coffeeshop.com',
                'sdt' => '0912000002'
            ],
            [
                'ten_nhan_vien' => 'Trần Minh Tuấn',
                'vai_tro' => 'Nhân Viên Thu Ngân',
                'email' => 'tranminhtuan@coffeeshop.com',
                'sdt' => '0912000003'
            ],
            [
                'ten_nhan_vien' => 'Lê Thị Hồng',
                'vai_tro' => 'Nhân Viên Phục Vụ',
                'email' => 'lethihong@coffeeshop.com',
                'sdt' => '0912000004'
            ],
            [
                'ten_nhan_vien' => 'Võ Minh Khôi',
                'vai_tro' => 'Barista',
                'email' => 'vominhkhoi@coffeeshop.com',
                'sdt' => '0912000005'
            ],
            [
                'ten_nhan_vien' => 'Đặng Thị Lan',
                'vai_tro' => 'Nhân Viên Thu Ngân',
                'email' => 'dangthilan@coffeeshop.com',
                'sdt' => '0912000006'
            ]
        ];

        try {
            foreach ($listOfStaffs as $staff) {
                DB::table("nhan_viens")->insert($staff);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
