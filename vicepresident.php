<?php
 require_once("connect.php");
 include("includes/header.php");
 $voterid = $_GET['voterid'];

 // $query = "SELECT  * FROM candidate WHERE position='Vice-president'";
 $query="SELECT candidate_post.candidateID,candidate_post.postID, `Fname`, `Lname`, `Department`, post.position FROM `candidate`, `post`,`candidate_post` WHERE candidate_post.candidateID=candidate.candidateID AND post.postID=candidate_post.postID AND post.position='Vice-president'";
  mysql_select_db('election'); 
  $retval = mysql_query( $query); 
  if(! $retval ) 
  { 
  	die('Could not get data: ' . mysql_error()); 
  }
  
 
?>
<div class="container">
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
        echo"<li><a href='about.php?voterid=".urlencode($voterid)."'> About</a></li> ";
        echo"<li><a href='viewcandidate.php?voterid=".urlencode($voterid)."'>View Candidate</a></li>";
        echo"<li><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";
        echo"<li class='active'><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
        echo"<li><a href='result.php?voterid=".urlencode($voterid)."'>Result</a></li>";
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
<div class="col-lg-4">
  <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<?php
echo"<a href='voting.php?voterid=".urlencode($voterid)."' class='list-group-item'>President</a> ";
echo"<a class='list-group-item'>Vice-President</a>"; 
echo"<a href='treasurer.php?voterid=".urlencode($voterid)."' class='list-group-item'>Treasurer</a>"; 
echo"<a href='financialsec.php?voterid=".urlencode($voterid)."' class='list-group-item'>Financial Secretary</a>";
?>

</div>
  <div class="col-lg-8">
    <ol class="breadcrumb"> <li><a href="#">Home</a></li>  
	<li class="active">ONLINE POLLING BOOTH</li>
  <li class="active"><a>Vice-president</a></li> 
    </ol>
      <div class='panel panel-success'>
				<div class='panel-heading'>
                    <h3 class='panel-title'><center>VICE-PRESIDENTIAL CANDIDATES</center></h3>
                </div>
                   <table class="table">
                	  <thead>
                		<th>NAME</th>
                   		<th>DEPARTMENT</th>
                   		<th>VOTE</th>
                	  </thead>
                	<tbody>
                	 <?php
                	     while ($row=mysql_fetch_array($retval, MYSQL_NUM)) {
                	     	$id = $row[0];
                	     echo"<tr><td>{$row[2]} &nbsp; {$row[3]} </td>  <td> {$row[4]}</td>";
                	     echo"<td><a href='processvicepresident.php?id=".urlencode($id)." &voterid=".urlencode($voterid)."' class='btn btn-success' role='button'>VOTE</a></td></tr>";
                	     
  	
                         }?>
                     </tbody>
                    </table>
  </div>

  </div>
   
   </div>
   <?php// include("includes/footer.php");?>
 