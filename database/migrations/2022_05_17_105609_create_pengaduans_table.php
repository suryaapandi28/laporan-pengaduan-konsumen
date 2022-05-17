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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengaduan',30);
            $table->string('nomer_pengaduan',50);
            $table->string('nama_pelapor');
            $table->text('alamat_pelapor');
            $table->char('notlp_pelapor',15);
            $table->string('alamat_email_pelapor');
            $table->string('keluhan_pelapor');
            $table->string('pekerjaan_pelapor');
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
        Schema::dropIfExists('pengaduans');
    }
};
