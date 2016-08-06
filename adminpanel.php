<?php
include("includes/header.php");
require_once ('connect.php');

?>
<div class="container">
<nav class="navbar navbar-inverse" role="navigation" id="admin_nav" > <div class="navbar-header"> 
<a class="navbar-brand" href="#">
 	<?php
$sql = 'SELECT  name FROM admin'; 
mysql_select_db('election');
//  $retval = mysql_query( $sql); 
//    if(! $retval ) {

// die('Could not get data: ' . mysql_error()); 
// } 
// while($row = mysql_fetch_array($retval, MYSQL_NUM)) 
// 	{ echo "Welcome {$row[0]} !<br> "; }
	 

?>
</a> </div> 
<div> <p class="navbar-text">
<?php

?>
</p> </div> </nav>
<div class="col-lg-4">
  <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<a href="candidateform.php" class="list-group-item">Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item">Add Post</a>
<a href="admincandidateview.php" class="list-group-item">View Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item">Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
  <div class="col-lg-8">
    <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
	</li>  
	<li class="active">MY PANEL</li> </ol>
	<div id="adminbody">
	<div id="admin">
	<br/>
	   <h2><center>ADMIN PANEL</center></h2><br/>
	   <p id="ptext">Welcome to the SUG ELECTION SYSTEM administration panel. Here, you can register a candidate, add post and also management of all processes of the SUG election system is made possible</p>
	</div>
	</div>
  </div>

</div>
<?php include("includes/footer.php");?>