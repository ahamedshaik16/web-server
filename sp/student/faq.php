<!DOCTYPE html>
<?php
	include ('db.php');
?>
<html>
<head>
    <title>Techno Trendz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/responsive-slider-parallax.css" rel="stylesheet">

    <script src="../js/jquery-1.10.2.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    


</head>
<body>
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
									<li class="pull-right"><a href="../student/register.php" class="animate">Sign Up</a></li>
									<li id="nav-login-btn" class=""><a href="../student/login.php" class="animate">Login</a></li>
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
    <div class="content">

    </div>
	<br>
	<br>
	<br>
    <div class="col-xs-2"></div>
        <div class="col-md-8">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
						
                        <li class="active"><a href="#tab1default" data-toggle="tab">
                                          <h1 align="center">FAQ</h1></a></li>
					</ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
					
					
					
						 <div class="tab-pane fade active in" id="tab1default">
						  <img align="center" src="../images/logo.jpg">
						  <h2 align="center">frequently asked questions</h2> <br /> 
						  
						 1.What are the dates for the events in 2015?<br />
						 
                          Thursday 23 april through to saturday 25 april 2015.<br /> 
						  <br />
						  
                         

                         2.Where are the events being held?<br />
						 
						 
						 check the respective event venue on the event details list.<br />
						 <br />
                         

                         3.how do i register for the events?<br />
						 Looking for an ultimate experience? you just have to register in and get your profile verified,then you can register in by checking the oppurtunities available to you.
                         For any other details mail us to technotrendz001@gmail.com.<br />
					
					     <br />
						 4.I need to withdraw my registration , what do i do?<br />
						 withdrawls of registered events is not allowed.<br/>
						 <br />
						 5.where can i check my registered events?<br />
						 list of your registered events are diplayed on your profile.
						 <br />
					
					
						 
					     

                

                                          
										 
								
						<div class="tab-pane fade" id="tab1default">
						
							
							
						
								   
								   
								   
								   
                        </div>
						
						
						
						
                       
                        
                </div>
			</div>
        </div>
	</div>
    <div class="col-xs-2"></div>
</div>



            </div>
            </footer>

        </div>
    </div>
</div>


	
<script src="../js/jquery-1.10.2.min.js"></script>


<script src="../js/bootstrap.min.js"></script>
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
<?
if(isset($_REQUEST['btn-participant']))
{
header('Location:participantfaq.html');
}
else if(isset($_REQUEST['btn-event handler']))
				  {
					header('Location:eventhandlerfaq.html');

</body>
</html>