<?php 
include 'backend/koneksi.php';
$cek = mysqli_query($konek,"SELECT * FROM tbl_berita");
$row = mysqli_fetch_assoc($cek);
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="icon" href="assets/icons/ts.png">
  <title>I ' M</title>
  <!-- Required meta responsive tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/style_footer.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <!-- Script JS -->
  <script src="js/jquery.slim.js"></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>

  <!-- Font -->
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">
  <!-- icons -->
  <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&family=Roboto:wght@400;700&family=Silkscreen&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style type="text/css">
    body{
      height: 100vh;
    }
    main{
      margin-top: 60px;
    }
  </style>
</head>
<body class="bg-secondary text-white">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="home.php">| I'M Vector |</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengertian.php">Apa itu Vector ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">Order Vektor</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Tutorial Vector
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="art.php?id=<?php $row['id_berita'] ?>">Art</a>
              <a class="dropdown-item" href="vidio.php">Vidio</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Me</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>