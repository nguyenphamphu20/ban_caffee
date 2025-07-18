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
        $listOrders =  [];

        try {
            foreach ($listOrders as $order) {
                DB::table("don_hangs")->insert($order);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}