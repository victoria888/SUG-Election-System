<?php
require_once("connect.php");
include("includes/header.php");

            $name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password']; 

    $insert = "INSERT INTO admin (name, username, password) VALUES('{$name}',  '{$username}', '{$password}')";
    $result=mysql_query($insert);
	    if(isset($result));	
		{
		  echo"<div class='container'>";
			echo"<h4>you have been registered successfully!</h4>";
			echo"<a href ='adminpanel.php' class='btn btn-success'>Back To Admin page</a></div>";
			
		}
		
		   die(mysql_error());
           
            
		  

?>