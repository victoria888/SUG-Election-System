<?php
include("includes/header.php");
require_once "connect.php";
$cand_id=$_GET['id']; 
      $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      $sex = $_POST['sex'];
      $level = $_POST['level']; 
      $department =$_POST['department'];  
      $cgpa = $_POST['cgpa']; 
      $manifesto = $_POST['manifesto'];
   
  if (!empty($Fname) && !empty($Lname)&& !empty($sex) && !empty($level) && !empty($department)&& !empty($cgpa)&& !empty($manifesto)) {
     $sql_update = "UPDATE candidate SET Fname = '$Fname', Lname = '$Lname', department = '$department', sex = '$sex', level='$level', cgpa='$cgpa', manifesto='$manifesto' WHERE candidateID = '$cand_id'";
       if(mysql_query($sql_update))
       {
          
          echo"<h4>EDITING USER SUCCESSFUL</h4>";
        

        echo"<a href='adminpanel.php' class='btn btn-success'>Back to Home</a>";
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
            echo '<HEAD> <TITLE>EDIT</TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "processeditcandidate.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
            echo '</div>';

     }
?>