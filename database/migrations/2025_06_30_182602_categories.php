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
        if (!Schema::hasTable("danh_mucs")) {
            Schema::create("danh_mucs", function (Blueprint $table) {
                $table->id("danh_muc_id");
                $table->string("ten_danh_muc", 100);
                $table->string("mo_ta", 200);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("danh_mucs");
    }
};
