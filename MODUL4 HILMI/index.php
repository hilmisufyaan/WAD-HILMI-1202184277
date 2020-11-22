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
    <title>Index</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  <?= $navColor ?> text-dark justify-content-between">
        <a class="navbar-brand " href="">WAD Beauty</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="cart.php" style="color:black">
                    <i style="font-size:20px" class="fa">&#xf07a; </i>
                </a>
            </li>
            <li class="nav-item ml-3 mr-1">
                <a style="color:black"> Selamat Datang, </a>
            </li>
            <li class="nav-item active dropdown " >
                <a class=" dropdown-toggle "  id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$nama" ?></a>
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
    if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];;

    if($id == "1"){
        $nama_barang    = "YUJA NIACIN 30 DAYS BLEMISH CARE SERUM";
        $harga = 169000;
    }elseif ($id == "2") {
        $nama_barang = "SOMEBYMI Snail Truecica Miracle Repair Cream";
        $harga = 180000;
    }else{
        $nama_barang = "30 DAYS MIRACLE TONER";
        $harga = 108000;
    }
    
    if($database->add($user_id,$nama_barang,$harga))
    {
      echo "<div class=\"alert alert-warning\" role=\"alert\">Berhasil ditambahkan!</div>";
    }else{
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal ditambahkan!</div>";
    }
}
?>

    <!-- Container -->
    <div class="container" align="center">
        <form action="" method="post">
            <div class="col-md-12 mt-3 mb-3" align="left">
                <div class="card-group">
                    <div class="card" style="background-image: linear-gradient(to right, #4CDDDA , #96E4B4, #F4EA88);">
                        <div class="card-body" align="center">
                            <h1>WAD Beauty</h1>
                            <p><b>Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</b></p>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="yuja.jpg" alt="Card image cap">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                                    <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk
                                        Whitening + blemish care + Anti-wrinkle, sangat recomended untuk masalah kulit
                                        kusam, kulit kering dan bekas jerawat atau FLEK hitam.</p>
                                </li>
                                <li class="list-group-item">
                                    <p>Rp169.000</p>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="index.php?id=1" class="btn btn-primary col-md-12">Tambah ke Keranjang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="some.jpg" alt="Card image cap">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                                    <p class="card-text">Sebagai pelembab, krim ini mampu memberikan kelembapan yang
                                        menyeluruh dan tahan lama bagi kulit, sehingga terasa halus, lembap dan kenyal.
                                        Mencerahkan, menghambat penuaan seperti keriput dan garis halus, juga
                                        menenangkan kulit yang iritasi, dengan kandungan 420.000ppm Snail Truecica.</p>
                                </li>
                                <li class="list-group-item">
                                    <p>Rp180.000</p>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="index.php?id=2" class="btn btn-primary col-md-12">Tambah ke Keranjang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="toner.png" alt="Card image cap">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                                    <p class="card-text">Dengan kandungan AHA, BHA dan PHA bekerja secara efektif untuk
                                        membuat kulit lebih bersih dan lebih bersinar, mengandung 10.000ppm ekstrak
                                        pohon teh alami yang secara efektif meningkatkan elastisitas dan menutrisi kulit
                                        Anda tanpa efek iritasi karena tidak mengandung 20 bahan 500 dan pewarna
                                        berbahaya.</p>
                                </li>
                                <li class="list-group-item">
                                    <p>Rp108.000</p>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="index.php?id=3" class="btn btn-primary col-md-12">Tambah ke Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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