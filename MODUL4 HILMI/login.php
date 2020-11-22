<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}

if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) 
{
    $email = $_COOKIE["email"];
    $password = $_COOKIE["password"];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

</head>

<body style="background-color:#bbdefb">
    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
      <a class="navbar-brand">WAD Beauty</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <span class="nav-link">Login</span>
        </li>
        <li class="nav-item">
          <a href="register.php" class="navbar-text mr-sm-2" style="color:black;">Register</a> 
        </li>
      </ul>
    </nav>

    </header>
    <!-- PHP -->
<?php

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
    if($database->login($email,$password,$remember))
    {
        echo"<div class=\"alert alert-warning\" role=\"alert\">Berhasil login!</div>";
        echo "<script>setTimeout(function() {window.location.href='index.php'}, 2000);</script>";
    }else{
        echo"<div class=\"alert alert-warning\" role=\"alert\">Gagal login!</div>";
        echo "<script>setTimeout(function() {window.location.href='index.php'}, 2000);</script>";
    }
    
}

?>
    <form class="form-signin" action="" method="POST">
        <div class="container d-flex mt-5 p-5 justify-content-center align-items-center">
            <div class="shadow p-5 bg-white rounded" style="width: 40%;">
                <div class="col col-md">

                    <center><h2>Login</h2></center>
                    <hr>

                    <!-- username -->
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" id="username" class="form-control" placeholder="Email" name="email" required>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>    
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <!-- checkbox -->
                    
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember">
                            <label class="form-check-label">Remember me
                            </label>
                        </div>

                    <div class="container d-flex flex-row justify-content-center">
                        <button class="btn btn-md btn-primary" type="submit" value="submit" name="login">Login</button>
                    </div>

                    <center><p class="mt-3 text-muted">Belum punya akun? <a href="register.php" style="color: primary;">Registrasi</a></p></center>
                    
                </div>    
            </div>
        </div>
    </form>
    
</body>
</html>