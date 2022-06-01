@extends('layouts.main_admin')

@section('container')

<div class="card">
    <div class="card-header text-center">
      Form Tambah Pengaduan
    </div>
    <div class="card-body">
        
        <form action="/statusupdate{{$id->id}}/update" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         

            <div class="input-group mb-3">
              <input type="text" name="status_laporan" value="{{ $id->status_laporan }}" class="mx-auto" readonly>
                <select class="form-select @error('status_laporan') is-invalid @enderror" name="status_laporan" id="status_laporan">
                  <option value="belum_veritifikasi">belum_veritifikasi</option>
                  <option value="terveritifikasi">terveritifikasi</option>
                  <option value="maintance">maintance</option>
                  <option value="selesai">selesai</option>
                  
                </select>
                @error('status_laporan')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="/Laporan" class="btn btn-primary mt-3 float-right ">Back</a>

          </form>
    </div>
  </div>

@endsection