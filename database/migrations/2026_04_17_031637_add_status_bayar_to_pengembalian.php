<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengembalians', function (Blueprint $table) {
        $table->string('status_bayar')->default('belum');
});
    }

    public function down(): void
    {
        Schema::table('pengembalian', function (Blueprint $table) {
            //
        });
    }
};
