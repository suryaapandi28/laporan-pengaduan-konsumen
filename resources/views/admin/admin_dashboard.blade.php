@extends('layouts.main_admin')

@section('container')
<div class="card">
    <div class="card-header text-center">
      Card Indentity
    </div>
    <div class="card-body text-center">
      {{-- <h5 class="card-title">Your Indenty</h5> --}}
      <img src="{{ asset('/data_file/'. auth()->user()->image) }}" class="rounded-circle mx-auto mb-3" width="200" alt="" height="200">
      <p class="card-text fw-bold ">Nama Anda:      {{ auth()->user()->name; }}.</p>
      <p class="card-text fw-bold ">Nama Anda:      {{ auth()->user()->email; }}.</p>
      <p class="card-text fw-bold ">Nama Anda:      {{ auth()->user()->level; }}.</p>

      {{-- <p class="card-text fw-bold ">Email Anda:      {{ $admin->email }}.</p>
      <p class="card-text fw-bold ">Level Anda:      {{ $admin->level }}.</p> --}}


      <form action="/logout" method="POST">
        @csrf
      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin Logout?')">Logout</button>
      </form>
  
    </div>
  </div>

@endsection