<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
 	<br><br>

 	<div class="container">
 		<div class="row">
 			<div class="col-md-6">

 				<form action="Mybooking.php" method="get">
				  <div class="form-row">
				    <div class="col-md-10 mb-3">
				      <label for="inputNama">Nama</label>
				      <input type="text" class="form-control" id="validationCustom01" name="Nama">
				     
				    </div>
				   	</div>
				   	<div class="form-row">
				   		<div class="col-md-10 mb-3">
					      <label for="inputNama">Check-in</label>
					      <input type="date" class="form-control" id="validationCustom01" name="CheckIn">
					    
				    </div>
				   	</div>

				   	<div class="form-row">
				   		<div class="col-md-10 mb-3">
					      <label for="inputNama">Duration</label>
					      <input type="type" class="form-control" id="validationCustom01" name="Durasi">
					    <small id="passwordHelpBlock" class="form-text text-muted">
							  Day(s)
							</small>
				    </div>
				   	</div>
				   	<div class="form-row">
				   		<div class="col-md-10 mb-3">
				   			<?php
				   				if (isset($_GET['pindah'])) {
				   					$pindah =$_GET['pindah'];
				   				}else{
				   					$pindah = '';
				   				}
				   			?>
				   			<div class="form-group">
				   			
					      <label for="inputNama">Room type</label>
					      <?php if ($pindah == '') {?>
					     	  <select class="custom-select" name="RoomType"> 
					     	  <option selected>Room..</option>
						      <option >Standard</option>
						      <option >VIP</option>
						      <option >Luxury</option>
						 	  </select>
					       <?php  }else{ ?>
					       	  <input type="text" class="form-control" readonly="" name="RoomType" value="<?php echo($_GET['pindah']) ?>">
					       <?php } ?>
					        
					   </div>
				    </div>
				   	</div>
				   	<div class="form-row">
				   		<div class="col-md-10 mb-3">
					      <label for="inputNama">Add Service(s)</label>
					       <small id="passwordHelpBlock" class="form-text text-muted">
							  $ 20/service
							</small>
					   		<div class="form-check form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Room Service" name="AddService[]" value="Room Service ">
								  <label class="form-check-label" for="inlineCheckbox1">Room Service</label>
							</div>
							<div class="form-check form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Breakfast" name="AddService[]" value="Breakfast">
								  <label class="form-check-label" for="inlineCheckbox1">Breakfast</label>
							</div>
					    
				    </div>
				   	</div>
				    <div class="form-row">
				   		<div class="col-md-10 mb-3">
					      <label for="inputNama">Phone Number</label>
					      <input type="type" class="form-control" id="validationCustom01" name="PhoneNumber">
					    
				    </div>
				   	</div>
				        <div class="form-row">
				   		<div class="col-md-10 mb-3">
					       <input type="submit" name="submit" value="Book" class="btn btn-primary btn-lg btn-block mt-1 ">
				    </div>
				   	</div>

				   </form>
 			</div>
 			<br>
 			<br>
 			<div class="col-md-6">
 				<img src="kamar_lux.jpg" style="width: 110%; height: 350px">
 				
 			</div>
 		</div>
 		
 	</div>
</body>
</html>