<?php

namespace App\Http\Controllers;

use App\Models\teknisiLaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanTeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('teknisi.laporan_teknisi' , [
        //     'nama_dashboard' => 'Laporan Teknisi'
        // ]);
        // $laporan = pengaduan::all();
        $laporan = teknisiLaporan::all();
        return view('teknisi.laporan_teknisi', compact('laporan'),[
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teknisiLaporan  $teknisiLaporan
     * @return \Illuminate\Http\Response
     */
    public function show(teknisiLaporan $teknisiLaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teknisiLaporan  $teknisiLaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(teknisiLaporan $teknisiLaporan,$id)
    {
        $id = DB::table('teknis')->where('id', $id)->first();
        return view('teknisi.statuslaporan', [
            
            'id' => $id,
            'nama_dashboard' => 'Update Nama Dashboard',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teknisiLaporan  $teknisiLaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teknisiLaporan $teknisiLaporan,$id )
    {
        $validaasi = $request->validate([
            'kode_pengaduan' => 'required',
            'nomer_pengaduan' => 'required',
            // 'nama_pelapor' => 'required',
            // 'alamat_pelapor' => 'required',
            // 'notlp_pelapor' => 'required',
            // 'alamat_email_pelapor' => 'required',
            // 'keluhan_pelapor' => 'required|max:100',
            // 'pekerjaan_pelapor' => 'required',
            'status_laporan' => 'Required',
        ]);
        DB::table('teknis')->where('id', $request->id)->update([
            'kode_pengaduan' => $request->kode_pengaduan,
            'nomer_pengaduan' => $request->nomer_pengaduan,
            // 'nama_pelapor' => $request->nama_pelapor,
            // 'alamat_pelapor' => $alamat_pelapor,
            // 'notlp_pelapor' => $request->notlp_pelapor,
            // 'alamat_email_pelapor' => $request->alamat_email_pelapor,
            // 'keluhan_pelapor' => $request->keluhan_pelapor,
            // 'pekerjaan_pelapor' => $request->pekerjaan_pelapor,
            'status_laporan' => $request->status_laporan,
            'nama_teknisi' => $request->nama_teknisi,
            ]);
        return redirect('/teknisiLaporan')->with(['success' => 'Data telah Ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teknisiLaporan  $teknisiLaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(teknisiLaporan $teknisiLaporan)
    {
        //
    }
}
