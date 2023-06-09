<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Surat;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Surat::create([
            'nim' => '200202041',
            'nama' => 'Tami',
            'kelas' => '2B',
            'jurusan' => 'Teknik Informatika',
            'tempat_observasi'=> 'GSC',
            'pimpinantuju' => 'Tes',
            'judul_tugasakhir' => 'tes',
            'tgl_pengajuan' => '2023-07-09',
            'status' => 'proses',
        ]);
    }
}
