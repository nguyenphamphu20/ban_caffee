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
        if (!Schema::hasTable("nha_cung_caps")) {
            Schema::create("nha_cung_caps", function (Blueprint $table) {
                $table->id("cung_cap_id");
                $table->string("ten_cung_cap", 100);
                $table->string("nguoi_lien_he", 100);
                $table->string("email")->unique();
                $table->string("sdt", 100);
                $table->string("dia_chi");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("nha_cung_caps");
    }
};
