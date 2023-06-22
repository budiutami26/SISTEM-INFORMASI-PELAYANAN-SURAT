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
        Schema::create('prestasi_mhs', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 100)->unique();
            $table->string('nama_mhs', 100);
            $table->enum('program_studi',['D3 Teknik Informatika','D3 Teknik Elektronika','D3 Teknik Listrik','D3 Teknik Mesin','D4 Teknik Pengendalian Pencemaran Lingkungan','D4 Pengembangan Produk Agroindustri','D4 Mekatronika','D4 Multimedia','D4 Rekayasa Keamanan Siber']);
            $table->string('prestasi',100);
            $table->enum('tingkat',['Kecamatan','Kabupaten','Provinsi','Nasional','Internasional']);
            $table->string('tahun',100);
            $table->enum('status', ['proses','diterima','ditolak']);
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
        Schema::dropIfExists('prestasi_mhs');
    }
};
