@extends('layouts.main_admin')

@section('container')
<div class="justify-content-center">
    <div class="card text-center">
        <div class="card-header">
          My Profile
        </div>
        <div class="card-body">
          <h5 class="card-title">Profil Picture </h5>
          <img src="...jpg" alt="" class="round-rounded">
          <p class="card-text">Username:{{ auth()->user()->name }}</p>
          <p class="card-text">Email:{{ auth()->user()->email }}</p>
          {{-- <a href="https://mail.google.com/{{ auth()->user()->email }}" class="btn btn-primary">Go To email</a> --}}
        </div>
      </div>
@endsection