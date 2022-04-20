<?php

namespace App\Http\Controllers;

use App\Models\teknisiLaporan;
use Illuminate\Http\Request;

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
        return view('admin.laporan_teknisi' , [
            'nama_dashboard' => 'Laporan Teknisi'
        ]);
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
        //
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
    public function edit(teknisiLaporan $teknisiLaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teknisiLaporan  $teknisiLaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teknisiLaporan $teknisiLaporan)
    {
        //
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
