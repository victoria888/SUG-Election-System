<?php
include("includes/header.php");
require_once ('connect.php');
require_once ('includes/session.php');


?>
<div class="container">

<div class="col-lg-4">
 <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<a href="candidateform.php" class="list-group-item" >Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item" style="background-color:#A9A9A9";>Add Post</a>
<a href="admincandidateview.php" class="list-group-item">View Candidates</a>
<a href="processeditcandidate.php" class="list-group-item">Edit Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item" >Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
     <div class="col-lg-8">
       <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
  </li> <li>Add a Post</li> 
  </ol>
	    <form class="form-horizontal" role="form" action="processpost.php"  method="post">
	     
            <div class="form-group"> 
                <label for="name" class="col-sm-2 control-label">Name of Post</label>
                    <div class="col-sm-10"> 
                       <input type="text" class="form-control" id="name" placeholder="Position" name="position">		
                    </div> 
            </div>
            <div class="form-group"> 
                <label for="name" class="col-sm-2 control-label">Description</label> 
                    <div class="col-sm-10"> 
                       <textarea class="form-control" rows="2" name="jobdescription" style="width:300px;"></textarea>		
                    </div> 
           </div>
           <div class="form-group"> 
                <label for="name" class="col-sm-2 control-label">Date Created</label> 
                    <div class="col-sm-10"> 
                       <input type="text" class="form-control" id="name" placeholder="yyyy-mm-dd" name="postdate">		
                    </div> 
           </div>
           <button type="submit" class="btn btn-success">ADD POST</button>
           
         
	    </form>
     </div>

</div>