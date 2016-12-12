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
			<h1><center>Update Events</center></h1>
               
				
                <div class="col-xs-10" >
				
				
				<?php if (isset($_GET["page"]))
							{ $page  = $_GET["page"]; } 
						else { $page=1; }; 
								$start_from = ($page-1) * 4;  
					$sql="select eventName,eventNameId from updatedeventdetails ORDER BY eventNameId DESC LIMIT $start_from, 4";
								$result=mysql_query($sql);
								while($rws = mysql_fetch_array($result)){
								
								
								
								
								
								
								
								
								?>
				
				
                    <div id="event1" class="eventHeader">
                       <a href="../admin/UpdateEventSpecificDetail.php?eventname=<?php echo $rws[0]; ?>&eventid=<?php echo $rws[1];?>">
                           <div class="row">
                               <div class="col-xs-5"><span>Technical Event Name</span></div>
                                 <div class="col-xs-2"><span></span></div>
                            <div class="col-xs-3"><span>Updates Available</span></div>
                            <!-- <div class="col-xs-2"><span><input type="submit" name="btn-UpdateSend" value="Send Updates"/></span></div> -->
                           </div>
                           <div class="row">
                               <div class="col-xs-5"><?php echo $rws[0]; ?></div>
                               
                           </div>
                       

                    </div>

                    
                    			   <?php  }
					 
					   
					   
					   
					   ?>
					   <div id = "numbersNav">
					   
<?php 
$sql = "SELECT COUNT(eventNameId) FROM updatedeventdetails"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 4); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='updateEventDetails.php?page=".$i."'>".$i."</a> "; 
}; 

?>
</div>

                </div>
				
                <div class="col-xs-2 Quick links">
                    <h4>Qucik links</h4>

                    

                        <div id="eventpage">
                            <a href="../admin/eventpage.php"> Event page</a>
                        </div>

                        <div id="everyEventDetails">
                            <a href="../admin/everyEventDetails.php"> list details</a>
                        </div>

                        <div id="updateEventDetails">
                            <a href="../admin/updateEventDetails.php"> update lists</a>
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