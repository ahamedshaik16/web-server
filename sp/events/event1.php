<!DOCTYPE html>
	
<?php
include ('db.php');
include('mail.php');
$eventNameId = $_REQUEST['eventid'];
$sql="select * from acceptedtechnicalevents where eventNameId = '$eventNameId'";
            $result=mysql_query($sql);
			$rws=mysql_fetch_assoc($result);
			$eventName = $rws['eventName'];
			$synopsis = $rws['synopsis'];
			$rules = $rws['rulesFile'];
			$address = $rws['address'];
			$dateOfEvent = $rws['dateOfEvent'];
			$prizeDetails = $rws['prizeDetails'];
			$contactNo = $rws['contactNo'];

?>

<html>
<head>
    <title>Techno Trendz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/styles.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/html5.js"></script>
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
                    <a class="navbar-brand animate pad0" href="../student/home.php"><img src="../images/logo.jpg" height="50px"></a>
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
	<br>
	<br>
	<br>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="page-header">
                        <h1><?php echo $eventName  ?><span class="pull-right label label-default">:)</span></h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-md-8">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1default" data-toggle="tab">Synopsis</a></li>
                                        <li><a href="#tab2default" data-toggle="tab">Rules</a></li>
										<li><a href="#tab7default" data-toggle="tab">Date Of Event</a></li>
										<li><a href="#tab3default" data-toggle="tab">Prizes</a></li>
										<li><a href="#tab4default" data-toggle="tab">Address</a></li>
                                        <li><a href="#tab5default" data-toggle="tab">Register</a></li>
                                        <li ><a href="#tab6default" data-toggle="tab">Contact</a></li>

                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1default">
                                           <?php echo $synopsis; ?>
										   <?php //  echo $rws['synopsis'];   Displaying data without other varaible. ?> 
											
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                           <?php echo $rules; ?>
										   
										    <a href = "../handler/documents/<?php echo $_REQUEST["eventid"];?>/rules.pdf" target = "_blank">Download Rules pdf</a>
										   
                                        </div>
										
										<div class="tab-pane fade" id="tab7default">
											YYYY-MM-DD &nbsp &nbsp &nbsp<?php echo $dateOfEvent; ?>
                                        </div>
										
										<div class="tab-pane fade" id="tab3default">
											<?php echo $prizeDetails; ?>
                                        </div>
										<div class="tab-pane fade" id="tab4default">
											<?php echo $address; ?>
                                        </div>
										
										
                                        <div class="tab-pane fade" id="tab5default">
										
											<div class="form-wrap">
												<legend><i class="glyphicon glyphicon-globe"></i> Registration!</legend>
													<form action="#" method="post" class="form" role="form">
														
														
														<input class="form-control" name="registerEmail" placeholder="Email" type="email"
																	   required  />
														<input class="form-control" name="registerContactNo" placeholder="Contact No" type="text" required/>
														

														
														<br />
														<br />
														<button class="btn btn-lg btn-primary btn-block"  name = "btnRegisteredEvents" value = "btn-registeredEvents" type="submit">
															Submit</button>
													</form>
											</div>

                                           
											
											
                                        </div>
										
										
										
										
                                        <div class="tab-pane fade" id="tab6default">
											<?php echo $contactNo; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2"></div>

                    </div>
                </div>
            </div>
        </div>

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



<?php 
if(isset($_POST['btnRegisteredEvents']))
{
	/*if(!isset($_SESSION['firstName']))
	{	
		header('Location:../student/login.php');
	}
	else
	{*/
		if($_SESSION['typeOfHandler'] == "participant")
		{
			$registerEmail = $_REQUEST['registerEmail'];
			$registerContactNo = $_REQUEST['registerContactNo'];
			
			
				$registrationTable = "select * from registration where email = '$registerEmail'";
				$sqlRegistration=mysql_query($registrationTable);
				$sqlRegistrationResult=mysql_fetch_assoc($sqlRegistration);
				
				$firstName = $sqlRegistrationResult['firstName'];
				$lastName = $sqlRegistrationResult['lastName'];
				$email = $sqlRegistrationResult['email'];
				$typeOfHandler = $sqlRegistrationResult['typeOfHandler'];
				
			if( $_SESSION['email'] == $registerEmail)
			{	
				$registeredParticipants = "select * from registeredParticipants where eventNameId = '$eventNameId' and email = '$registerEmail'";
				$sqlRegisteredParticipants = mysql_query($registeredParticipants);
				$sqlRegisteredParticipantsResult = mysql_fetch_assoc($sqlRegisteredParticipants);
				
				
				
				
				if($registerEmail === $email)
				{													
					if($typeOfHandler === "participant")
					{	
						if($eventNameId != $sqlRegisteredParticipantsResult['eventNameId'] && $email != $sqlRegisteredParticipantsResult['email'])
						{
							$sqlResult = "Insert into registeredParticipants values('$eventNameId','$eventName','$firstName','$lastName','$registerEmail',$registerContactNo)";
							mysql_query($sqlResult);
							 $mailbody = "You are successfully registered in $eventName event dated on $dateOfEvent";
										
										// sending mail
										
										smtpmailer($email,$firstName,   'technotrendz001@gmail.com','TechnoTrendz','Registration Succesfully' ,$mailbody);
							
							header('Location:../student/technical.php');
						}
						else
						{
							?>
										 <script type="text/javascript">
									 alert("You are already registered!");
									 </script>
					<?php 
						}
						
					}
					else
					{
						?>
										 <script type="text/javascript">
									 alert("You are not a participant.Please Register");
									 </script>
					<?php 
					
						header('Location:../student/register.php'); 
					}
				}
				else
				{ ?>
						 <script type="text/javascript">
							alert("You are not registered!");
						</script>
					<?php 
						header('Location:../student/register.php'); 

				}
			}
			else
			{
				?>
						<script type="text/javascript">
								 alert("Login mail and registered mail id should be same!");
						 </script>
					<?php 
						
			}
		}
		else
		{
			?>
									 <script type="text/javascript">
								 alert("Only participants can Register!");
								 </script>
				<?php 
		}
	
		


}

?>
</body>
</html>