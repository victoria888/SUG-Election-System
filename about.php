<?php
       require_once("connect.php");
      include("includes/header.php");
      require_once( 'includes/session.php');
 require_once( 'includes/function.php');
  confirm_logged_in();
         $voterid = $_GET['voterid'];

         ?>

<div class ="container">
    <div class ="row-fluid">
      <div class="col-sm-12 col-md-12 col-lg-12">
           <nav class="navbar navbar-inverse" id="navbar">
             <div class="navbar-header" id="brand">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
             </div> 
   <!--mobile collapse menu button-->

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
       <?php 
        echo"<li><a href='voterspage.php?voterid=".urlencode($voterid)."'><span class='glyphicon glyphicon-home' id='home'></span></a></li>"; 
        echo"<li class='active'><a href='about.php?voterid=".urlencode($voterid)."'> About</a></li> ";
        echo"<li><a href='viewcandidate.php?voterid=".urlencode($voterid)."'>View Candidate</a></li>";
        echo"<li><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";
        echo"<li><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
        echo"<li ><a href='result.php?voterid=".urlencode($voterid)."'>Result</a></li>";
       ?>
      </ul> 
   
              <ul class="nav user-menu pull-right">
                   <ul class="nav navbar-nav navbar-right">
                         <a href="logoutprocess.php" class="btn btn-success" id="button">
                            <span class="glyphicon glyphicon-log-out"></span>LOGOUT
                          </a>
                   </ul> 
              </ul>
    </div>
       </div>
         <div class="col-lg-12 col-md-12 col-sm-12" id="info">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-lg-offset-1" id="aboutleft">
                    	<h4><center>ABOUT SUG</center></h4>
                    	<img class="img-circle" src="images/About1.png">
                    	  
                    		<p id="left1">
                    			The SUG which stands for Students Union Governments were established in various institutions of higher learning to promote unity, orderliness and 
					smooth relationship between students, school authorities and the state or Federal Government. <br/>Various instituition have adopted this union so that it's objectives can 
					be carried ot or achieved. Although some schools dropped the idea of bringing the union because of the reasons of it may caus political havoc and calamity
					and damages of school properties due to clash of candidates. Aside all these the bringing in of SUG to a school is quite substancial and advantageous to the school.

                    		</p>
                    	  
                    </div>

                    

                    <div class="col-lg-4 col-md-12 col-sm-12 col-lg-offset-2" id="aboutright">
                    <h4><center>IT'S OBJECTIVES</center></h4>
                      <img class="img-circle" src="images/12.jpg">
                      <p>
 
                        <ul id="right1">
							<li>It simply runs on the line of democratic principles to allow students have a voice in a community to which they belong.</li>
							<li>It eases up the process of aggregating the necessary inputs from students on matters that affect them rather than have a situation where every student speaks for himself/herself.</li>
							<li>It brings the students to serious position where they partner with the institutions administration in problem solving instead of remaining, all the time, on the side of merely identifying the problems.</li>
							<li>It makes the students take on the responsibility of acting as checks on the activities of their colleagues.</li>

                        </ul>
                     
                      </p>
                    </div>
                              
  
         </div>
   </div>
</div>
<?php
include("includes/footer.php");
?>