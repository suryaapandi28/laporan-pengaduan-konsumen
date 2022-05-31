@extends('layouts.main_admin')

@section('container')
<div class="card">
    <div class="card-header text-center">
      Form Update Data User
    </div>
    <div class="card-body">
        <form action="/updating_user{{$user->id}}/update" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
              @error('name')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">

              @error('email')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <label for="image" class="form-label">Foto Profil</label>
            <div class="input-group mb-3">
              @if ($user->image)
              <img src="{{ asset('/data_file/'. $user->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5">
              @else
              <img  class="img-preview img-fluid mb-3 col-sm-5">
                  
              @endif
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage()"> 
              @error('image')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
              @error('password')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="input-group mb-3">
              <input type="text" name="level" value="{{ old('level', $user->level) }}" class="mx-auto" readonly>
                <select class="form-select @error('level') is-invalid @enderror" name="level" id="level">
                  <option value="administrator">Administrator</option>
                  <option value="admin">adminCS</option>
                  <option value="teknisi">teknisi</option>
                  
                </select>
                @error('level')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              </div>
              



            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/tambahUser" class="btn btn-primary">Go Back</a>
          </form>
    </div>
  </div>


  <script>

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }

  </script>
@endsection