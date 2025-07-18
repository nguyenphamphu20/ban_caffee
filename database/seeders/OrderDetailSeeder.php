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
        $listOfOrdersDetail = [];

        try {
            foreach ($listOfOrdersDetail as $orderDetail) {
                DB::table("chi_tiet_don_hangs")->insert($orderDetail);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}