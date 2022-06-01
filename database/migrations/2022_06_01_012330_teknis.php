<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengaduan',30);
            $table->string('nomer_pengaduan',50);
            $table->enum('status_laporan',['belum_veritifikasi','terveritifikasi','maintance','selesai']);
            $table->string('nama_teknisi');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
