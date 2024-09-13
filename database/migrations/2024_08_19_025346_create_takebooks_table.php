<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('takebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_hp'); // Diubah menjadi string untuk format nomor telepon
            $table->string('car_type'); // Nama kolom diubah menjadi `car_type`
            $table->string('time');
            $table->text('message'); // Diubah menjadi text untuk pesan yang lebih panjang
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('takebooks');
    }
};
