<?php 
include_once('db_connect.php');
$database = new database();
?>
<!doctype html>
<html lang="en" class="h-5">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Register Form</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style>
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    
  </style>
  <!-- Custom styles for this template -->
  <link href="sticky-footer.css" rel="stylesheet">
</head>

<body style="background-color:#bbdefb">

  <!-- header -->
  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
      <a class="navbar-brand" href="index.php">WAD Beauty</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color:black;">Login</a>
        </li>
        <li class="nav-item">
          <span class="navbar-text mr-sm-2">Register</span> 
        </li>
      </ul>
    </nav>

  </header>

  <!-- PHP -->
  <?php
  if(isset($_POST['register']))
  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $handphone = $_POST['handphone'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if($password==$password2){
      $pass = password_hash($password, PASSWORD_DEFAULT);
      if($database->register($nama,$email,$handphone,$pass))
      {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Berhasil registrasi!</div>";
      }else{
        if($database->noDuplicate($email)){
          echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal registrasi!</div>";
        }else{
          echo "<div class=\"alert alert-warning\" role=\"alert\">Email sudah teregistrasi!</div>";
        }
        
      }
    }else{
      echo "<div class=\"alert alert-warning\" role=\"alert\">Password tidak sama</div>";
    }
  }
?>

  <!-- Begin page content   -->
  <main role="main">
    <div class="container d-flex justify-content-center p-4">
      <div class="shadow card shadow-lg bg-white pt-3 px-5" style="width: 40%;">
        <div class="card-body">
          <h1 class="text-center">Registrasi</h1>
          <hr />
          <div class="px-4  ">
            <form method="post" action="">

              <div class="form-group row">
                <label for="nama" class="col-form-label">Nama</label>

                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap"
                  required>

              </div>

              <div class="form-group row">
                <label for="email" class="col-form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail"
                  required>
              </div>

              <div class="form-group row">
                <label for="handphone" class=" col-form-label">No. Handphone</label>
                <input type="number" class="form-control" id="handphone" name="handphone"
                  placeholder="Masukkan Nomor Handphone" required>
              </div>

              <div class="form-group row">
                <label for="password" class="col-form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Buat Kata Sandi"
                  required>
              </div>


              <div class="form-group row">
                <label for="password2" class="col-form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="password2" name="password2"
                  placeholder="Konfirmasi Kata Sandi" required>
              </div>

              <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-primary" name="register">Daftar</button>
              </div>

              <div class="row justify-content-center">
                <p class="">Sudah punya akun?</p>
                <a href="login.php"> Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>