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
                'mo_ta' => 'Các loại cà phê nguyên chất',
                'hinh' => 'coffee.svg'
            ],
            [
                'ten_danh_muc' => 'Trà',
                'mo_ta' => 'Các loại trà truyền thống và hiện đại',
                'hinh' => 'tea.svg'
            ],
            [
                'ten_danh_muc' => 'Bánh Ngọt',
                'mo_ta' => 'Bánh ăn kèm cà phê',
                'hinh' => 'cake.svg'
            ],
            [
                'ten_danh_muc' => 'Đồ Uống Đá Xay',
                'mo_ta' => 'Các loại đá xay mát lạnh',
                'hinh' => 'drink.svg'
            ],
            [
                'ten_danh_muc' => 'Nước Ép',
                'mo_ta' => 'Các loại nước ép trái cây tươi',
                'hinh' => 'juice.svg'
            ],
            [
                'ten_danh_muc' => 'Sinh Tố',
                'mo_ta' => 'Sinh tố trái cây mix sữa',
                'hinh' => 'smoothie.svg'
            ],
            [
                'ten_danh_muc' => 'Đồ Ăn Nhẹ',
                'mo_ta' => 'Các món ăn nhẹ kèm',
                'hinh' => 'snack.svg'
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
