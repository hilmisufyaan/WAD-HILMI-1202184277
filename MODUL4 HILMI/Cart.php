<?php
include_once('db_connect.php');

$database = new database();
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
$user_id = $_SESSION['user_id'];
$nama = $_SESSION['nama']; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light <?= $navColor ?> text-dark justify-content-between">
        <a class="navbar-brand " href="index.php">WAD Beauty</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="cart.php" style="color:black">
                    <i style="font-size:20px" class="fa">&#xf07a; </i>
                </a>
            </li>
            <li class="nav-item ml-3 mr-1">
                <a style="color:black"> Selamat Datang, </a>
            </li>
            <li class="nav-item active dropdown ">
                <a class=" dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><?php echo "$nama" ?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
            </li>
        </ul>
    </nav>

    <!-- PHP -->
    <?php
    if(isset($_POST['Hapus'])){
        
        if($database->delete($_POST['Hapus']))
        {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Berhasil dihapus!</div>";
        }
    }
    
    ?>
    <!-- Container -->
    <div class="container" align="center">
        <div class="row mt-5">
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="" method="post">
                        <?php 
                $i=1;
                $totalharga=0;
                $data = $database->display_cart($user_id);
                while($user_data = mysqli_fetch_array($data)){
                ?>
                        <tr>
                            <td><?= $i++; ?> </td>
                            <td><?= $user_data['nama_barang']; ?></td>
                            <td>Rp. <?= $user_data['harga']; ?></td>
                            <?php $totalharga += $user_data['harga']; ?>
                            <td><button type="submit" name="Hapus" value="<?= $user_data['id']; ?>"
                                    class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                        <tr>
                            <th>Total</th>
                            <td></td>
                            <th>Rp. <?= $totalharga?></th>
                            <td></td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
        
    </div>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>