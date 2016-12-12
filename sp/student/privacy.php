<!DOCTYPE html>
<?php 
	include('db.php');
?>
<html>
<head>
    <title>Techno Trendz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/styles.css" rel="stylesheet">
    

    <script src="../js/jquery-1.10.2.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/responsive-slider.js"></script>


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
                    <a class="navbar-brand animate pad0" href="home.php"><img src="../images/logo.jpg" height="50px"></a>
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
                                          <h1 align="center">Privacy Policy</h1></a></li>
					</ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
					
					
					
						 <div class="tab-pane fade active in" id="tab1default">
						  <img align="center" src="../images/logo.jpg">
						  
						 <h3 align="center">We value the trust you place in us</h3>  <br />
						  
						 Please read the following statement to learn about our information gathering and dissemination practices.<br />
						 By visiting this website you agree to bound by the terms and conditions of this privacy policy.
						 By mere use of the website, you expressly consent to our use and disclosure of your personal information in accordance with this privacy policy.
						 This privacy policy is incorporated onto 
						 and subject to the terms of use.<br />
						 <br />
						  <h4 align="pull left-side">1.Collection of Personally Identifiable Information and other Information.</h4> <br />
						 
                        When you use our Website, we collect and store your personal information which is provided by you from time to time. 
						Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. 
						This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. 
						

                        In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. 
						Once you give us your personal information, you are not anonymous to us. 
						Where possible, we indicate which fields are required and which fields are optional.
						You always have the option to not provide information by choosing not to use a particular service or feature on the Website. 
						
                        If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website,
						we may collect such information into a file specific to you.

                       We collect personally identifiable information (email address, name, phone number,  etc.) from you when you set up a free account with us. <br />
					   
 


 <br />
 <h4 align="pull left-side">2.Sharing of personal information</h4><br />

We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court
orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.<br />




<br />
<h4 align="pull left-side">3.Security Precautions</h4> <br />
Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. 
Whenever you change or access your account information, we offer the use of a secure server.
Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.<br />

<br />
 <h4 align="pull left-side">4.Your Consent</h4><br />
By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, 
including but not limited to Your consent for sharing your information as per this privacy policy.
If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.<br />

<br />
<h4 align="pull left-side">5.Questions?</h4> <br />
Please contact us regarding any questions regarding this statement.<br />

						 
					
						 
                

                                          
										 
								
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
<script src="../js/responsive-slider.js"></script>

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
                        <a href="../student/home.php" title="Techno Trendz" target="_blank">Techno Trendz</a></span>
                </div>
                <div class="pull-right martop15">
                    <a href="../student/about.php" title="About Us" target="_blank">About Us</a>
                    <span class="separator"></span>
                    <a href="../student/support.php" title="Support" target="_blank">Contact</a>
                    <span class="separator"></span>
                    <a href="../student/faq.php" title="FAQ" target="_blank">FAQ</a>
                    <span class="separator"></span>
                    <a href="../student/privacy.php" title="Privacy Policy" target="_blank">Privacy Policy</a>
                </div>

            </div>
            

        </div>
    </div>
</div>


</body>
</html>