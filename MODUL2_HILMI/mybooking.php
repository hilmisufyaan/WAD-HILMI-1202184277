<!DOCTYPE html>
<html>
<head>
  <title>My booking</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class=" collapse navbar-collapse justify-content-center" >
         <ul class="navbar-nav " >

           <li class="nav-item">
             <a class=" nav-link " href="Home.php">Home <span class="sr-only">(current)</span></a>
           </li>

           <li class="nav-item active">
             <a class=" nav-link" href="Booking.php">Booking<span class="sr-only">(current)</span></a>
           </li>
           
         </ul>
       </div>

  </nav>

    <?php
    $Nama   = $_GET['Nama'];
    $CheckIn  = $_GET['CheckIn'];
    $kamar    = $_GET['RoomType'];
    $Phone    = $_GET['PhoneNumber'];
    $Durasi   = $_GET['Durasi'];
    $Room   = $_GET['RoomType'];

      ?>

  <br>
  <br>

 <div class="container">

<table class="table table-hover text-center">
 
  <tr>
    <td>
      <b>Booking Number</b>
    </td>
    <td>
      <b>Name</b>
    </td>
    <td>
      <b>Check-in</b>
    </td>
    <td>
      <b>Check-out</b>
    </td>
    <td>
      <b>Room Type</b>
    </td>
    <td>
      <b>Phone Number</b>
    <td>
      <b>Service</b>
    </td>
    <td>
      <b>Total Price</b>
    </td>
  </tr>

  <tr>
    <th scope="row">
      <?php
        echo rand();
      ?>
    </th>
    <td>
      <?php
        echo "$Nama";
      ?>
    </td>
    <td>
      <?php
        echo "$CheckIn";
      ?>
    </td>
    <td>
      <?php 
        echo date('Y-m-d', strtotime($CheckIn. " +" .$Durasi. "days"));
      ?>
    </td>
    <td>
      <?php
        echo "$Room";
      ?>
    </td>
    <td>
      <?php
        echo "$Phone";
      ?>
    </td>
    <td>
      <ul>
        <?php
          if ($kamar == 'Standard') {
            $prise = 90;
          }else if ($kamar == 'Superior') {
            $prise = 150;
          }else if ($kamar == 'Luxury') {
            $prise = 200;
          }

          ?>

          <?php
          if (!empty($_GET['AddService'])) {
            foreach ($_GET['AddService'] as $AddService) {
              echo "<li>" .$AddService."</li>";
            
            if ($AddService == 'Room Service') {
              $prise += 20;
            }else if ($AddService == 'Breakfast') {
              $prise += 20;
            }
          }
        }
        ?>
      </ul>
    </td>
    <td>
      <?php
        echo '$ ' .$prise;
      ?>
    </td>
  </tr>
  </table>
 </div> 

</body>
</html>