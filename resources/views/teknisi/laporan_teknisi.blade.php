@extends('layouts.main_admin')

@section('container')

<div class="card">
            <div class="card-body">
  <br>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                 
    <th scope="col">Nomer Pengaduan</th>
    <th scope="col">Nama Pelapor</th>
    <th scope="col">Alamat Pelapor</th>
    <th scope="col">No Telp Pelapor</th>
    <th scope="col">Keluhan Pelapor</th>
    <th scope="col">Status</th>
    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody >
      <td>ID2021052300001</td>
      <td>Muhammad Surya Apandi	</td>
      <td>taman tridaya sakti, kabupaten bekasi</td>
      <td>08129879075676</td>
      <td>wafi dirumah saya tidak dapat akses internet</td>
      <td>Perbaikan</td>
      <td><a class="btn btn-primary btn-sm" href="">Selesai</a></td>
                </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>


@endsection