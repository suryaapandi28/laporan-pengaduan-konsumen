@extends('layouts.main_admin')

@section('container')
<table class="table table-bordered">


  
  <a href="/tambah_laporan" class="btn btn-primary mb-3">Tambah Data Pengaduan</a>
  <h4>table Pengaduan</h4>
  <tr>
    <td>Kode Pengaduan</td>
    <td>No Pengaduan</td>
    <td>Nama Pelapor</td>
    <td>Alamat Pelapor</td>
    <td>No Telp Pelapor</td>
    <td>Alamat Email pelapor</td>
    <td>Keluhan Pelapor</td>
    <td>pekerjaan Pelapor</td>
    <td>Aksi</td>
  </tr>
  @foreach ($Laporan as $laporans)
      
  <tr>
    <td>{{ $laporans->kode_pengaduan }}</td>
    <td>{{ $laporans->nomer_pengaduan }}</td>
    <td>{{ $laporans->nama_pelapor }}</td>
    <td>{{ $laporans->alamat_pelapor }}</td>
    <td>{{ $laporans->notlp_pelapor }}</td>
    <td>{{ $laporans->alamat_email_pelapor }}</td>
    <td>{{ $laporans->keluhan_pelapor }}</td>
    <td>{{ $laporans->pekerjaan_pelapor }}</td>
    <td><a href="" class="badge badge bg-danger">Delete</a>
    <a href="" class="badge badge bg-success">Update</a>
    </td>
  </tr>
  @endforeach
</table>
@endsection