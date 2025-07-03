<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfOrdersDetail = [
            [
                'don_hang_id' => 1,
                'san_pham_id' => 1,
                'so_luong' => 2,
                'don_gia' => 25000,
            ],
            [
                'don_hang_id' => 1,
                'san_pham_id' => 3,
                'so_luong' => 1,
                'don_gia' => 35000,
            ],
            [
                'don_hang_id' => 1,
                'san_pham_id' => 5,
                'so_luong' => 1,
                'don_gia' => 35000,
            ],
            [
                'don_hang_id' => 2,
                'san_pham_id' => 2,
                'so_luong' => 1,
                'don_gia' => 45000,
            ],
            [
                'don_hang_id' => 2,
                'san_pham_id' => 4,
                'so_luong' => 1,
                'don_gia' => 40000,
            ],
            [
                'don_hang_id' => 3,
                'san_pham_id' => 2,
                'so_luong' => 2,
                'don_gia' => 45000,
            ],
            [
                'don_hang_id' => 3,
                'san_pham_id' => 4,
                'so_luong' => 1,
                'don_gia' => 40000,
            ],
            [
                'don_hang_id' => 3,
                'san_pham_id' => 5,
                'so_luong' => 1,
                'don_gia' => 35000,
            ],
            ['don_hang_id' => 4, 'san_pham_id' => 6, 'so_luong' => 1, 'don_gia' => 45000],
            ['don_hang_id' => 4, 'san_pham_id' => 10, 'so_luong' => 2, 'don_gia' => 25000],
            ['don_hang_id' => 5, 'san_pham_id' => 2, 'so_luong' => 1, 'don_gia' => 45000],
            ['don_hang_id' => 5, 'san_pham_id' => 13, 'so_luong' => 1, 'don_gia' => 55000],
            ['don_hang_id' => 5, 'san_pham_id' => 15, 'so_luong' => 2, 'don_gia' => 20000],
            ['don_hang_id' => 6, 'san_pham_id' => 7, 'so_luong' => 2, 'don_gia' => 40000],
            ['don_hang_id' => 6, 'san_pham_id' => 9, 'so_luong' => 1, 'don_gia' => 50000],
            ['don_hang_id' => 6, 'san_pham_id' => 12, 'so_luong' => 1, 'don_gia' => 60000],
            ['don_hang_id' => 6, 'san_pham_id' => 14, 'so_luong' => 2, 'don_gia' => 30000]
        ];

        try {
            foreach ($listOfOrdersDetail as $orderDetail) {
                DB::table("chi_tiet_don_hangs")->insert($orderDetail);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
