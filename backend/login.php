<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Halaman Login</title>

  <link rel="stylesheet" href="css/bootstrap.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="card shadow rounded text-center">
      <form class="form-signin" method="POST" action="proses_login.php">
        <img class="mb-4" src="https://png.pngitem.com/pimgs/s/235-2350797_rbac-in-kubernetes-png-download-lock-icon-png.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=='gagal'){
            echo '<div class="alert alert-danger" role="alert">
            Username dan Password Salah
            </div>
            ';
          }else{
            echo '<div class="alert alert-success" role="alert">
            LOGOUT BERHASIL
            </div>
            ';
          }
        }
        ?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Masukan Username" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Masukan Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
        <a href="../index.php">Back to home</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
      </form>
    </div>
  </div>

</body>
</html>
