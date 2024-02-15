<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="public/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="public/login/css/style.css">

    <title>Login #10</title>
    <script>
      function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    } 
    </script>
  </head>
  <body>
  

  
    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 contents">
            
            <h2>Validator Tagihan Pembayaran</h2>
            <br>
            <p>Validator tagihan pembayaran adalah aplikasi yang digunakan sebagai validator nomor rekening pmebayaran yang diajukan oleh Satuan Kerja Kepada Bank. Adanya aplikasi ini diharapkan mampu mengatasi masalah retur yang terkadang terjadi. sehingga proses penyaluran APBN dapat lancar.</p><span id="dots"></span>
            <p><span id="more">Validasi Rekening sendiri adalah suatu proses kritis dalam pengelolaan keuangan yang bertujuan untuk memeriksa dan memastikan keakuratan serta keberfungsian rekening bank yang digunakan dalam proses transaksi keuangan. Proses validasi ini terfokus pada dua kondisi utama, yaitu rekening salah (invalid) dan rekening tidak aktif. Rekening dianggap salah jika terdapat kesalahan dalam nomor rekening, nama pemilik rekening, atau data terkait lainnya. Sementara itu, rekening tidak aktif adalah rekening yang telah ditutup oleh pemiliknya atau tidak lagi digunakan untuk transaksi keuangan. Dalam kedua situasi ini, proses validasi rekening bertujuan untuk menghindari kesalahan dalam penyaluran dana dan memastikan bahwa dana hanya disalurkan ke rekening yang valid dan aktif. </span></p>
            
            <button onclick="myFunction()" id="myBtn" class="btn btn-pill text-white btn-primary">Read More</button>
            <br>
            <br>

          </div>

          <div class="col-md-6 h-100 contents">
            <div class="form-block">
            <div class="mb-4">
              <center>
                <img src="public/login/images/kemenkeu.png" class="img-fluid" style="width: 100px;">
              </center>
              <h2 style="text-align: center; padding-top: 20px;">Silahkan Login</h2>
                </div>


                <?= view('Myth\Auth\Views\_message_block') ?>
               
               <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
                  <div class="form-group first">
                    <label for="username"><?=lang('Auth.email')?></label>
                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login">

                    <div class="invalid-feedback">
                      <?= session('errors.login') ?>
                    </div>
                  </div>
<?php else: ?>
                  <div class="form-group first">
                    <label for="username"><?=lang('Auth.emailOrUsername')?></label>
                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login">

                    <div class="invalid-feedback">
                      <?= session('errors.login') ?>
                    </div>
                  </div>
<?php endif; ?>

                  <div class="form-group last mb-4">
                    <label for="password"><?=lang('Auth.password')?></label>
                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="password">
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <span class="caption"><a href="#" class="forgot-pass">Registrasi</a></span>
                    <button type="submit" class="ml-auto btn btn-pill text-white btn-primary">Log in</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

  
    <script src="public/login/js/jquery-3.3.1.min.js"></script>
    <script src="public/login/js/popper.min.js"></script>
    <script src="public/login/js/bootstrap.min.js"></script>
    <script src="public/login/js/main.js"></script>
  </body>
</html>