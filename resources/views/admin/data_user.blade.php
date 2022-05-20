@extends('layouts.main_admin')

@section('container')
<div class="card">
    <div class="card-header text-center">
      Form Tambah Data User
    </div>
    <div class="card-body">
        <form action="/TambahUser" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="name" class="form-control" id="name" name="name">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="input-group mb-3">
                <select class="form-select" name="level" id="level">
                  <option value="administrator">Administrator</option>
                  <option value="admin">adminCS</option>
                  <option value="teknisi">teknisi</option>
                </select>
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
@endsection