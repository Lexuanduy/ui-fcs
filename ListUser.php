<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List user</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- =======================================================
    Theme Name: Laura
    Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

    <style>
        .avatar img {
            border-radius: 5px;
            width: 50px;
            margin-right: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .name {
            font-size: 15px;
            font-weight: 500;
            color: #333;
        }
        #myGrid {
            text-align:center;
            
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
                                <li class="active"><a href="/Userinformation/home.php">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="/Userinformation/ListUser.php">Users</a></li>
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
    $servername = "localhost:3306";
    $database = "facebook";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function mysqli_select($conn, $query)
    {
        $rows = array();
        $result = mysqli_query($conn, $query);

        // If query failed, return `false`
        if ($result === false) {
            return false;
        }

        // If query was successful, retrieve all the rows into an array
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    $rows = mysqli_select($conn, "SELECT uid, phone FROM experiment limit 20");
    if ($rows === false) {
        $error = db_error();
    }

    mysqli_close($conn);
    ?>
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <h2 class="title text-center">List <span class="deco">User</span></h2>
                </div>
                <div class="col-md-12">
                    <div id="myGrid" class="grid-padding">
                        <?php foreach ($rows as $value) : ?>
                            <div class="col-md-3 col-sm-3 padding-right-zero">
                                <div class="avartar">
                                        <img src="https://graph.facebook.com/<?php echo $value['uid']; ?>/picture" width="100" alt="">
                                </div>
                                <div class="info">
                                        <span class="name">
                                            <a href=/UserInformation/profile.php?phone=<?php echo $value['phone']; ?>><?php echo $value['phone']; ?></a>
                                        </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <h2 class="title text-center">See What Our <span class="deco">Client</span> Are Saying ?</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO, Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO, Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO, Company Inc.</span> </div>
            </div>
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

<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/wow.js"></script>

  <script src="contactform/contactform.js"></script>



</body>

</html>