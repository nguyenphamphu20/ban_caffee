<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOrders = [
            [
                'khach_hang_id' => 1,
                'thoi_gian' => '2025-06-30 10:15:00',
                'tong_tien' => 120000,
                'trang_thai' => 'Đã Xong',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Thêm ít đá'
            ],
            [
                'khach_hang_id' => 2,
                'thoi_gian' => '2025-06-30 11:30:00',
                'tong_tien' => 85000,
                'trang_thai' => 'Đang Làm',
                'phuong_thuc_thanh_toan' => 'Chuyển Khoản',
                'ghi_chu' => 'Yêu cầu ấn nóng'
            ],
            [
                'khach_hang_id' => 3,
                'thoi_gian' => '2025-06-30 14:45:00',
                'tong_tien' => 150000,
                'trang_thai' => 'Đã Hủy',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Khách không đến lấy'
            ]
        ];

        try {
            foreach ($listOrders as $order) {
                DB::table("don_hangs")->insert($order);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
