<?php
require_once "connect.php";
include("includes/header.php");
 	

            $Fname = $_POST['Fname'];
			$Lname = $_POST['Lname'];
			$Matricno = $_POST['Matricno'];
			$Phoneno = $_POST['Phoneno']; 
			$Sex = $_POST['Sex']; 
			$email = $_POST['Email'];
			$Level = $_POST['Level']; 
			$Faculty = $_POST['Faculty'];
			$Department = $_POST['Department'];
			$Password =  $_POST['Password'];
			


    
    if (!empty($Fname) && !empty($Lname)&& !empty($Matricno)&& !empty($Phoneno) && !empty($Sex) && !empty($email)&& !empty($Level)&& !empty($Faculty)&& !empty($Department) && !empty($Password)) {
       
       	 
       
      echo"<div class=container>";
      $query="SELECT Matricno FROM voter WHERE Matricno='$Matricno'";
       	$query_run=mysql_query($query);
       	$run=mysql_num_rows($query_run);

       	 if($run >0){
       	 	echo'The Matric Number '.$Matricno.' already exists.';
       	 	echo'you are already registered login to vote';
       	 }else{
       	 	$insert = "INSERT INTO voter (Fname, Lname,Email, Matricno, Phoneno, Sex, Level, Faculty, Department, Password) VALUES('{$Fname}', '{$Lname}', '{$email}', '{$Matricno}', '{$Phoneno}', '{$Sex}', '{$Level}', '{$Faculty}', '{$Department}', '{$Password}')";
       	 	$insert_run=mysql_query($insert);
       	 	if($insert_run){
       	 	echo"<h4>you are successfully registered, you can now login</h4></br>";
       	 	echo"<a href='login.php' class='btn btn-success'>Go to Login Page</a>";
       	 }
       	 else{
       	 	die(mysql_error());
       	 }
       	 }
       }      
               	            
    else{
    	echo'<h4>All fields are Required to be filled</h4>';
    	echo"<br/><a href='register.php' class='btn btn-success'>Go back and register</a>";
    }
	echo"</div>";
?>


