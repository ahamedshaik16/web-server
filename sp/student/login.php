<!DOCTYPE html>

<?php
include ('db.php');
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
                            <li class=""><a href="technical.html" class="animate">Technical <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
                            <li class=""><a href="workshop.html" class="animate">Workshop <span class="pull-right glyphicon glyphicon-align-justify"></span></a></li>
                        </ul>
                    </li>
                    <li class=""><a href="gallery.html" class="animate">Gallery</a></li>
                    <li class=""><a href="videos.html" class="animate">Videos</a></li>
                    <li class=""><a href="guestlec.html" class="animate">Guest Lecturers</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="register.php" class="animate">Sign Up</a></li>
                    <li id="nav-login-btn" class=""><a href="login.php" class="animate">Login</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <div id="login" class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Log in with your email account</h1>
                        <form role="form"  id="login-form" autocomplete="off"  method = "post" action = "">
                            <div class="form-group">
                                <label for="email" class="sr-only-focusable">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="key" class="sr-only-focusable">Password</label>
                                <input type="password" name="password" id="key" class="form-control" placeholder="Password" required>
                            </div>
							
                            <input type="submit" id="btn-login" name="btnLogin" class="btn btn-primary btn-lg btn-block" value="Log in">
                        </form>
                        <a href="ForgotPage1.php">Forgot your password?</a>
                        <hr>
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
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
	
	if(isset($_REQUEST['btnLogin']))
	{ echo "kkk";
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
		$sql="select * from registration where email='$email' and password='$password'";
            $result=mysql_query($sql);
			$rws=mysql_fetch_assoc($result);
           if($rws['email']==$email && $rws['password']==$password)
           {	
					 $_SESSION['firstName']=$rws['firstName'];
                   $_SESSION['email']=$rws['email'];
                   $_SESSION['password']=$rws['password'];
				   $_SESSION['typeOfHandler'] = $rws['typeOfHandler'];
				   echo "".$_SESSION['firstName']; 
				   
				  if($rws['typeOfHandler'] == "participant")
				  {
					header('Location:welcomeUser.php');
				  }
				  else if($rws['typeOfHandler'] == "handler")
				  {
					header('Location:../handler/regsiteredEvents.php');
				  }
				  
				
		   
				
				
			}
			else
			{ 	
				
				
				
					?>
					<script type="text/javascript">
						alert("Please check your password");
					</script>
				<?php
			}
			
	}
	
?>

</body>
</html>

