<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Profile</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
	<link rel="stylesheet" type="text/css" href="/ui-fcs/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/ui-fcs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/ui-fcs/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/ui-fcs/css/style.css">
	<style type="text/css">
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font-family: arial;
		}

		.title {
			color: grey;
			font-size: 18px;
		}

		button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

		a {
			text-decoration: none;
			font-size: 22px;
			color: black;
		}

		button:hover,
		a:hover {
			opacity: 0.7;
		}

		#myGrid {
			text-align: center;
		}
	</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="header">
		<div class="bg-color">
			<header id="main-header">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Laura</a>
						</div>
						<div class="collapse navbar-collapse" id="lauraMenu">
							<ul class="nav navbar-nav navbar-right navbar-border">
								<li class="active"><a href="/home.php">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="/ListUser.php">Users</a></li>
								<!-- <li><a href="#testimonial">Testimonial</a></li> -->
								<li><a href="#contact">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow fadeIn delay-05s">
							<div class="banner-text">
								<h2>Hi, I am <span>Laura</span> Thomson,</h2>
								<p>A Creative Photographer <br>& Designer</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	$servername = "localhost";
	$database = "facebook";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$uid = $_GET['id'];

	$sql = "SELECT uid, name, gender, education, school, university, job, company, address FROM user where uid = '$uid'";
	$result = $conn->query($sql);
	$name;
        $gender;
        $education;
        $school;
        $university;
        $job;
        $company;
        $address;


	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {

			$name = $row["name"];
                $gender = $row["gender"];
                $education = $row["education"];
                $school = $row["school"];
                $university = $row["university"];
                $job = $row["job"];
                $company = $row["company"];
                $address = $row["address"];

		}
	} else {
		echo "0 results";
	}
	 $linkAvatar = 'https://graph.facebook.com/'.$uid.'/picture';
        $linkFace = 'https://www.facebook.com/'.$uid;


	$conn->close();
	?>

	<!-- <h2 style="text-align:center">User Profile Card</h2>

<div class="card">
	<img src=<?php echo $linkAvatar ?> alt="" style="width:50%">
  <h1 class="name" id="name"><?php echo $uid ?></h1>
  <p class="title" id="education"><?php echo $phone ?></p>
  <p class="university" id="university">Harvard University</p>
 <div style="margin: 24px 0;">
    
    <a href=<?php echo $linkFace ?> id="linkFace"><i class="fa fa-facebook"></i></a> 
  </div>
  
</div> -->
	<section id="portfolio" class="section-padding wow fadeInUp delay-05s">
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">User Profile</h2>
				<div class="card">
        <img src=<?php echo $linkAvatar ?> alt="" style="width:40%">
		  <h1><?php echo $name ?></h1>
		  <p class="title" id="education"><?php echo $education ?></p>
		  <p><?php echo $school ?></p>
		  <p><?php echo $university ?></p>
		  <p><?php echo $job ?></p>
		  <p><?php echo $company ?></p>
		  <p><?php echo $address ?></p>
		 <div style="margin: 24px 0;">

		    <a href=<?php echo $linkFace ?> id="linkFace"><i class="fa fa-facebook"></i></a>
		  </div>
		</div>

			</div>
		</div>
	</section>
	<section id="contact" class="section-padding wow fadeIn delay-05s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-sec text-center">
						<h2>Want To <span class="deco">Hire</span> Me?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<footer class="footer-2 text-center-xs bg--white">
		<div class="container">
			<!--end row-->
			<div class="row">
				<div class="col-md-6">
					<div class="footer">
						© Copyright Laura Theme. All Rights Reserved
						<div class="credits">
							<!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Laura
              -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-right">
					<ul class="social-list">
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-vimeo"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>

			</div>
			<!--end row-->
		</div>
	</footer>
	<script src="/ui-fcs/js/jquery.min.js"></script>
	<script src="/ui-fcs/js/jquery.easing.min.js"></script>
	<script src="/ui-fcs/js/bootstrap.min.js"></script>

	<script src="/ui-fcs/js/wow.js"></script>

	<script src="/ui-fcs/contactform/contactform.js"></script>

</body>

</html>