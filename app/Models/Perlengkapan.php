<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    use HasFactory;
    protected $table = "surat_peminjaman_perlengkapan";
    protected $guarded = []; // untuk mengisi filed sesuai yang ada didatabase
}
