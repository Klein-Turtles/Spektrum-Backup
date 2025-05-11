<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->text('deskripsi_singkat')->nullable()->after('slug');
            $table->text('spesifikasi')->nullable()->after('deskripsi');
        });
    }

    public function down(): void
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->dropColumn(['deskripsi_singkat', 'spesifikasi']);
        });
    }
};