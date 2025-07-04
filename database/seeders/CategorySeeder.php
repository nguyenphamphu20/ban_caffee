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
                "gia" => "19.000đ - 49.000đ",
                'hinh' => 'coffee.png'
            ],
            [
                'ten_danh_muc' => 'Trà',
                'mo_ta' => 'Các loại trà truyền thống và hiện đại',
                "gia" => "29.000đ - 79.000đ",
                'hinh' => 'tea.png'
            ],
            [
                'ten_danh_muc' => 'Bánh Ngọt',
                'mo_ta' => 'Bánh ăn kèm cà phê',
                "gia" => "12.000đ - 59.000đ",
                'hinh' => 'cake.png'
            ],
            [
                'ten_danh_muc' => 'Đồ Uống Đá Xay',
                'mo_ta' => 'Các loại đá xay mát lạnh',
                "gia" => "39.000đ - 89.000đ",
                'hinh' => 'drink.png'
            ],
            [
                'ten_danh_muc' => 'Nước Ép',
                'mo_ta' => 'Các loại nước ép trái cây tươi',
                "gia" => "29.000đ - 49.000đ",
                'hinh' => 'juice.png'
            ],
            [
                'ten_danh_muc' => 'Sinh Tố',
                'mo_ta' => 'Sinh tố trái cây mix sữa',
                "gia" => "19.000đ - 69.000đ",
                'hinh' => 'smoothie.png'
            ],
            [
                'ten_danh_muc' => 'Đồ Ăn Nhẹ',
                'mo_ta' => 'Các món ăn nhẹ kèm',
                "gia" => "15.000đ - 59.000đ",
                'hinh' => 'snack.png'
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
