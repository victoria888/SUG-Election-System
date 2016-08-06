<?php
include("includes/header.php");
require_once( 'includes/session.php');
  
	 
 
?>
<div class="container">


<div class="col-lg-4">
   <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<a  class="list-group-item" style="background-color:#A9A9A9";>Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item">Add Post</a>
<a href="admincandidateview.php" class="list-group-item">View Candidates</a>
<a href="processeditcandidate.php" class="list-group-item">Edit Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item" >Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
 <div class="col-md-8" >
    <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
	</li> <li>Candidate Registration</li> 
	</ol>
	<div class="row-fluid" id="boxx">

<h1>Candidate Registration</h1>
<h4>Please fill the registration form</h4><hr/>


<form class="form-horizontal" role="form" action="candprocessform.php"  method="post"> 

    

   <div class="form-group"> 
        <label for="firstname" class="col-sm-2 control-label">First Name</label> 
    <div class="col-sm-10"> 
        <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="Fname">		
</div> 
    </div> 
	     <div class="form-group"> 
            <label for="lastname" class="col-sm-2 control-label">Last Name</label> 

			<div class="col-sm-10"> 
 
              <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="Lname"> 
                </div> 
</div>
        
				
				 
				<div class="form-group"> 
				<label for="position" class="col-sm-2 control-label">level</label> 
				<div class="col-sm-10">
				<select class="form-control" id="name" name="level">				
				<option>100</option> 
				<option>200</option> 
				<option>300</option> 
				<option>400</option> 
				<option>500</option>
                <option>600</option>				
				</select>
             
			 </div></div>
			 <div class="form-group"> 
            <label for="lastname" class="col-sm-2 control-label">sex</label> 

			<div class="col-sm-10"> 
            <select class="form-control" id="name" name="sex">
                <option>male</option> 
				<option>female</option></select>			
                </div> 
            </div>
				
				
				<div class="form-group"> 
            <label for="department" class="col-sm-2 control-label">Department</label> 
			<div class="col-sm-10"> 
              <input type="text" class="form-control" id="name" placeholder="" name="department"> 
                </div> </div>
				
				<div class="form-group"> 
            <label for="department" class="col-sm-2 control-label">Cgpa</label> 
			<div class="col-sm-10"> 
              <input type="text" class="form-control" id="name" placeholder="" name="cgpa"> 
                </div> </div>
				
				
			
			  
			 
				
				
				<div class="form-group"> <label for="name" class="col-sm-2 control-label">Type your Manifesto here</label> 
				<div class="col-sm-10">
				   <textarea class="form-control" rows="3" name="manifesto"></textarea></div> </div>
 
   <div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> 
 <button type="submit" class="btn btn-success" id="but1" name="add"></span>Register</button> 
</div> </div> </div>

</form>
 
 
</div>
 </div>


<?php include("includes/footer.php");?>

