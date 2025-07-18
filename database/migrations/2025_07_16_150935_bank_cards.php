<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable("ngan_hangs")) {
            Schema::create("the_ngan_hangs", function (Blueprint $table) {
                $table->id("the_id");
                $table->unsignedBigInteger("khach_hang_id");
                $table->string("ten_ngan_hang", 20);
                $table->bigInteger("so_the")->unique();
                $table->string("ten_chu_the", 100);
                $table->tinyInteger("thang");
                $table->smallInteger("nam");

                $table->foreign("khach_hang_id")->references("khach_hang_id")->on("khach_hangs");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { {
            Schema::dropIfExists("ngan_hangs");
        }
    }
};