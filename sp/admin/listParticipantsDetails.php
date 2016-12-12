<!DOCTYPE html>
<?php
include ('db.php');
include('mail.php');
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

                <?php

				if(!isset($_SESSION['firstName'])) 
				{?>
					 <script type="text/javascript">
						 alert("Please login first!");
						 </script>
					<?php
					header('Location:adminLogin.php');
				} 
				else
				{?> 
								<ul class="nav navbar-nav navbar-right">
									<li class=><a  class="animate">Welcome &nbsp <?php
								  echo "".$_SESSION['firstName'];
								  ?></a></li>
									<li id="nav-login-btn" class="pull-right"><a href="logout.php" class="animate">Log Out</a></li>
								
								<?php
								if($_SESSION['typeOfHandler'] == "adminRole")
								{?>
									<li id="nav-login-btn" class=""><a href="../admin/eventPage.php" class="animate">Admin Home Page</a></li>
								<?php
								}
								
				} 					
				?>
				</ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="page-header">
                       <table><tr>
					   <td>
					   <h1><?php echo $_REQUEST["eventname"];?>
					   </td>
					   <td> &nbsp </td><td> &nbsp </td><td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td><td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td><td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td> &nbsp </td>
					   <td>
					   <?php
								$eventNameId = $_REQUEST["eventid"];
								$sql="select * from acceptedtechnicalevents where eventNameId='$eventNameId'";
            $result=mysql_query($sql);
			$rws=mysql_fetch_assoc($result);
			$eventName = $rws['eventName'];
			$address = $rws['address'];
			$prizeDetails = $rws['prizeDetails'];
			$dateOfEvent = $rws['dateOfEvent'];
			$synopsis = $rws['synopsis'];
			$email = $rws['handler_email'];
			//echo $email;
			
			//Details of registered participants
			$contactNo = $rws['contactNo'];
			$sqlregisteredparticipants = "select * from registeredparticipants where eventNameId = '$eventNameId'";
			$sqlregisteredparticipantsResult = mysql_query($sqlregisteredparticipants);
			
			// counting No of participants
			$sqlValue = "Select count(*) as noOfParticipantsValue from registeredparticipants where eventNameId='$eventNameId'";
	
			$sqlValues=mysql_query($sqlValue);
			//echo $sqlValues;
			$sqlValuesResult=mysql_fetch_assoc($sqlValues);
			$count =$sqlValuesResult['noOfParticipantsValue'];
			
          // if($rws['email']==$email && $rws['password']==$password)
							
			?>
					   
					   <span> 	<ul class="nav navbar-nav navbar-right">
                    <li id="nav-accept-btn" class="pull-right">
					<form method = "POST" action="#">
								<button class="btn btn-lg btn-primary btn-block"   name="btnSendDetails" type="submit">
								Send Details to Handler </button>
					</form>
					</li>
					<li class="pull-right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
											&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
											&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
					<li class="pull-right">
							<h3>No. of Participants Registered:<?php  echo $count ?></h3> </li>
								
				    
					
					
                    </ul></span>
					   </h1>
					   </td>
					   </tr>
					   </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-md-8">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
										<li class="active"><a href="#tab4default" data-toggle="tab">Partcipants</a></li>
                                        <li ><a href="#tab1default" data-toggle="tab">Synopsis</a></li>
                                        <li><a href="#tab2default" data-toggle="tab">Address</a></li>
										<li><a href="#tab3default" data-toggle="tab">Contact</a></li>
                                        
                                        

                                    </ul>
                                </div>
								
								
								
								
								
								
								
								
                                <div class="panel-body">
                                    <div class="tab-content">
										
										 <div class="tab-pane fade active in" id="tab4default">

											<!-- fetching data from registeredparticipants -->
											<?php 
												$i = 1;
												while($rwssqlregisteredparticipants = mysql_fetch_assoc($sqlregisteredparticipantsResult))
												{	?>
													<table>
													
													<tr>
														<td>
														<?php 
													echo "$i."?>
														</td>
													
													<td>
													<?php
													
													echo $rwssqlregisteredparticipants['firstName'];
													?>
													&nbsp
													
													
													
													</td>
													&nbsp
													<td>
													<?php
													echo $rwssqlregisteredparticipants['lastName'];
												?>
												</td>
												</td>
												</table>
												
												<?php
												$i++;
												}
											?>

		




										 </div>

                                        <div class="tab-pane fade" id="tab1default">
                                             <?php echo $synopsis; ?>
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                            <?php echo $address; ?>
                                        </div>
                                        <div class="tab-pane fade " id="tab3default">
                                            Email-Id : <?php echo $email; ?>
											 <br>
											 Contact-No : <?php echo $contactNo; ?>
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
if(isset($_POST['btnSendDetails']))
{ 	

	$sqlregisteredparticipants = "select * from registeredparticipants where eventNameId = '$eventNameId'";
			$sqlregisteredparticipantsResult = mysql_query($sqlregisteredparticipants);
	$mailBody = "<b>No. of Participants Registered:".$count ." </b>
	
	<center> Participants <br /> 
				<table border =\"1px\"><tr>
						<td>
						<b> First Name </b>
						</td>
						<td>
						<b> Last Name </b>
						</td>
						<td>
						<b> Email-Id </b>
						</td>
					</tr>";
	while($rwssqlregisteredparticipants = mysql_fetch_assoc($sqlregisteredparticipantsResult))
	{
		$mailBody = $mailBody .  "
					<tr>
						<td>
						
						".$rwssqlregisteredparticipants['firstName']."
						</td>
						<td>
							". $rwssqlregisteredparticipants['lastName']."
						</td>
						<td>
							". $rwssqlregisteredparticipants['email']."
						</td>
					</tr>";
					
					echo $rwssqlregisteredparticipants['firstName'];
	}
	$mailBody = $mailBody . "</table></center>";
	//$mailbody = "Your event is successfully registered";
							$firstName = "Sohail";
							// sending mail
							
							smtpmailer($email,$firstName,   'technotrendz001@gmail.com','TechnoTrendz','Registration Succesfully' ,$mailBody);
							header('Location:../admin/everyEventDetails.php'); 
}
?>

</body>
</html>