@include('partials.header_admin')


 @include('partials.sidebar_admin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>{{ $nama_dashboard }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard mt-5">
      <div class="container">
        @yield('container')
      </div>
    </section>

 @include('partials.footer_admin')