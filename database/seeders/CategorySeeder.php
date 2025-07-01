<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfCategories = [
            [
                'ten_danh_muc' => 'Cà Phê',
                'mo_ta' => 'Các loại cà phê nguyên chất'
            ],
            [
                'ten_danh_muc' => 'Trà',
                'mo_ta' => 'Các loại trà truyền thống và hiện đại'
            ],
            [
                'ten_danh_muc' => 'Bánh Ngọt',
                'mo_ta' => 'Bánh ăn kèm cà phê'
            ],
            [
                'ten_danh_muc' => 'Đồ Uống Đá Xay',
                'mo_ta' => 'Các loại đá xay mát lạnh'
            ]
        ];

        try {
            foreach ($listOfCategories as $category) {
                DB::table("danh_mucs")->insert($category);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}
