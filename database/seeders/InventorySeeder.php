<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfInventories = [
            [
                'san_pham_id' => 1,
                'so_luong_con_lai' => 50
            ],
            [
                'san_pham_id' => 2,
                'so_luong_con_lai' => 30
            ],
            [
                'san_pham_id' => 3,
                'so_luong_con_lai' => 40
            ],
            [
                'san_pham_id' => 4,
                'so_luong_con_lai' => 25
            ],
            [
                'san_pham_id' => 5,
                'so_luong_con_lai' => 15
            ],
            ['san_pham_id' => 6, 'so_luong_con_lai' => 20],
            ['san_pham_id' => 7, 'so_luong_con_lai' => 35],
            ['san_pham_id' => 8, 'so_luong_con_lai' => 25],
            ['san_pham_id' => 9, 'so_luong_con_lai' => 15],
            ['san_pham_id' => 10, 'so_luong_con_lai' => 40],
            ['san_pham_id' => 11, 'so_luong_con_lai' => 30],
            ['san_pham_id' => 12, 'so_luong_con_lai' => 10],
            ['san_pham_id' => 13, 'so_luong_con_lai' => 18],
            ['san_pham_id' => 14, 'so_luong_con_lai' => 22],
            ['san_pham_id' => 15, 'so_luong_con_lai' => 12]
        ];

        try {
            foreach ($listOfInventories as $inventory) {
                DB::table("ton_khos")->insert($inventory);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
