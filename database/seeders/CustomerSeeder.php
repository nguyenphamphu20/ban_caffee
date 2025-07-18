<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfCustomer = [];

        try {
            foreach ($listOfCustomer as $customer) {
                DB::table("khach_hangs")->insert($customer);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}