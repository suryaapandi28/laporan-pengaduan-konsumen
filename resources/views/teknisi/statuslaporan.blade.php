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
          <div class="mb-3">
              <label for="kode_pengaduan" class="form-label">Kode Pelapor</label>
              <input type="text" class="form-control rounded-top @error('kode_pengaduan') is-invalid @enderror" id="kode_pengaduan"name="kode_pengaduan" value="{{ $id->kode_pengaduan }}">

              @error('nama_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>    
            <div class="mb-3">
              <label for="nomer_pengaduan" class="form-label">Nomer Pelapor</label>
              <input type="text" class="form-control rounded-top @error('nomer_pengaduan') is-invalid @enderror" id="nomer_pengaduan"name="nomer_pengaduan" value="{{ $id->nomer_pengaduan }}">

              @error('nama_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> 
            <div class="mb-3">
              <label for="nama_teknisi" class="form-label">Nama Teknisi</label>
              <input type="text" class="form-control rounded-top @error('nama_teknisi') is-invalid @enderror" id="nama_teknisi"name="nama_teknisi" value="{{ $id->nama_teknisi }}">

              @error('nama_pelapor')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> 

            <div class="input-group mb-3">
              <input type="text" name="status_laporan" value="{{ $id->status_laporan }}" class="mx-auto" readonly>
                <select class="form-select @error('status_laporan') is-invalid @enderror" name="status_laporan" id="status_laporan">
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