<?php
include("includes/header.php");
require_once "connect.php";
      $voterid = $_GET['id'];
      $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      // $Matricno = $_POST['Matricno'];
      $Phoneno = $_POST['Phoneno']; 
      $Sex = $_POST['Sex']; 
      $email = $_POST['Email'];
      $Level = $_POST['Level']; 
      $Faculty = $_POST['Faculty'];
      $Department = $_POST['Department'];
      $Password =  $_POST['Password'];
   
  if (!empty($Fname) && !empty($Lname)&& !empty($Phoneno) && !empty($Sex) && !empty($email)&& !empty($Level)&& !empty($Faculty)&& !empty($Department) && !empty($Password)) {
     $sql_update = "UPDATE voter SET Fname = '$Fname', Lname = '$Lname', Phoneno = '$Phoneno', Sex = '$Sex', Email='$email', Level='$Level', Faculty='$Faculty', Department='$Department', Password='$Password' WHERE voterid = '$voterid'";
       if(mysql_query($sql_update))
       {
          ?>
          <div class="container">
          <h4>EDITING USER SUCCESSFUL</h4>
    <div class="panel panel-success"> 
        <div class="panel-heading"> 
           <div class="panel-title"><center><h3>UPDATED USER DETAILS</h3></center> </div></div> 
             <!-- <div class="panel-body"><h3>UPDATED USER DETAILS</h3></div> --> 
               <table class="table"> 
               <!-- <th>Product</th><th>Price </th> --> 
                 <tr><td><b>Name:</b></td><td><?php echo $Fname;?>&nbsp;<?php echo $Lname;?></td></tr> 
                 <tr><td><b>Phone Number:</b></td><td><?php echo $Phoneno;?></td></tr> 
                 <tr><td><b>Sex:</b></td><td><?php echo $Sex;?></td></tr> 
                 <tr><td><b>Email:</b></td><td><?php echo $email;?></td></tr> 
                 <tr><td><b>Level:</b></td><td><?php echo $Level;?></td></tr>  
                 <tr><td><b>Faculty:</b></td><td><?php echo $Faculty;?></td></tr> 
                 <tr><td><b>Department:</b></td><td><?php echo $Department;?></td></tr> 
                 <tr><td><b>Password:</b></td><td><?php echo '********';?></td></tr> 
              </table> 
           </div>
          
        <?php

        echo"<a href='voterspage.php?voterid=".urlencode($voterid)."' class='btn btn-success'>Back to Home</a>";
       }
         else {
           die(mysql_error());
           }

       
       
     }
     
     else
     {
         echo 'Update not Successful, ensure to input all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "processeditvoter.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
            echo '</div>';

     }
?>