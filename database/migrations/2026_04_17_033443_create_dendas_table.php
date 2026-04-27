<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dendas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pengembalian_id')->constrained()->onDelete('cascade');
        $table->integer('jumlah_denda')->default(0);
        $table->string('status_bayar')->default('belum');
        $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('dendas');
    }
};
