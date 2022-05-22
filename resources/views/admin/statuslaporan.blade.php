@extends('layouts.main_admin')

@section('container')

<div class="card">
    <div class="card-header text-center">
      Form Tambah Pengaduan
    </div>
    <div class="card-body">
        
        <form action="{{ route('laporan.update',$laporan->id) }}" method="POST" enctype="multipart/form-data">

          @csrf
          @method('PUT')
            <div class="mb-3">
              <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
              <input type="text" class="form-control rounded-top @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor"name="nama_pelapor" value="{{ $laporan->nama_pelapor }}">

              @error('nama_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="alamat_pelapor" class="form-label">Alamat Pelapor</label>
              <input type="text" class="form-control @error('alamat_pelapor') is-invalid @enderror" id="alamat_pelapor" name="alamat_pelapor" value="{{ $laporan->alamat_pelapor }}">

              @error('alamat_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror

            </div>
            
            <div class="mb-3">
              <label for="notlp_pelapor" class="form-label">No Telp Pelapor</label>
              <input type="text" class="form-control @error('notlp_pelapor') is-invalid @enderror" id="notlp_pelapor" name="notlp_pelapor"value="{{ $laporan->notlp_pelapor }}">

              @error('notlp_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="alamat_email_pelapor" class="form-label">Alamat Email Pelapor</label>
              <input type="email" class="form-control @error('alamat_email_pelapor') is-invalid @enderror" id="alamat_email_pelapor" name="alamat_email_pelapor"value="{{ $laporan->alamat_email_pelapor }}">

              @error('alamat_email_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="form-floating">
              <textarea class="form-control @error('keluhan_pelapor') is-invalid @enderror" placeholder="Leave a comment here" id="keluhan_pelapor" name="keluhan_pelapor" style="height: 100px" value="{{ $laporan->keluhan_pelapor }}"></textarea>
              <label for="floatingTextarea2">Keluhan</label>

              @error('keluhan_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="pekerjaan_pelapor" class="form-label">Pekerja Pelapor</label>
              <input type="text" class="form-control @error('pekerjaan_pelapor') is-invalid @enderror" id="pekerjaan_pelapor" name="pekerjaan_pelapor"value="{{ $laporan->pekerjaan_pelapor }}">

              @error('pekerjaan_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>


            {{-- <div class="mb-3 form-check">
              <label for="exampleInputPassword1" class="form-label">noTelp_pelapor</label>
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="/Laporan" class="btn btn-primary mt-3 float-right ">Back</a>

          </form>
    </div>
  </div>

@endsection