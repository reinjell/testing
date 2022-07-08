<?php

session_start();
include 'config.php';

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Responsive Main Page</title>
		<link rel="stylesheet" href="main.css">
</head>
<body>
	<header>
		<a href="#" class="logo"><h2>CarRental</h2></a>
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#cars">Cars</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="Bookings.php">Bookings</a></li>
			<li><a href="ProfileInfo.php">Profile</a></li>
		</ul>
	</header>
	<section class="banner" id="home">
		<img src="https://wallpapercave.com/uwp/uwp2103100.jpeg" class="fitBg">
		<div class="content">
			<h2>Explore The World</h2>
			<p>Here at Car Rental PH. We meet every Demands/Standards for Self-Drive Car Rentals. We make Everything Hassle Free and Also one of the Cheapest Car Rental Rates in the Philippines which also offers short and long term Car Rental lease with our well-maintained cars.</p>
			<a href="#about" class="btn">Learn More</a>
		</div>
	</section>
<!-- about section -->

	<section class="about" id="about">
		<div class="contentBx">
			<h2 class="titleText">Rent the Best Cars!</h2>
			<p class="text">We are a car rental service in Bataan, Philippines, and we offer self-drive, which means you can drive the car wherever you want. We also provide the most convenient car rental services by displaying a travel itinerary for easy travel. We are delighted to assist you. <br><br>You will get the best deal whether you need a Long Term or Monthly Car & Van Rental in Bataan, Philippines. This distinguishes us from other car rental or car lease companies in Bataan that charge exorbitant rates. Our car and van rentals come with the option of self-driving or with a driver. </p>
			<a href="#cars" class="btn">Cars</a>
		</div>
		<div class="imgBx">
			<img src="https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  class="fitBg">
	</section>
	
	<section class="banner2">
		<img src="https://c.wallhere.com/photos/f0/3f/car_black_Audi_black_cars_vehicle-1952307.jpg!d" class="fitBg">
	
	</section>
<!-- car section -->
	<section class="popular" id="cars">
		<div class="content">
			<h2 class="titleText">Our Cars</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
		
		<div class="carList">
			
			<?php
	
	$sql = "SELECT * FROM cartable";
			$num_row = 0;
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) { 
			$num_row++;
			if ($num_row < 7) {
			echo	'<div class="box">
					<div class="imgBx">
						<img src="data:image/jpeg;base64,'.base64_encode($row['Img']).'" class="fitBg">
					</div>
					<div class="content">
						<h2>'.$row['Model'].'<br><span><a href="vehicledetails.php?carid='.$row['Car_id'].'" class="btn">Details</a></span></h2>
					</div>
					</div>';
				
			}
		 }
	
	?>
		</div>
		<a href="carlist.php" class="btn">View More</a>
	</section>

	<section class="banner3">
		<img src="https://wallpapercave.com/uwp/uwp1401406.jpeg" class="fitBg">
	</section>
	
	<!-- contact us section -->
	<section class="contact" id="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="row100">
				<div class="col">
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span class="text">First Name</span>
						<span class="line"></span>
					</div>
				</div>
				<div class="col">
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span class="text">Last Name</span>
						<span class="line"></span>
					</div>
				</div>
			</div>
			<div class="row100">
				<div class="col">
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span class="text">Email</span>
						<span class="line"></span>
					</div>
				</div>
				<div class="col">
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span class="text">Mobile</span>
						<span class="line"></span>
					</div>
				</div>
			</div>
			<div class="row100">
				<div class="col">
					<div class="inputBox textarea">
						<textarea required="required"></textarea>
						<span class="text">Type your message here..</span>
						<span class="line"></span>
					</div>
				</div>
			</div>
			<div class="row100">
				<div class="col">
					<input type="submit" value="Send">
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section class="footer">
		<ul class="sci">
			<li><a href="#"><img src="icons/facebook.png"></a></li>
			<li><a href="#"><img src="icons/twitter.png"></a></li>
			<li><a href="#"><img src="icons/instagram.png"></a></li>
		</ul>
		<h4 class="copyrightText"> Copyright ©2021-2022 <a href="#">Group 3</a>. All rights reserved.</h4>
	</section>
	
	<script type="text/javascript">
		window.addEventListener("scroll",function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
	</script>
</body>
</html>