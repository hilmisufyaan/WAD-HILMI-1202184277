<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
		   
		   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		     <span class="navbar-toggler-icon"></span>
		   </button>

		   <div class=" collapse navbar-collapse justify-content-center" >
		     <ul class="navbar-nav " >

		       <li class="nav-item active">
		         <a class=" nav-link " href="Home.php">Home <span class="sr-only">(current)</span></a>
		       </li>

		       <li class="nav-item">
		         <a class=" nav-link" href="Booking.php">Booking<span class="sr-only">(current)</span></a>
		       </li>
		       
		     </ul>
		   </div>

 	</nav>

 	<br>

	<nav class="container">
		<nav class="row text-center">
			<nav class="col-md-12 text-primary">
				EAD HOTEL
			</nav>
			<nav class="col-md-12 text-primary">
				Welcome to 5 star Hotel
			</nav>
		</nav>
	</nav>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					  <img src="kamar_st.jpg " class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title"><b>Standard</b></h5>
					    <p class="card-text text-primary"><b>$ 90/Day</b></p>
					    <div class="card-header">
						    Facilities
						  </div>
					    <ul class="list-group list-group-flush">
						    <li class="list-group-item">1 Single Bed</li>
						    <li class="list-group-item">1 Bathroom</li>
						   
						  </ul>
						
						  <div class="card-footer">
					   <a href="Booking.php?room=Standard" class="btn btn-primary btn-block">Book Now</a>
					    </div>
					  </div>
	 			</div>
			</div> 

			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					  <img src="kamar_VIP1.jpg " class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title"><b>VIP</b></h5>
					    <p class="card-text text-primary"><b>$ 150/Day</b></p>
					    <div class="card-header">
						    Facilities
						  </div>
					    <ul class="list-group list-group-flush">
						    <li class="list-group-item">1 double Bed</li>
						    <li class="list-group-item">1 Television and Wi-fi</li>
						    <li class="list-group-item">1 Bathroom with hot water</li>
						  </ul>
						
						 <div class="card-footer">
					   <a href="Booking.php?room=VIP" class="btn btn-primary btn-block">Book Now</a>
					    </div>
					  </div>
	 			</div>
			</div>  

			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					  <img src="kamar_lux.jpg " class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title"><b>Luxury</b></h5>
					    <p class="card-text text-primary"><b>$ 200/Day</b></p>
					    <div class="card-header">
						    Facilities
						  </div>
					    <ul class="list-group list-group-flush">
						    <li class="list-group-item">2 Double Bed</li>
						    <li class="list-group-item">1 Bathroom with hot water</li>
						    <li class="list-group-item">1 Kitchen</li>
						    <li class="list-group-item">1 television an Wi-fi</li>
						    <li class="list-group-item">1 Workroom</li>
						  </ul>
						
						  <div class="card-footer">
					    <a href="Booking.php?room=Luxury" class="btn btn-primary btn-block">Book Now</a>
					    </div>
					  </div>
	 			</div>
			</div>
		</div>
			
	</div>
	 
</body>
</html>