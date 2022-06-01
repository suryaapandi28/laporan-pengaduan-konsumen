<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_pengaduan',
        'nomer_pengaduan',
        'nama_pelapor',
        'alamat_pelapor',
        'notlp_pelapor',
        'alamat_email_pelapor',
        'keluhan_pelapor',
        'pekerjaan_pelapor',
        'status_laporan'
    ];
}
