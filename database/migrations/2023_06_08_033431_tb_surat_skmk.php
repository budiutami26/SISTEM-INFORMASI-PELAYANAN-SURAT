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
        Schema::create('surat_skmk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kelas', 100);
            $table->string('npm', 100);
            $table->string('nama_mhs', 100);
            $table->enum('semester',['1','2','3','4','5','6','7','8']);
            $table->string('nama_ortu',100);
            $table->string('nip',100);
            $table->string('golongan',100);
            $table->string('institusi',100);
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
        Schema::dropIfExists('surat_skmk');
    }
};
