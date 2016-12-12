<!DOCTYPE html>

<?php
//session_start();
include('db.php');
if(!isset($_SESSION['firstName']))
    header('Location:login.php');

  
?>

<html lang="en">
<head>
    <title>Techno Trendz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">

	
	
		

    <!-- Respomsive slider -->
    <link href="../css/responsive-slider-parallax.css" rel="stylesheet">
</head>
<body background-image: url("../images/slide-4.jpg");>

<div id="wrap">

    <nav class="navbar navbar-fixed-top animate" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="animbrand">
                    <a class="navbar-brand animate pad0" href="home.html"><img src="../images/logo.jpg" height="50px"></a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-left">
                    <li class="">
                        <a href="#" class="dropdown-toggle animate " data-toggle="dropdown" aria-expanded="false">
                            Events <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class=""><a href="../student/technical.php" class="animate">Technical <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
                            
                        </ul>
                    </li>
                    <li class=""><a href="../student/gallery.php" class="animate">Gallery</a></li>
                    <li class=""><a href="../student/video.php" class="animate">Videos</a></li>
                   

                </ul>
				
				<!-- creating Session here -->
				<?php

				if(!isset($_SESSION['firstName'])) 
				{?>
								<ul class="nav navbar-nav navbar-right">
									<li class="pull-right"><a href="register.php" class="animate">Sign Up</a></li>
									<li id="nav-login-btn" class=""><a href="login.php" class="animate">Login</a></li>
								</ul>
								<?php 
				} 
				else
				{?> 
								<ul class="nav navbar-nav navbar-right">
									<li class=><a  class="animate">Welcome &nbsp <?php
								  echo "".$_SESSION['firstName'];
								  ?></a></li>
									<li id="nav-login-btn" class="pull-right"><a href="logout.php" class="animate">Log Out</a></li>
								
								<?php
								if($_SESSION['typeOfHandler'] == "handler")
								{?>
									<li id="nav-login-btn" class=""><a href="../handler/regsiteredEvents.php" class="animate">My Home Page</a></li>
								<?php
								}
								else if($_SESSION['typeOfHandler'] == "adminRole")
								{?>
									<li id="nav-login-btn" class=""><a href="../admin/eventPage.php" class="animate">Admin Home Page</a></li>
								<?php
								}
								else if($_SESSION['typeOfHandler'] == "participant")
								{?>
									 <li class="">
										<a href="#" class="dropdown-toggle animate " data-toggle="dropdown" aria-expanded="false">
												My Profile <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class=""><a href="../student/userRegisteredEvents.php" class="animate">Registered Events <span class="pull-right"></span></a></li>
											
										</ul>
									</li>
									
								<?php
									
								}
								
									
								
				} 					
				?>
				</ul>
            </div>
        </div>


    </nav>
	
	
    </div> 
    <!-- end container -->
    <div id="push"></div>
</div>
<div id="footer">
    <div class="container">
        <div class="col-sm-12 martop15 marbottom15">
            <div class="container">
                <div class="pull-left martop15">
                    <span class="pull-right">© 2015
                        <a href="../student/home.html" title="Techno Trendz" target="_blank">Techno Trendz</a></span>
                </div>
                <div class="pull-right martop15">
                    <a href="../student/about.html" title="About Us" target="_blank">About Us</a>
                    <span class="separator"></span>
                    <a href="../student/support.html" title="Support" target="_blank">Support</a>
                    <span class="separator"></span>
                    <a href="../student/faq.html" title="FAQ" target="_blank">FAQ</a>
                    <span class="separator"></span>
                    <a href="../student/privacy.html" title="Privacy Policy" target="_blank">Privacy Policy</a>
                </div>

            </div>
            </footer>

        </div>
    </div>
</div>


<script src="../js/jquery-1.10.2.min.js"></script>


<script src="../js/bootstrap.min.js"></script>
</body>
</html>