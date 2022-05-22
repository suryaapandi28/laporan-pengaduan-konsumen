<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class laporanPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    // //   $this->authorize('admin');
    //     return view('admin.laporan_pelanggan', [
    //         'nama_dashboard' => 'Data Pelanggan Laporan',
    //         'Laporan' => Pengaduan::all(),
    //     ]);

        $laporan = pengaduan::all();
        return view('admin.laporan_pelanggan', compact('laporan'),[
            'nama_dashboard' => 'Data Pelanggan Laporan']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambah_laporan',[
            'nama_dashboard' => 'Tambah Data Laporan',
            
        ]);
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
        // $data = [
        //     'kode_pengaduan' => "PGN".date('d-m-Y H:i:s'),
        //     'nomer_pengaduan' => "PGN",
        //     'nama_pelapor' => $request->input('nama_pelapor'),
        //     'alamat_pelapor' => $request->input('alamat_pelapor'),
        //     'notlp_pelapr' => $request->input('notlp_pelapr'),
        //     'alamat_email_pelapor' => $request->input('alamat_email_pelapor'),
        //     'keluhan_pelapor' => $request->input('keluhan_pelapor'),
        //     'pekerjaan_pelapor' => $request->input('pekerjaan_pelapor'),

        // ];
        // $validator = Validator::make($data,[
        //     'nama_pelapor' => 'Required',
        //     'alamat_pelapor' => 'required',
        //     'notlp_pelapor' => 'required',
        //     'alamat_email_pelapor' => 'required',
        //     'keluhan_pelapor' => 'required',
        //     'pekerjaan_pelapor' => 'required',
        // ]);
        $validasi_laporan = $request->validate([

            
            // 'email' => 'required|email:rfc,dns|unique:Users',
            
            'kode_pengaduan' => 'trim',
            'nomer_pengaduan' => 'trim',
            'nama_pelapor' => 'required',
            'alamat_pelapor' => 'required',
            'notlp_pelapor' => 'required',
            'alamat_email_pelapor' => 'required',
            'keluhan_pelapor' => 'required|max:100',
            'pekerjaan_pelapor' => 'required',



            
        ]);
        // var_dump($validasi_laporan);
        // die();
        //insert Data
        // $rand=rand(1,99999);
        
        date_default_timezone_set("Asia/jakarta");
        $teknisilaporan = new Pengaduan();
        $teknisilaporan->kode_pengaduan = "PGN"."|".date('d-m-Y H:i:s');
        $teknisilaporan->nomer_pengaduan = "NO"."|".date('d-m-Y')."|";
        $teknisilaporan->nama_pelapor = $request->nama_pelapor;
        $teknisilaporan->alamat_pelapor = $request->alamat_pelapor;
        $teknisilaporan->notlp_pelapor = $request->notlp_pelapor;
        $teknisilaporan->alamat_email_pelapor = $request->alamat_email_pelapor;
        $teknisilaporan->keluhan_pelapor = $request->keluhan_pelapor;
        $teknisilaporan->pekerjaan_pelapor = $request->pekerjaan_pelapor;

        // var_dump($teknisilaporan);
        // die();
        $teknisilaporan->save();

        return redirect('/laporan')->with(['success' => 'Data telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
        return view('admin.statuslaporan',[
            'nama_dashboard' => 'Tambah Data Laporan',
            
        ],compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('laporan.index')->with('succes','pengaduan Berhasil di Hapus');
    }
}
