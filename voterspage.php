
<?php
include("includes/header.php");
require_once( 'includes/session.php');
 require_once( 'includes/function.php');
  confirm_logged_in();
$voterid = $_GET['voterid'];
?>
<div class="container" >
<html>
<head><title>Home</title>

</head>
<body>
<div class="col-sm-12 col-md-12 col-lg-12">
   <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">   
    
	<div class="navbar-header" id="brand">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  </button>
	</div> 
   <!--mobile collapse menu button-->

    <div class="collapse navbar-collapse" id="myNavbar">
   <ul class="nav navbar-nav navbar-left" id="voterspage">
   <?php 
    echo"<li><a href='voterspage.php?voterid=".urlencode($voterid)."'><span class='glyphicon glyphicon-home' id='home'></span></a></li>"; 
	echo"<li><a href='about.php?voterid=".urlencode($voterid)."'> About</a></li> ";
	echo"<li><a href='viewcandidate.php?voterid=".urlencode($voterid)."'>View Candidate</a></li>";
  echo"<li><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";;
	 echo"<li><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
  echo"<li><a href='result.php?voterid=".urlencode($voterid)."'>Result</a></li>";?>
	
	</ul> 
	 
	 <ul class="nav user-menu pull-right">
	    
                               <ul class="nav navbar-nav navbar-right">
	      
		    <a href="logoutprocess.php" class="btn btn-success" id="button">
			<span class="glyphicon glyphicon-log-out"></span>LOGOUT</a>
			 
      	
	</ul> </ul>
	</div>

                                        </div></div>




 

<div class="row-fluid" id="slide">
 <div class="right col-lg-12 col-md-12 col-sm-12" id="slide">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                      <img src="images/s3.jpg" alt="could not load image">
                                  </div>

                                  <div class="item">
                                      <img src="images/s2.jpg" alt="could not load image">
                                  </div>

                                  <div class="item">
                                      <img src="images/s3.jpg" alt="could not load image">
                                  </div>


                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
			</div>
			</div>

</div>

</div>

</body>
</html>
<?php
include("includes/footer.php");
?>



