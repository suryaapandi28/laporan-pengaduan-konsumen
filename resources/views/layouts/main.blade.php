@include('partials.header_login')
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            @yield('container')
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Pengaduan Pelanggan</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your name & password to login</p>
                  </div>
                
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" role="alert">
                   Data Berhasil Ditambahkan
                  </div>
                  @endif
               

                  <form class="row g-3 needs-validation" action="/login" method="post">
                    @csrf
                    <div class="col-12">
                      <label for="name" class="form-label">Username</label>
                      <div class="input-group">
                        {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                        <input type="text" name="name" class="form-control form-control rounded-top @error('name') is-invalid @enderror" id="name"  autocomplete="off" placeholder="Enter Name here..." value="{{ old('name') }}">
                        <div class="invalid-feedback">Please enter your name.</div>
                        @error('name')    
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" id="password"  placeholder="Enter Password here..." >
                      <div class="invalid-feedback">Please enter your password!</div>

                      @error('password')    
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://binainsani.ac.id/">Bina Insani University</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
@include('partials.footer_login')