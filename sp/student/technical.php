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
                            <li class=""><a href="technical.php" class="animate">Technical <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
                            
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
        <div class="container">
            <div class="row">
                <div class="col-xs-3 searchPanel">
                    <form>
                        <h4>Search By Date:
                            <input type="date" name="s_date" id="search">
                        </h4>

                        

                        <input type="submit" name="search" class="btn btn-primary">
                    </form>
                </div>
				
				
				
				<?php
					   if((isset($_REQUEST['search'])))
					   {	
							$dat=$_REQUEST['s_date'];
							
						
						
						
				  ?>
				  
				
				
                <div class="col-xs-6">
				
				<?php if (isset($_GET["page"]))
						{ 
							$page  = $_GET["page"]; 
						} 
					  else 
					  {
						$page=1; 
					  } 
					$start_from = ($page-1) * 3;  
					if(isset($_REQUEST['s_date']))
					{
						$sql = "select * from acceptedtechnicalevents where dateOfEvent='$dat' ORDER BY eventNameId DESC LIMIT $start_from, 3";
						
					
						
						
								
						$result=mysql_query($sql);
						while($rws = mysql_fetch_array($result)){
								
								
								
								
								
								
								
								
				?>
				
                    <div id="event1" class="eventHeader">
                       <a href="../events/event1.php?eventname=<?php echo $rws['eventName']; ?>&eventid=<?php echo $rws['eventNameId'];?>">
                           <div class="row">
                               <div class="col-xs-5"><span>Technical Event Name</span></div>
                               <div class="col-xs-2"><span>Prize</span></div>
                               <div class="col-xs-3"><span>Date</span></div>
                               <div class="col-xs-2"><span>Duration</span></div>
                           </div>
						   
						   
						   
						   
                           <div class="row">
                               <div class="col-xs-5"><?php  echo $rws['eventName']; ?></div>
                               <div class="col-xs-2"><?php echo $rws['prizeDetails']; ?></div>
                               <div class="col-xs-3"><?php echo $rws['dateOfEvent']; ?></div>
                               <div class="col-xs-2">10:10</div>
                           </div>
                       </a>

                    </div>
				
						
					 <?php  }
					 
					   
					   
					   
					   ?>
					   <div id = "numbersNav">
					   
<?php 
$sql = "SELECT COUNT(eventNameId) FROM acceptedtechnicalevents"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 3); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='technical.php?page=".$i."'>".$i."</a> "; 
}; 
?>
</div>

					
					
					

                </div>
				
				<?php }}
					   else{ ?>
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
                <div class="col-xs-6">
				<?php if (isset($_GET["page"]))
							{ $page  = $_GET["page"]; } 
						else { $page=1; }; 
								$start_from = ($page-1) * 3;  
					$sql="select * from acceptedtechnicalevents ORDER BY eventNameId DESC LIMIT $start_from, 3";
								$result=mysql_query($sql);
								while($rws = mysql_fetch_array($result)){
								$dateOfEvent = $rws['dateOfEvent'];
								$eventNameIdDelete = $rws['eventNameId'];
								
								if ( date("Y-m-d") > $rws['dateOfEvent'])
								{
									
									$sqlDeleteExpiredEvent = "DELETE FROM acceptedtechnicalevents where eventNameId = '$eventNameIdDelete'";
									mysql_query($sqlDeleteExpiredEvent);
								}
								else
								{
								
								
								
								
								
								?>
				
				
				<div id="event1" class="eventHeader">
				
				
                       <a href="../events/event1.php?eventname=<?php echo $rws['eventName']; ?>&eventid=<?php echo $rws['eventNameId'];?>">
                           <div class="row">
                               <div class="col-xs-5"><span>Technical Event Name</span></div>
                               <div class="col-xs-2"><span>Prize</span></div>
                               <div class="col-xs-3"><span>Date</span></div>
                               
                           </div>
						   
						   
						   
						   
                           <div class="row">
                               <div class="col-xs-5"><?php  echo $rws['eventName']; ?></div>
                               <div class="col-xs-2"><?php echo $rws['prizeDetails']; ?></div>
                               <div class="col-xs-3"><?php echo $rws['dateOfEvent']; ?></div>
                               
                           </div>
                       </a>

                    </div>
					
					<?php 
					
					}
					
					}
					 
					   
					   
					   
					   ?>
					   <div id = "numbersNav">
					   
<?php 
$sql = "SELECT COUNT(eventNameId) FROM acceptedtechnicalevents"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 3); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='technical.php?page=".$i."'>".$i."</a> "; 
}; 

?>
</div>


</div>
<?php } ?>
				
				
                <div class="col-xs-3 videoList">
                    <h4>Video List</h4>

                    <marquee  height = "50%" scrollamount="6" direction="up" loop="true" onmouseover="this.stop();" onmouseout="this.start();">
					
                        <?php 

						$sqlGallery = "SELECT * from acceptedtechnicalevents";
						$sqlGalleryResult=mysql_query($sqlGallery);
						

						while($rws = mysql_fetch_array($sqlGalleryResult)){
						$file = "../handler/documents/".$rws[0]."/video.mp4";
						

							if(file_exists($file)){
							
							?>


                                 <div id="video1">
							
								<a href="../student/videoFinalDisplay.php?eventname=<?php echo $rws['eventName']; ?>&eventid=<?php echo $rws['eventNameId'];?>" >
									<p><?php echo $rws[1]; ?> </p>
										<video width="150" height = "150" controls="controls" >
											<source  src = "<?php echo $file; ?>" type="video/mp4" />
											
										
										</video>
								
								</a>
								
						</div>
							<?php 
							}
						}
						?>
						
                    </marquee>

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