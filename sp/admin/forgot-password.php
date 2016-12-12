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
                            <li class=""><a href="technical.html" class="animate">Technical <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
                           
                        </ul>
                    </li>
                    <li class=""><a href="../student/gallery.php" class="animate">Gallery</a></li>
                    <li class=""><a href="../student/video.php" class="animate">Videos</a></li>
                    

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="../admin/adminRegistration.php" class="animate">Sign Up</a></li>
                    <li id="nav-login-btn" class=""><a href="../admin/adminLogin.php" class="animate">Login</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container content">
        <div class="row">
            <div class="col-sm-12">
                <h1>Change Password</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <p class="text-center">Use the form below to change your password. </p>
                <form method="post" id="passwordForm">
					<input type="text" class="input-lg form-control" name="token" id="token" placeholder="Enter Token From Mail" autofocus>
                    <input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
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
                    <input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12">
                            <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
                        </div>
                    </div>
                    <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" name = "btn-changePwd" data-loading-text="Changing Password..." value="Change Password">
                </form>
            </div><!--/col-sm-6-->
        </div><!--/row-->
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

<?php 

	if(isset($_REQUEST['btn-changePwd']))
	{
		$email = $_REQUEST['emailid'];
		$sql = "SELECT resetPassword from adminregistration where email = '$email'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		if($row[0] == $_REQUEST['token'])
		{
		
			$pattern = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/';
	
			if(preg_match($pattern, $_REQUEST['password1']))
			{
				if($_REQUEST['password1'] == $_REQUEST['password2'])
				{	$password1 = $_REQUEST['password1'];
					$sql = "UPDATE adminregistration SET password = '$password1' where email = '$email'";
					mysql_query($sql);
					header('Location:../admin/adminLogin.php');
				}
				else
				{
					?>
					 <script type="text/javascript">
						 alert("Both passwords does not match");
						 </script>
					<?php 
				}
			}
			else
			{
				?>
					 <script type="text/javascript">
						 alert("Please have all password characteristics");
						 </script>
					<?php 
			}
		}
		else
		{
		?>
					 <script type="text/javascript">
						 alert("Entered Token is wrong!");
						 </script>
					<?php 	
		}
		
		
	}

?>


</body>
</html>