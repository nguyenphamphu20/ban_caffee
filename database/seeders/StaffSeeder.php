<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOfStaffs = [];

        try {
            foreach ($listOfStaffs as $staff) {
                DB::table("nhan_viens")->insert($staff);
            }
        } catch (\Throwable $error) {
            echo $error;
        }
    }
}