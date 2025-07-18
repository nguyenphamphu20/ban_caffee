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
        if (!Schema::hasTable("ton_khos")) {
            Schema::create("ton_khos", function (Blueprint $table) {
                $table->id("ton_kho_id");
                $table->unsignedBigInteger("san_pham_id");
                $table->integer("so_luong_con_lai");

                $table->foreign("san_pham_id")->references("san_pham_id")->on("san_phams");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("ton_khos");
    }
};
