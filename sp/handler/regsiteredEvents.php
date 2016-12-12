<!DOCTYPE html>
<?php
include ('db.php');
if(!isset($_SESSION['firstName']))
    header('Location:../student/login.php');
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
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/html5.js"></script>



  
</head>
<body><div id="wrap">

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
    <div class="col-xs-2"></div>
        <div class="col-md-8">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
						<li ><a href="#tab1default" data-toggle="tab">Regsiter New Events</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Already Registered Events</a></li>
                        <li class="active"><a href="#tab3default" data-toggle="tab">Guidelines to register</a></li>
					</ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
					
					
					
						 <div class="tab-pane fade active in" id="tab3default">
                                    1.Our Site helps you to conduct your events through us.<br>
									2.You should upload a pdf,saying that you are a authorized event conductor else your request will be rejected.<br>
									3.Your rules and regulations should be uploaded in the form of pdf document.<br>
									4.Your event synopsis should me mentioned.<br>
									5.Your event Image may also be uploaded if needed.<br>
									6.Video related to your event may be uploaded if needed.<br>
									7.If the authorized document is not genuine then your request may be rejected.<br><br>
											<b>Updation Guidelines:</b><br>
									1.If the event is already registered then you can change the details.<br>
									2.The Event Id should be entered which is sent to your mail related to your event.<br>
									3.Event Name should be same as you have registered.<br>
									4.The details which you may change include Date of Event,Prize Details,Venue.<br>
									5.The details which you don't want to update may left blank.<br>
								
                        </div>
					
					
                        <div class="tab-pane fade" id="tab1default">
						
							
							<div class="form-wrap">
										<legend><i class="glyphicon glyphicon-globe"></i> New Event</legend>
										<form action="#" method="post" class="form" role="form" enctype = "multipart/form-data">
											
											<input class="form-control" name="eventName" placeholder="Event Name" type="text" 
														   required autofocus />
											<input class="form-control" name="address" placeholder="Address of Event Conducted" type="textarea" required/>
										 Rules in pdf format<input class="form-control" name="fileUpload[0]" type="file" required accept="application/pdf"/> 
											<input class="form-control" name="prizeDetails" placeholder="Prize Details"  type="text"  required	/>
											<input class="form-control" name="dateOfEvent"  type="date" required/>
											<input class="form-control" name="handler_email" placeholder="mail@example.com" type="email" required/>
											<textarea class="form-control" name="synopsis" rows = "5" placeholder="Synopsis of Event" required></textarea>
											
											
											Authorized authority Document
											<input class="form-control" name="fileUpload[1]" type="file" required accept="application/pdf"/>
											Image of the event if needed
											<input class="form-control" name="fileUpload[2]" type="file" accept="image/jpeg"/>  
											Upload video if needed
											<input class="form-control" name="fileUpload[3]" type="file" accept="video/mp4"/> 
										
											<input class="form-control" name="contactNo" placeholder="Contact No exactly 10 digis" type="text" required/>
											
											<br />
											<br />
											<button class="btn btn-lg btn-primary btn-block"  name = "btn-newRegisteredEvents" value = "btn-newRegisteredEvents" type="submit">
												Submit</button>
										</form>
							</div>
						
								  
								  
								  
                        </div>
						
						
						
						
                        <div class="tab-pane fade" id="tab2default">
						
						
						
        
								<div class="form-wrap">
										<legend><i class="glyphicon glyphicon-globe"></i> future updates!</legend>
										<form action="#" method="post" class="form" role="form">
											
											<input class="form-control" name="eventNameIdUpdate" placeholder="Event Id from mail" type = "text" required autofocus/>
											<input class="form-control" name="eventNameUpdate" placeholder="Event Name" type = "text" required/>
											<input class="form-control" name="dateOfEventUpdate" placeholder="Event Date" type="date" />
											<input class="form-control" name="prizeDetailsUpdate" placeholder="Prizes" type="text" />
											<input class="form-control" name="venue" placeholder="Venue" type="text" />
											

											
											<br />
											<br />
											<button class="btn btn-lg btn-primary btn-block"  name = "btn-updateRegisteredEvents" value = "btn-registeredEvents" type="submit">
												Submit</button>
										</form>
								</div>

						
								   
								   
								   
								   
                        </div>
						
						
						
						
                       
                        
                </div>
			</div>
        </div>
	</div>
    <div class="col-xs-2"></div>
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
	
<script src="../js/jquery-1.10.2.min.js"></script>


