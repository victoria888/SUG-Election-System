<?php
include("include/header.php");
require_once("connect.php");


            $name = $_POST['position'];
			$job = $_POST['jobdescription'];
			$date = $_POST['postdate']; 

    $insert = "INSERT INTO post (position, PostDescription, DateCreated) VALUES('{$name}',  '{$job}', '{$date}')";
    $result = mysql_query($insert);
	    if(isset($result));	
		{
			echo"new post created!";
			echo"<a href ='adminpanel.php'>Back To Admin page</a>";
		
			
		}	
		
		
			
		die(mysql_error());
		

?>
