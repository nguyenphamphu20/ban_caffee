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
        if (!Schema::hasTable("khach_hangs")) { {
                Schema::create("khach_hangs", function (Blueprint $table) {
                    $table->id("khach_hang_id");
                    $table->string("ten_khach_hang", 100);
                    $table->string("email")->unique();
                    $table->string("password");
                    $table->rememberToken();
                    $table->string("dia_chi", 100)->default("Chưa rõ");
                    $table->string("sdt", 100)->default("Chưa rõ");
                    $table->enum("level", ["Đồng", "Bạc", "Vàng"])->default("Đồng");
                    $table->unsignedInteger("diem")->default(0);
                    $table->string("hinh")->default("avatar.jpg");
                    $table->timestamps();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("khach_hangs");
    }
};