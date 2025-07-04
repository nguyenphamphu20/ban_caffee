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
        $listOrders =  [
            [
                'don_hang_id' => 1,
                'khach_hang_id' => 1,
                'thoi_gian' => '2025-06-30 10:15:00',
                'tong_tien' => 120000, // (2x25k + 1x35k + 1x35k)
                'trang_thai' => 'Đã Xong',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Thêm ít đá'
            ],
            [
                'don_hang_id' => 2,
                'khach_hang_id' => 2,
                'thoi_gian' => '2025-06-30 11:30:00',
                'tong_tien' => 85000,
                'trang_thai' => 'Đang Làm',
                'phuong_thuc_thanh_toan' => 'Chuyển Khoản',
                'ghi_chu' => 'Yêu cầu ấn nóng'
            ],
            [
                'don_hang_id' => 3,
                'khach_hang_id' => 3,
                'thoi_gian' => '2025-06-30 14:45:00',
                'tong_tien' => 165000,
                'trang_thai' => 'Đã Hủy',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Khách không đến lấy'
            ],
            [
                'don_hang_id' => 4,
                'khach_hang_id' => 4,
                'thoi_gian' => '2025-07-01 09:20:00',
                'tong_tien' => 95000,
                'trang_thai' => 'Đã Xong',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Không đường'
            ],
            [
                'don_hang_id' => 5,
                'khach_hang_id' => 5,
                'thoi_gian' => '2025-07-01 15:45:00',
                'tong_tien' => 140000, // (1x45k + 1x55k + 2x20k)
                'trang_thai' => 'Đang Làm',
                'phuong_thuc_thanh_toan' => 'Chuyển Khoản',
                'ghi_chu' => 'Giao hàng tận nơi'
            ],
            [
                'don_hang_id' => 6,
                'khach_hang_id' => 6,
                'thoi_gian' => '2025-07-02 11:10:00',
                'tong_tien' => 250000, // (2x40k + 1x50k + 1x60k + 2x30k)
                'trang_thai' => 'Đã Xong',
                'phuong_thuc_thanh_toan' => 'Tiền Mặt',
                'ghi_chu' => 'Yêu cầu ly giữ nhiệt'
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
