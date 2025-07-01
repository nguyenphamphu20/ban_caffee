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
        if (!Schema::hasTable("nhan_viens")) {
            Schema::create("nhan_viens", function (Blueprint $table) {
                $table->id("nhan_vien_id");
                $table->string("ten_nhan_vien", 100);
                $table->enum("vai_tro", ["Quản Lý", "Barista", "Nhân Viên Phục Vụ", "Nhân Viên Thu Ngân", "Nhân Viên Vệ Sinh"]);
                $table->string("email")->unique();
                $table->string("sdt");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("nhan_viens");
    }
};
