<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfCustomer = [
            [
                'ten_khach_hang' => 'Nguyễn Văn An',
                'email' => 'nguyenvana@gmail.com',
                'sdt' => '0912345678',
                'level' => 'Vàng',
                'diem' => 150
            ],
            [
                'ten_khach_hang' => 'Trần Thị Bình',
                'email' => 'tranthibinh@yahoo.com',
                'sdt' => '0987654321',
                'level' => 'Bạc',
                'diem' => 75
            ],
            [
                'ten_khach_hang' => 'Lê Hoàng Công',
                'email' => 'lehoangcong@gmail.com',
                'sdt' => '0912121212',
                'level' => 'Đồng',
                'diem' => 30
            ],
            [
                'ten_khach_hang' => 'Phạm Thị Dung',
                'email' => 'phamthidung@gmail.com',
                'sdt' => '0913123456',
                'level' => 'Bạc',
                'diem' => 60
            ],
            [
                'ten_khach_hang' => 'Hoàng Văn E',
                'email' => 'hoangvane@yahoo.com',
                'sdt' => '0988123456',
                'level' => 'Đồng',
                'diem' => 25
            ],
            [
                'ten_khach_hang' => 'Vũ Thị F',
                'email' => 'vuthif@gmail.com',
                'sdt' => '0915111222',
                'level' => 'Vàng',
                'diem' => 180
            ]
        ];

        try {
            foreach ($listOfCustomer as $customer) {
                DB::table("khach_hangs")->insert($customer);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
