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
            ]
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
