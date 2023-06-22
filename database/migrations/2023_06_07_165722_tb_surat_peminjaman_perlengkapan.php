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
        Schema::create('surat_peminjaman_perlengkapan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan', 100);
            $table->string('nama_penanggungjawab', 100);
            $table->string('nama_barang', 100);
            $table->string('jumlah', 100);
            $table->enum('jurusan',['Teknik Informatika','Teknik Elektronika','Teknik Listrik','Teknik Mesin','Teknik Pengendalian Pencemaran Lingkungan','Pengembangan Produk Agroindustri','Mekatronika','Multimedia','Rekayasa Keamanan Siber']);
            $table->string('keterangan',100);
            $table->date('tgl_pengambilan');
            $table->date('tgl_pengembalian');
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
        Schema::dropIfExists('surat_peminjaman_perlengkapan');
    }
};
