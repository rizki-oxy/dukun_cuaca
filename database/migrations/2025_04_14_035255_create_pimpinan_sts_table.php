<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pimpinan_sts', function (Blueprint $table) {
            $table->id('id_pimpinan_st');
            // $table->foreignId('id_pegawai')->constrained('pegawai')->onDelete('cascade');
            $table->foreignId('id_pegawai')
                ->constrained('pegawais', 'id_pegawai')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pimpinan_st');
    }
};
