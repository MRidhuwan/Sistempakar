 <?php
include 'koneksi.php';
// session_start();
// if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
//     //jika alamat di klik saat belum login

// echo "<script>alert('Anda Belum Login');document.location.href='login.php'</script>";
// }

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Beranda </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>

  <!-- navigation panel -->
  <!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Expert System</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#information">Information</a></li>
          <li><a href="#google_map">Contact</a></li>
          <!-- <li><a href="konsultasi.php" data-toggle="modal" data-target="#exampleModal">Konsultasi</a></li> -->
          <li><a href="cs.php"> Konsultasi</a></li>  
          
          <li class="nav-item">
            <a class="nav-link"  href="login.php">Login</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- first section - Home -->
  <div id="home" class="home">
    <div class="ptext">
      <span class="border">
        Master Print
      </span>
    </div>
  </div>
  
  <!-- second section - About -->
  <div id="about" class="pad-section">
    <section class="section section-light">
      <h2>Konsultasi Kerusakan Mesin</h2>
      <p>
        Mesin TIC merupakan singkatan dari Thermal Inject Coder atau dikenal dengan mesin Coding. Mesin Coding
        merupakan alat yang digunakan untuk mencetak kode produksi, tanggal kadaluarsa atau Expired Date dan Barcode
        secara otomatis sesuai dengan penyetelan. Selain itu, mesin ini bisa mencantumkan tanggal sekaligus kode
        produksi dari setiap produk yang akan dipasarkan kepada konsumen. Mencantumkan tanggal kadaluarsa adalah
        kewajiban bagi setiap perusahaan pada produk yang akan dijajakan. Pada perusahaan besar dengan produksi ribuan
        bungkus makanan di setiap harinya tentu saja membutuhkan alat yang bisa bergerak lebih cepat. Dengan demikian
        proses produksi akan terasa lebih cepat dan lebih maksimal untuk digunakan klik dibawah ini untuk melihat
        profil PT Master Print
      </p>
      <a href="http://masterprint.co.id/" type="button" class="btn btn-danger">Master Print </a>
    </section>

  </div>
  </div>
  </div>
  <!-- /second section -->

  <!-- third section - Services -->
  <div id="services" class="pad-section">
    <div class="container">
      <h2 class="text-center">Our Services</h2>
      <hr />
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-send"> </i>
          <h4>Consulting </h4>

        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-bell"> </i>
          <h4>Trial</h4>

        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-phone-alt"> </i>
          <h4>Support</h4>

        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-bullhorn"> </i>
          <h4>Service </h4>

        </div>
      </div>
    </div>
  </div>
  <!-- /third section -->

  <!-- fourth section - Information -->
  <div id="information" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h2 class="panel-title text-center"> Information Product</h2>
            </div>
            <div class="panel-body post-thumb">
              <img class="img img-responsive" src="images/product/MD1.png" alt="MD">
            </div>
            <div class="panel-body post-body">
              <a class="label label-primary" href="#">Metal Dectector</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h2 class="panel-title text-center">Information Product</h2>
            </div>
            <div class="panel-body post-thumb">
              <img class="img img-responsive" src="images/product/CW1.png" alt="MD">
            </div>
            <div class="panel-body post-body">
              <a class="label label-primary" href="#">Check Weigher</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h2 class="panel-title text-center">Information Product</h2>
            </div>
            <div class="panel-body post-thumb">
              <img class="img img-responsive" src="images/product/Nwc1.jpg" alt="NS">
            </div>
            <div class="panel-body post-body">
              <a class="label label-primary" href="#">MD - 490 Series</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /fourth section -->

  <!-- fifth section -->
  <div id="services" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>PT. Master Print</h3>
          <h4>The next is the address on Google maps</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- /fifth section -->

  <!-- google map -->
  <div id="google_map"></div>
  <!-- /google map -->

  <!-- footer -->
  
    
  <!-- Footer -->
  <footer class="page-footer">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-1"> Copyright ©2019 MRidhuwan
    </div>
    <!-- Copyright -->

  </footer>

  <!-- attach JavaScripts -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//maps.google.com/maps/api/js?sensor=true"></script>
  <script src="js/main.js"></script>

</body>

</html>