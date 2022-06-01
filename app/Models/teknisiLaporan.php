<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class teknisiLaporan extends Model
{
    use HasFactory;
    protected $table = 'teknis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_pengaduan',
        'nomer_pengaduan',
        'status_laporan',
        'nama_teknisi'
    ];
    public static function datinner ($kode_pengaduan) 
    {
        $hasil = DB::table('pengaduans')
                ->join('teknis','pengaduans.kode_pengaduan', '=', 'teknis.kode_pengaduan')
                ->select('teknis.*','pengaduans.*')
                ->where('kode_pengaduan.kode_pengaduan',$kode_pengaduan)
                ->first();

                if(is_null($hasil)){
                    return NULL;
                }
                return $hasil;
    }
}

