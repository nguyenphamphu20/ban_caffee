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
        if (!Schema::hasTable("san_phams")) {
            Schema::create("san_phams", function (Blueprint $table) {
                $table->id("san_pham_id");
                $table->string("ten_san_pham", 100);
                $table->string("mo_ta", 200);
                $table->unsignedBigInteger("danh_muc_id");
                $table->enum("do_rang", ["Light", "Medium", "Dark"]);
                $table->string("nguon_goc", 100);
                $table->string("huong_vi", 100);
                $table->string("gia", 100);
                $table->string("hinh", 100);
                $table->enum("trang_thai", ["Còn Hàng", "Đã Hết"]);

                $table->foreign("danh_muc_id")->references("danh_muc_id")->on("danh_mucs");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("san_phams");
    }
};
