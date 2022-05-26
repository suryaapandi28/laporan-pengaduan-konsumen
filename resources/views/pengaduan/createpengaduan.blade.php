

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Laporan Pengaduan Pelanggan</title>
 <link rel="shortcut icon"href="https://ecampus.binainsani.ac.id/binainsani/img/logo_perguruanTinggi_11.png">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="https://www.pejuangpagi.id/clientmember/asset/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="https://www.pejuangpagi.id/clientmember/asset/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="https://www.pejuangpagi.id/clientmember/asset/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />


</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="index.html">

                    <img style="width: 200px;" src="https://ecampus.binainsani.ac.id/binainsani/img/logo_perguruanTinggi_11.png" />
                </a>

            </div>

            
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!-- <li><a href="https://www.pejuangpagi.id/" >Beranda</a></li> -->
                            <!-- <li><a href="" class="menu-top-active">Login</a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
     
     <div class="content-wrapper">
         <div class="container">
         <form action="{{ route('pengaduan.store') }}" method="POST">
         @csrf
         <div class="form-group">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap Pelanggan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pelapor" aria-describedby="emailHelp" placeholder="Contoh : Supriyadi">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email Pelanggan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat_email_pelapor" placeholder="Contoh : supriyadi@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomer Telephone Pelanggan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="notlp_pelapor" placeholder="Contoh : 01234567891011">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pekerjaan Pelanggan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pekerjaan_pelapor" placeholder="Contoh : Wiraswasta">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Alamat Tinggal Pelanggan</label>
  <textarea class="form-control" rows="5" id="ket" name="alamat_pelapor" placeholder="Contoh  : Jl. Raya Siliwangi No.6, RT.001/RW.004, Sepanjang Jaya, Kec. Rawalumbu, Kota Bks, Jawa Barat" ></textarea>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Keluhan Pelanggan</label>
  <textarea class="form-control" rows="10" id="ket" name="keluhan_pelapor" placeholder="" ></textarea>
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

         <!-- <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Maintenance</h4>
  <p>We are working hard to improve our website and we will be ready to relaunch it</p>
  <hr>
  <p class="mb-0">Informasi Lebih Lanjut : it.website@pejuangpagi.id</p>
</div>  -->
          </div> </div>
     
     
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2022 Bina Insani Univesitas
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="https://www.pejuangpagi.id/clientmember/asset/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="https://www.pejuangpagi.id/clientmember/asset/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="https://www.pejuangpagi.id/clientmember/asset/js/custom.js"></script>
      <script src="https://www.pejuangpagi.id/clientmember/assets/vendor/jquery/jquery.min.js"></script>
 
</body>
</html>
