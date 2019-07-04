<?php include("konek.php"); ?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>We Found Your Pet!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Lost Pets</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="form.php">Found a lost pet? Report us!</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<!-- 
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span> -->
											
					   					<h1>Do you find a lost pet?</h1>
					   					<p class="meta"> 
					   						<a href="form.php"  style="font-style: bold; font-family: Helvetica;">
					   						<i class="fa fa-bullhorn" style="font-size: 25px;"></i> 
					   						Report Now!
					   					</a>
					   					</p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
											<span class="cat"><a href="form.php">Post a report </a></span>	
											</p>
					   					<h1> Help the owners to find their lost love ones </h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat">Post a report by filling our <a href="form.php"> Form</a></span>
											</p>
					   					<h1><i class="fa fa-paw"></i> Take those poor pet to their home!</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Cat?</a></span>
												<span class="date"><a href="#">Dog?</a></span>
												<span class="pos">or <a href="#">Others?</a></span>
											</p>
					   					<h1><i class="fa fa-bullhorn" > &nbsp; </i>Report a lost pet? </h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
			<div class="row row-pb-md">
					<?php
					    $query = "SELECT * FROM laporanhilang";
					    $result= mysqli_query($conn, $query);    
						while($row = mysqli_fetch_assoc($result)) {         
						echo "<div class='col-md-4'>";
						echo "<div class='blog-entry'>";
						echo "<div class='blog-img'>";
						echo "<a href=''><img src='images/uploaded/" .$row['image']. "' class='img-responsive' alt='html5 bootstrap template'></a>";
						echo "</div>";
						echo "<div class='desc'>";
						echo "<p class='meta'>";
						echo "<span class='cat'><a href='#'>". $row['animal_type'] . "</a></span>";
						echo "<span class='date'>". $row['posted_time'] . "</span>";
						echo "<span class='pos'>By <a href=''>" . $row['name'] ."</a></span>";
						echo "<br>";
						echo "<span class='pos'><i class='fa fa-phone'></i> Call: 
								<a href='callto:" . $row['telephone'] ."' > ". $row['telephone'] ."</a></span>";
						echo "<br>";
						echo "<span class='pos'><i class='fa fa-send'></i> Mail:
								<a href='mailto:" . $row['email'] . " ' > ". $row['email'] ."</a></span>";
						echo "</p>";
						echo "<h2><a href=''>"  . $row['location'] ."</a></h2>";
						echo "<p>" . $row['deskripsi'] . "</p>";
						echo "<p class='meta'>";
						echo "<span class='date'> Found on: " . $row['datefound'] . "</span>";
						echo "</p>"
						 ?>
								<!-- Button Edit -->
								<a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                					<i class="fa fa-edit" style="font-size: 25px;"></i>
              					</a>
              					<!-- Button Delete -->
								<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
									<i class="fa fa-trash" style="font-size:25px;"></i>
				              	</a>
							</div>
						</div>
					</div>
					 <?php } ?>
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Our Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
					</a>
				</div>
			</div>
		</div>
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

