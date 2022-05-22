@extends('layouts.main_admin')

@section('container')
<a href="tambah_user" class="btn btn-primary mb-3">tambah Data User</a>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
 Data Berhasil Ditambahkan
</div>
@endif

<div class="card">
            <div class="card-body">
  <br>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                 
    <th scope="col">Nama Pengguna</th>
    <th scope="col">Email Pengguna</th>
    <th scope="col">Level Pengguna</th>
    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody >

                @forelse ($admin as $user)
      
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->level }}</td>
        <td class="text-center">
                <form action="{{ route('laporan.destroy',$user->id) }}" method="POST">

                   <!-- <a class="btn btn-info btn-sm" href="{{ route('laporan.show',$user->id) }}">Show</a> -->

                    <a class="btn btn-primary btn-sm" href="{{ route('laporan.edit',$user->id) }}">Status</a>

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

@endsection