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
        if (!Schema::hasTable("chi_tiet_don_hangs")) {
            Schema::create("chi_tiet_don_hangs", function (Blueprint $table) {
                $table->id("chi_tiet_id");
                $table->unsignedBigInteger("don_hang_id");
                $table->unsignedBigInteger("san_pham_id");
                $table->unsignedInteger("so_luong");
                $table->unsignedInteger("gia");

                $table->foreign("don_hang_id")->references("don_hang_id")->on("don_hangs");
                $table->foreign("san_pham_id")->references("san_pham_id")->on("san_phams");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("chi_tiet_don_hangs");
    }
};
