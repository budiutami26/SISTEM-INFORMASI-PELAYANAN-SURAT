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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained();
            $table->string('nim', 100)->unique();
            $table->string('nama', 100);
            $table->string('kelas', 100);
            $table->enum('jurusan',['Teknik Informatika','Teknik Elektronika','Teknik Listrik','Teknik Mesin','Teknik Pengendalian Pencemaran Lingkungan','Pengembangan Produk Agroindustri','Mekatronika','Multimedia','Rekayasa Keamanan Siber']);
            $table->string('tempat_observasi',100);
            $table->string('pimpinantuju',100);
            $table->string('judul_tugasakhir',100);
            $table->date('tgl_pengajuan');
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
        Schema::dropIfExists('surat');
    }
};
