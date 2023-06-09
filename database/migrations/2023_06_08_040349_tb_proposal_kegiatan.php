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
        Schema::create('laporan_proposal_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_masuk');
            $table->string('nama_kegiatan',200);
            $table->date('tanggal_pelaksana');
            $table->string('nama_ketua_pelaksana',100);
            $table->string('nohp',100);
            $table->string('penggunaan_dana(PNC/IOM)',100);
            $table->string('jml_dana_disetujui',100);
            $table->string('keterangan',100);
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
        Schema::dropIfExists('laporan_proposal_kegiatan');
    }
};
