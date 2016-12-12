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

                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="../student/register.php" class="animate">Sign Up</a></li>
                    <li id="nav-login-btn" class=""><a href="../student/login.php" class="animate">Login</a></li>
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
                            <div class="col-xs-12 col-sm-12 well well-sm"">
                                <input class="form-control" name="email" placeholder="Enter Your mail" type="email"
                                       required autofocus />
							</div>
							
								
								<button class="btn btn-lg btn-primary btn-block" name="btnPwdChange" type="submit">
                            Send pwd to mail</button>
								
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
		
		if(isset($_REQUEST['btnPwdChange']))
		{
			$gotEmail = $_REQUEST['email'];
			$sql="select email from registration where email = '$gotEmail'";
            $result=mysql_query($sql);
			//$rws=mysql_fetch_assoc($result);
			if(mysql_num_rows($result) > 0)
			{	$randomPassword = rand(1000000,9999999);
				$sql = "UPDATE registration SET resetPassword = '$randomPassword' where email = '$gotEmail'";
				mysql_query($sql);
				
			    $mailbody = "Your password token is <b>" .$randomPassword."<b> ." ;
				
				
				smtpmailer($gotEmail,$gotEmail,   'technotrendz001@gmail.com','TechnoTrendz', "Password Reset",$mailbody);
				header('Location:forgot-password.php?emailid='.$gotEmail);
			}
			else
			{
				?>
								 <script type="text/javascript">
									 alert("Enter registered mail-id");
									 </script>
				<?php
			}
			
			
			
		}
	?>
	
	
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