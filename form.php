<?php include("konek.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>We found your pet!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Found Pet Details Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/formstyle.css" rel='stylesheet' type='text/css' />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1>Found Pet Details Form</h1>
	<div class="main-w3layouts-content">
		<div class="top-section">
			<h2 class="sub-hdng-agileits-w3layouts">Find a lost pet? Report Us</h2>
			<p>Please fill the form below if you find a lost pet and we will try and get it back to the owner.</p>
		</div>
		<div class="w3-agile-login-form">
			<form action="simpan.php" method="POST" enctype="multipart/form-data">
				<h3 class="inner-hdng-agileinfo">Contact information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="text" name="nama" placeholder="Name" required="true" />
					</div>
					<div class="input-fields-w3ls">
						<input type="email" name="email" placeholder="Email" required="true" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="phone" placeholder="Phone" required="true" />
					</div>
				</div>
				<h3 class="inner-hdng-agileinfo">About Found Pet</h3>
				<div class="mid-fields-agileits-w3layouts">
					<div class="input-fields-w3ls2">
						<input id="datepicker" name="datefound" type="text" placeholder="Date found" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
						    required="true" />
					</div>
					<div class="input-fields-w3ls2">
						<input type="text" name="animaltype" placeholder="Animal type" required="true" />
					</div>
				</div>
				<textarea name="description" placeholder="Description of animal" required=""></textarea>
				<textarea name="location" placeholder="Where found" required=""></textarea>
				<div class="mid-fields-agileits-w3layouts">
				<div class="input-fields-w3ls2">
					<div class="custom-upload"> 
					<button class="btn-upload">Upload Picture</button>
					<input type="file" name="image" value="Upload Picture">
					</div>
				</div>
				</div>
				<input type="submit" name="simpanform" value="Report Now">
			</form>
		</div>
	</div>
	<div class="clear"></div>
	<div class="copy-right-w3l">
		<p>All Rights Reserved</p>
	</div>
	<!-- JavaScript plugins -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!--// JavaScript plugins -->
</body>

</html>