<script src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_REQUEST['btn-newRegisteredEvents']))
{	
	
    $eventName=trim($_REQUEST['eventName']);
    $address=trim($_REQUEST['address']);
	//$rules = 
    $prizeDetails=trim($_REQUEST['prizeDetails']);
    $dateOfEvent=trim($_REQUEST['dateOfEvent']);
    $handler_email = trim($_REQUEST['handler_email']);
	$synopsis = trim($_REQUEST['synopsis']);
	$contactNo=trim($_REQUEST['contactNo']);
	$accept= 'n';
	
	/* contact NO validation */
	//if((preg_match("/[^0-9]/", '', $contactNo)) && strlen($contactNo) == 10)
	
	if((ctype_digit($contactNo)) && strlen($contactNo) == 10)

	//ctype_digit() and strlen() 
	
		{

	
		$sql="Insert into newregisteredevents(eventName,address,prizeDetails,dateOfEvent,handler_email,synopsis,accept,contactNo) 
				values('".$eventName."','".$address."','".$prizeDetails."','".$dateOfEvent."','".$handler_email."','".$synopsis."','".$accept."',".$contactNo.")";
		mysql_query($sql);
		$sql1 = "SELECT eventNameId from newregisteredevents ORDER BY eventNameId DESC LIMIT 1";
		$result = mysql_query($sql1);
		$row = mysql_fetch_array($result,MYSQL_NUM);
		$eventNameId = $row[0];
		//echo $eventNameId;
		
		
		
		$target_dir = "documents/".$eventNameId."/";
		mkdir($target_dir,0700);
		$target_file = $target_dir."rules.pdf";
		$uploadOk = 1;
		
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][0],$target_file)) 
		{
			?>
			<br>
			<?php
				//echo "Rules File uploaded succesfully";
		}
		else
		{
			?>
			<br>
			<?php
				echo "Sorry file not uploaded";
		}
		$target_file = $target_dir."authorizedDocument.pdf";
		$uploadOk = 1;
		
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][1],$target_file)) 
		{?>
			<br>
			<?php
				//echo "Authorized Document File uploaded succesfully";
		}
		else
		{
			?>
			<br>
			<?php
				echo "Sorry document file not uploaded";
		}
		$target_file = $target_dir."image.jpeg";
		$uploadOk = 1;
		
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][2],$target_file)) 
		{
			?>
			<br>
			<?php
				//echo "Image File uploaded succesfully";
				
		}
		else
		{
			?>
			<br>
			<?php
				echo "Sorry image file not uploaded";
				
		}
		$target_file = $target_dir."video.mp4";
		$uploadOk = 1;
		
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][3],$target_file)) 
		{
			?>
			<br>
			<?php
				//echo "Video File uploaded succesfully";
				
		}
		else
		{
			?>
			<br>
			<?php
				echo "Sorry video file not uploaded";
				
		}
		
		
		
				

		}
		else
		{
				?>
					 <script type="text/javascript">
						 alert("Please enter valid phone number of 10 digits");
						 </script>
					<?php 
		}
		
		
			//$rws=mysql_fetch_assoc($result);
			//$_SESSION['firstName']=$_REQUEST['firstName'];
            //$_SESSION['email']=$rws['email'];
            //$_SESSION['password']=$rws['password'];
			//echo "".$_SESSION['firstName']; 
			//header('Location:regsiteredEvents.php');
    
}


if(isset($_REQUEST['btn-updateRegisteredEvents']))
{	

	$eventNameIdUpdate=trim($_REQUEST['eventNameIdUpdate']);
	$eventNameUpdate=trim($_REQUEST['eventNameUpdate']);
	//feteching data from acceptedtechnicalevents

	$sql = "Select *  from acceptedtechnicalevents where eventNameId ='$eventNameIdUpdate'";
	
	$sqlacceptedtechnicalevents=mysql_query($sql);
	$sqlacceptedtechnicaleventsResult=mysql_fetch_assoc($sqlacceptedtechnicalevents);
	
	
	
			if(empty($_REQUEST['dateOfEventUpdate']))
			{
				$dateOfEventUpdate = $sqlacceptedtechnicaleventsResult['dateOfEvent'];
			}
			else
			{
				$dateOfEventUpdate=trim($_REQUEST['dateOfEventUpdate']);
			}
	
	
	
	
	
	if ( date("Y-m-d") < $dateOfEventUpdate)
	{
	
		/*
			if(empty($_REQUEST['dateOfEventUpdate']))
			{
				$dateOfEventUpdate = $sqlacceptedtechnicaleventsResult['dateOfEvent'];
			}
			else
			{
				$dateOfEventUpdate=trim($_REQUEST['dateOfEventUpdate']);
			}
			
		*/	
			if(empty($_REQUEST['prizeDetailsUpdate']))
			{
				$prizeDetailsUpdate = $sqlacceptedtechnicaleventsResult['prizeDetails'];
			}
			else
			{
				$prizeDetailsUpdate=trim($_REQUEST['prizeDetailsUpdate']);
			}
			
			
			if(empty($_REQUEST['venue']))
			{
				$venue = $sqlacceptedtechnicaleventsResult['address'];
			}
			else
			{
				$venue = trim($_REQUEST['venue']);
			}
			
			// Chechking 

			if($eventNameIdUpdate == $sqlacceptedtechnicaleventsResult['eventNameId'] )
			{		
				
				if($eventNameUpdate == $sqlacceptedtechnicaleventsResult['eventName'])
				{
					if($_SESSION['email'] == $sqlacceptedtechnicaleventsResult['handler_email'])
					{
				
							$sqlInsert="Insert into updatedEventDetails values('$eventNameIdUpdate','$eventNameUpdate','$dateOfEventUpdate','$prizeDetailsUpdate','$venue')";
							mysql_query($sqlInsert);
							// updating acceptedtechnicalevents
							$sql = "UPDATE acceptedtechnicalevents SET dateOfEvent = '$dateOfEventUpdate' , prizeDetails = '$prizeDetailsUpdate',address = '$venue' where eventNameId = '$eventNameIdUpdate'";
									mysql_query($sql);
					}
					else
					{
						?>
								 <script type="text/javascript">
								 alert("Registered and login mail id are different!");
								 </script>
					<?php
					}
				}
				else
				{
					?>
								 <script type="text/javascript">
								 alert("Please enter valid Event Name");
								 </script>
					<?php
				}
			}
			else
			{
				?>
								 <script type="text/javascript">
									 alert("Please enter valid Event Id");
									 </script>
				<?php
			
			}
	}
	else
	{
		?>
								 <script type="text/javascript">
									 alert("Please Do not enter old date");
									 </script>
				<?php
	}
}

?>