<?php 
include '../koneksi.php';
session_start();

if($_SESSION['id'] == ''){
  header("Location:../login.php");
}


$id = $_SESSION['id'];
$cek = mysqli_query($konek,"SELECT * FROM db_login WHERE id_login='$id'");
$row = mysqli_fetch_assoc($cek);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Admin</title>

  <!-- SweetAlert -->
  <link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- js -->
  <script src="../js/jquery.slim.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <!-- Animasi -->
  <link rel="stylesheet" href="../css/animate-3.5.2.min.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    .preloader-single{
      background: #fff;
      width: 100%;
      height: 350px;
      padding: 20px;
    }
    .preloader {
      position: fixed;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    .preloader .loading p {
      font-size: 16px;
      font-weight: bold;
    }
    

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>
<body>
<!--   <div class="preloader" id="preloader">
    <div class="loading">
      <img src="loading.gif" width="80">
      <p>Please Wait...</p>
    </div>
  </div> -->
  <nav class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="../../index.php">IM Vector</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-1">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item text-center">
              <img src="../../assets/img/sat.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
              <div class="d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>
                <h4 class="text-center d-flex flex-right"><?php echo $row['nama']?></h4>
              </div>
            </li>
            <li class="nav-item">
              <hr>
              <a class="nav-link" href="layout.php?page=home">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layout.php?page=informasi">
                <span data-feather="bell"></span>
                Informasi
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>TOOLS</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="layout.php?page=ganti-password">
                <span data-feather="key"></span>
                Ganti Password
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../keluar.php">
                <span data-feather="power"></span>
                Keluar
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <!-- START CONTENT -->
        <?php 
        if(isset($_GET['page'])){
          if($_GET['page'] == 'home'){
            include 'home.php';
          }elseif($_GET['page'] == 'ganti-password'){
            include 'ganti_password.php';
          }elseif($_GET['page'] == 'informasi'){
            include 'informasi.php';
          }elseif($_GET['page'] == 'tambah-data'){
            include 'tambah-data.php';
          }elseif($_GET['page'] == 'view'){
            include 'view.php';
          }elseif($_GET['page'] == 'edit-data'){
            include 'detail-data.php';
          }else{
            include 'home.php';
          }
        }else{
         include 'home.php';
       } 
       ?>
       <!-- END CONTENT -->
     </main>
   </div>
 </div>
</body>
<script>
  // set delay 10s
  var delay = 300;
  $(window).on('load', function() {
    setTimeout(function(){
      $("#loading").hide();
      $(".preloader").hide();
    },delay);
  });
  feather.replace()
</script>
</html>
