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
                    $table->string("sdt", 100);
                    $table->enum("level", ["Đồng", "Bạc", "Vàng"]);
                    $table->unsignedInteger("diem");
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
