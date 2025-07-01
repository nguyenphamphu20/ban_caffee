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
        if (!Schema::hasTable("don_hangs")) { {
                Schema::create("don_hangs", function (Blueprint $table) {
                    $table->id("don_hang_id");
                    $table->unsignedBigInteger("khach_hang_id");
                    $table->dateTime("thoi_gian")->useCurrent();
                    $table->unsignedBigInteger("tong_tien");
                    $table->enum("trang_thai", ["Đang Làm", "Đã Xong", "Đã Hủy"]);
                    $table->enum("phuong_thuc_thanh_toan", ["Tiền Mặt", "Chuyển Khoản"]);
                    $table->string("ghi_chu");

                    $table->foreign("khach_hang_id")->references("khach_hang_id")->on("khach_hangs");
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("don_hangs");
    }
};
