<!DOCTYPE html>
<?php
include ('db.php');
require('../securimage/securimage.php');
$securimage = new Securimage(); 
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
	<script src="../js/password-validation.js"></script>
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

    <div class="container content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 well well-sm">
                <div class="form-wrap">
                    <legend><i class="glyphicon glyphicon-globe"></i> Sign up!</legend>
                    <form action="#" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="firstName" placeholder="First Name" type="text"  title="No Special Characters and numbers"
                                       required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="lastName" placeholder="Last Name" type="text" required title="No Special Characters and numbers"/>
                            </div>
                        </div>
                        <input class="form-control" name="yourEmail" placeholder="Your Email" type="email" required/>
                        <input class="form-control" name="password" placeholder="New Password" id="password1" type="password" required />
						<div class="row">
							<div class="col-sm-6">
								<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
								<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
							</div>
							<div class="col-sm-6">
								<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
								<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
							</div>
					    </div>
                        <input class="form-control" name="confirmPassword" placeholder="Re-enter Password"  id="password2" type="password" required />
					
						<div class="row">
							<div class="col-sm-12">
								<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
							</div>
						</div>
					
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                            Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                            Female
                        </label>
						<br />
						<label class="radio-inline">
                            <input type="radio" name="userType" id="inlineCheckbox1" value="handler" />
                            Event Handler
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="userType" id="inlineCheckbox2" value="participant" />
                            Event Participant
                        </label>
						 <img id="captcha" src="../securimage/securimage_show.php" alt="CAPTCHA Image" width="200px" height="50px" />
        
<a href="#" onclick="document.getElementById('captcha').src = '../securimage/securimage_show.php?' + Math.random(); return false">
<br/>Refresh CAPTCHA</a><br/>
<input type="text" class="form-control" name="captcha_code" " maxlength="6"  placeholder="Enter above CAPTCHA"/> 
                    
                        
                        <button class="btn btn-lg btn-primary btn-block" name="btnSignUp" type="submit">
                            Sign up</button>
                    </form>
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

</body>
</html>

<?php
if( $_POST)
{
	if ($securimage->check($_POST['captcha_code']) == false) 
	{
  
         echo "<br/>The security code entered was incorrect.<br />";

		 echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";

		exit;

	}

if(isset($_REQUEST['btnSignUp']))
{	

		
	
    $firstName=trim($_REQUEST['firstName']);
    $lastName=trim($_REQUEST['lastName']);
	//$firstName = trim($firstName);
    $email=trim($_REQUEST['yourEmail']);
    $password=trim($_REQUEST['password']);
    $confirmPassword = trim($_REQUEST['confirmPassword']);
	$typeOfGender = $_REQUEST['sex'];
	$typeOfHandler=$_REQUEST['userType'];
	
	
	
	$sqlEmail = "Select count(*) as emailValue from registration where email='$email'";
	
	$sqlEmails=mysql_query($sqlEmail);
	$sqlEmailResult=mysql_fetch_assoc($sqlEmails);
	$count =$sqlEmailResult['emailValue'];

	
	$pattern = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/';
	
	if(preg_match($pattern, $password))
	{
	

			if($count == 1)
			{	
				?>
					 <script type="text/javascript">
						 alert("Email id is already registered");
						 </script>
					<?php
					
			}
			
			else
			{ 			
					if($password==$confirmPassword)
					{
						$resetPassword = 'NULL';
						$sql="Insert into registration values('$firstName','$lastName','$email','$password','$typeOfGender','$typeOfHandler','$resetPassword')";
						mysql_query($sql);
						
						
						
							//$rws=mysql_fetch_assoc($result);
							$_SESSION['firstName']=$_REQUEST['firstName'];
							$_SESSION['email']=$rws['email'];
							//$_SESSION['password']=$rws['password'];
							echo "".$_SESSION['firstName']; 
							
							
							 $mailbody = "You are successfully registered";
							
							// sending mail
							
							smtpmailer($email,$firstName,   'technotrendz001@gmail.com','TechnoTrendz','Registration Succesfully' ,$mailbody);
							header('Location:welcomeUser.php'); 
					}
		
					else
					{	?>
						 <script type="text/javascript">
							 alert("Please check your password");
							 </script>
						<?php 
					}
			}
		
	}
		
		
		
	} else {
		
		?>
					 <script type="text/javascript">
						 alert("Please have all characteristics");
						 </script>
					<?php 
		
		
	}
	
		 
	
					
				
			
		
	
	
		
	
	
	


}


?>