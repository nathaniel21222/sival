<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

    <title>Login #7</title>
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
  <body class="bg-light">
  

  
  <div class="content ">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h2>Validator Tagihan Pembayaran</h2>
          <br>
          <p>Validator tagihan pembayaran adalah aplikasi yang digunakan sebagai validator nomor rekening pmebayaran yang diajukan oleh Satuan Kerja Kepada Bank. Adanya aplikasi ini diharapkan mampu mengatasi masalah retur yang terkadang terjadi. sehingga proses penyaluran APBN dapat lancar.</p><span id="dots"></span>
          <p><span id="more">Validasi Rekening sendiri adalah suatu proses kritis dalam pengelolaan keuangan yang bertujuan untuk memeriksa dan memastikan keakuratan serta keberfungsian rekening bank yang digunakan dalam proses transaksi keuangan. Proses validasi ini terfokus pada dua kondisi utama, yaitu rekening salah (invalid) dan rekening tidak aktif. Rekening dianggap salah jika terdapat kesalahan dalam nomor rekening, nama pemilik rekening, atau data terkait lainnya. Sementara itu, rekening tidak aktif adalah rekening yang telah ditutup oleh pemiliknya atau tidak lagi digunakan untuk transaksi keuangan. Dalam kedua situasi ini, proses validasi rekening bertujuan untuk menghindari kesalahan dalam penyaluran dana dan memastikan bahwa dana hanya disalurkan ke rekening yang valid dan aktif. </span></p>
          
          <button onclick="myFunction()" id="myBtn" class="btn btn-success">Read More</button>
        </div>

        <div class="col-md-6 contents border">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
            </div>
            <form action="#" method="post">
              <div class="">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">
              </div>

              <div class="">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">

                <span class="caption"><a href="#" class="forgot-pass">Registrasi</a></span>

                <div class=" ml-auto tombol">
                  <input type="submit" value="Log In" class="btn btn-primary">
                </div>
                

                
              </div>

              
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

    
  </body>
</html>