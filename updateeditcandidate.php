<?php 
require_once'connect.php';
include("includes/header.php");
$cand_id=$_GET['id']; 
  $sql_sel="SELECT * FROM candidate WHERE candidateID = $cand_id LIMIT 1";
     $result = mysql_query($sql_sel);
      if($result)
      {
          $row = mysql_fetch_array($result);
          
      }
      else{
        die(mysql_error());
      }
                                         
                                         
?>

<div class="container">


<div class="col-lg-4">
  <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<a href="candidateform.php" class="list-group-item">Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item">Add Post</a>
<a href="admincandidateview.php" class="list-group-item">View Candidates</a>
<a  class="list-group-item"  style="background-color :#A9A9A9;">Edit Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item">Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
 <div class="col-md-8" >
    <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
  </li> <li>Candidate Registration</li> 
  </ol>
  <div class="row-fluid" id="boxx">

<h1>Candidate Registration</h1>
<h4>Please fill the registration form</h4><hr/>


<form class="form-horizontal" role="form" action="processupdatecand.php?id=<?=$cand_id?>"  method="post"> 

    

   <div class="form-group"> 
        <label for="firstname" class="col-sm-2 control-label">First Name</label> 
    <div class="col-sm-10"> 
        <input type="text" class="form-control" id="name" name="Fname" value="<?php echo $row['Fname'];?>">    
</div> 
    </div> 
       <div class="form-group"> 
            <label for="lastname" class="col-sm-2 control-label">Last Name</label> 

      <div class="col-sm-10"> 
 
              <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="Lname" value="<?php echo $row['Lname'];?>"> 
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
              <input type="text" class="form-control" id="name" placeholder="" name="department" value="<?php echo $row['department'];?>"> 
                </div> </div>
        
        <div class="form-group"> 
            <label for="department" class="col-sm-2 control-label">Cgpa</label> 
      <div class="col-sm-10"> 
              <input type="text" class="form-control" id="name" name="cgpa" value="<?php echo $row['cgpa'];?>"> 
                </div> </div>
        
        
      
        
       
        
        
        <div class="form-group"> <label for="name" class="col-sm-2 control-label">Type your Manifesto here</label> 
        <div class="col-sm-10"><textarea class="form-control" rows="3" name="manifesto" ></textarea></div> </div>
 
   <div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> 
 <button type="submit" class="btn btn-success">UPDATE</button> 
</div> </div> </div>

</form>
 
 
</div>
 </div>


<?php include("includes/footer.php");?>

