@extends('layouts.main_admin')

@section('container')




<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
  <br>
            <a href="/tambah_laporan" class="btn btn-primary mb-3">Tambah Data Pengaduan</a>
              <!-- Table with stripped rows -->

              

              
              <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                 
    <th scope="col">kode Pengaduan</th>
    <th scope="col">Nama Pelapor</th>
    <th scope="col">Alamat Pelapor</th>
    <th scope="col">No Telp Pelapor</th>
    <!-- <th scope="col">Alamat Email pelapor</th> -->
    <th scope="col">Keluhan Pelapor</th>
    <th scope="col">Status</th>
    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody >

                @forelse ($laporan as $laporans)
      
      <tr>
        <td>{{ $laporans->kode_pengaduan }}</td>
        <!-- <td>{{ $laporans->nomer_pengaduan }}</td> -->
        <td>{{ $laporans->nama_pelapor }}</td>
        <td>{{ $laporans->alamat_pelapor }}</td>
        <td>{{ $laporans->notlp_pelapor }}</td>
        <!-- <td>{{ $laporans->alamat_email_pelapor }}</td> -->
        <td>{{ $laporans->keluhan_pelapor }}</td>
        <td>{{ $laporans->status_laporan }}</td>
        <td class="text-center">
                <form action="{{ route('laporan.destroy',$laporans->id) }}" method="POST">

                   <!-- <a class="btn btn-info btn-sm" href="{{ route('laporan.show',$laporans->id) }}">Show</a> -->

                    <a class="btn btn-primary btn-sm" href="{{ route('laporan.edit',$laporans->id) }}">Status</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
      </tr>
      @empty
                                    <!-- <tr>
                                        <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                                    </tr> -->
      @endforelse
                </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



  
  
@endsection