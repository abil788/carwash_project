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
        Schema::table('takebooks', function (Blueprint $table) {
            $table->renameColumn('car type', 'car_type');
            $table->string('no_hp')->change(); // Ubah ke string jika perlu
            $table->text('message')->change(); // Ubah ke text jika perlu
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::table('takebooks', function (Blueprint $table) {
            $table->renameColumn('car_type', 'car type');
            $table->integer('no_hp')->change();
            $table->string('message')->change();
        });
    }
};
