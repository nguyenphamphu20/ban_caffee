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
                $table->string("ten_nhan_vien", 100)->nullable();
                $table->enum("vai_tro", [0, 1])->default(0);
                $table->string("email")->unique();
                $table->string("password");
                $table->string("sdt")->nullable();
                $table->string("hinh", 100)->nullable();
                $table->timestamps();
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