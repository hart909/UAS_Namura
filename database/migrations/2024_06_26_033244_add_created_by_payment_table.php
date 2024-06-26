<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("payment", function (Blueprint $table) {
            $table->integer("created_by")->nullable(); // Menambahkan kolom baru
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("payment", function (Blueprint $table) {
            $table->dropColumn("created_by"); // Menghapus kolom baru
        });
    }
};
