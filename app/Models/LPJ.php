<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LPJ extends Model
{
    use HasFactory;
    protected $table = "laporan_lpj_mahasiswa";
    protected $guarded = [];
}
