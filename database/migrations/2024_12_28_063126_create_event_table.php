<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('calender', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Kolom untuk judul acara
            $table->date('date'); // Kolom untuk tanggal acara
            $table->time('time')->nullable(); // Kolom untuk waktu acara (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Hapus migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('calender');
    }
}
