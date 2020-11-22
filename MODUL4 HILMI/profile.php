<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
               <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<title>Home</title>
</head>
<?php
?>
 
 <body>
 
    <br>

    <div class="container-fluid">
		<div class="row justify-content-lg-center">
		<div class="col-lg-5 my-7">
		<div class="card">
		<div class="card-header">
    <h1 class="text-center mb-4">Profil</h1>
    <hr/>
    <form method="post" action="">
    
    <div class="card-body">
    
    <div class="form-group-row">
    <label for="email">Email</label>
    <input type="text" readonly class="form-control" id="email" value="Hilmisufyaan@gmail.com">
    </div>
    
    <div class="form-group">
      <label for="nama" >Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>

    <div class="form-group">
        <label for="no_hp">Nomor Handphone</label>
        <input type="integer" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone">
        </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    
    <div class="form-group">
        <label for="password">Password Confirm</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Warna Navbar
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Light</a>
    <a class="dropdown-item" href="#">Dark</a>
   </div>
</div>
<br>
<div class="form-group">
<a href="index.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Submit</a>
  <br>  
  <a href="index.php" class="btn btn-outline-danger btn-lg btn-block" role="button" aria-pressed="true">Cancel</a>
    </div>
  </div>
</form>
</div>
  </div>
  </div>
  </div>
  </div>
  </div>
</main>
  </div>
</body>
</html>