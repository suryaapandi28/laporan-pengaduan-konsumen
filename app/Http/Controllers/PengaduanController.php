<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;


class PengaduanController extends Controller
{
    //
    public function index()
    {
        //
        return view('pengaduan.createpengaduan');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'kode_pengaduan' => "PGN".date("Ymdhis"),
            'nomer_pengaduan' => "0",
            'nama_pelapor' => $request->input('nama_pelapor'),
            'alamat_pelapor' => $request->input('alamat_pelapor'),
            'notlp_pelapor'=> $request->input('notlp_pelapor'),
            'alamat_email_pelapor' => $request->input('alamat_email_pelapor'),
            'keluhan_pelapor' => $request->input('keluhan_pelapor'),
            'pekerjaan_pelapor' => $request->input('pekerjaan_pelapor'),
            'status_laporan' => "belum_veritifikasi",
        ];
        
        $validator = Validator::make($data, [
            'nama_pelapor' => 'Required',
            'alamat_pelapor' => 'Required',
            'notlp_pelapor' => 'Required',
            'alamat_email_pelapor' => 'Required',
            'keluhan_pelapor' => 'Required',
            'pekerjaan_pelapor' => 'Required',
        ]);
        $post = pengaduan::create($data);

        return redirect()->route('pengaduan.index')->with('succes','Data Berhasil di Input');
    }
}
