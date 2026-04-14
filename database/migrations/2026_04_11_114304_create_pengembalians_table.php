<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();

            // FOREIGN KEY KE TABEL PEMINJAMAN
            $table->unsignedBigInteger('peminjaman_id');

            $table->date('tgl_dikembalikan');

            $table->enum('status', [
                'menunggu_verifikasi',
                'dikembalikan'
            ])->default('menunggu_verifikasi');

            $table->timestamps();

            // RELASI KE PEMINJAMAN
            $table->foreign('peminjaman_id')
                ->references('id')
                ->on('peminjamans')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
