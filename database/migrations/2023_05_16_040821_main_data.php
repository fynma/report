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
        Schema::create('main_data', function (Blueprint $table) {
            $table->id();
            $table->string('perihal', 24);
            $table->string('pelapor', 24);
            $table->string('departemen', 24);
            $table->string('kadep', 24);
            $table->datetime('waktu', 6);
            $table->string('keluhan', 48);
            $table->string('ket', 48);
            $table->longText('sig_staff');
            $table->longText('sig_tahu_kanit');
            $table->longText('sig_kanit_it');
            $table->longText('sig_kaprod');
            $table->longText('sig_diterima_it');
            $table->string('analisa', 308);
            $table->string('keputusan', 38);
            $table->string('pelaksana', 38);
            $table->datetime('mulai', 6);
            $table->datetime('selesai', 6);
            $table->string('kegiatan', 302);
            $table->string('sparepart', 98);
            $table->string('kesimpulan', 38);
            $table->longText('sig_it_selesai');
            $table->string('nama', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_data');
    }
};
