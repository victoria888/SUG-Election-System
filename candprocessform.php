<?php
require_once 'connect.php';
include("includes/header.php");


            $Fname = $_POST['Fname'];
			$Lname = $_POST['Lname'];
			// $position = $_POST['position']; 
			$sex = $_POST['sex']; 
			$level = $_POST['level']; 
			$department = $_POST['department'];
			$cgpa = $_POST['cgpa'];
			$manifesto =  mysql_real_escape_string($_POST['manifesto']);

			
	$insert = "INSERT INTO candidate (Fname, Lname, sex, level, department,cgpa, manifesto) VALUES('{$Fname}', '{$Lname}', '{$sex}', '{$level}', '{$department}', '{$cgpa}', '{$manifesto}')";
	$insert_result = mysql_query($insert);
	// $cand_sql="SELECT candidateID FROM candidate WHERE Fname='$Fname' AND Lname='$Lname'";
	// $cand_result = mysql_query($cand_sql);
	// $post_sql="SELECT postID FROM post WHERE position='$position'";
	// $post_result = mysql_query($post_sql);
	
	// if(isset($cand_result) == false && isset($insert_result)== false)	
	// 	{
		
	// 		die(mysql_error());
	// 	}
	// 	else
	// 	{
			
	// 		while($cand_resultarr = mysql_fetch_array($cand_result) and $post_resultarr =  mysql_fetch_array($post_result))
	// 		{
				
	// 			 $cand_id = $cand_resultarr['candidateID'];
	// 			 $post_id = $post_resultarr['postID'];
	// 		}

	// 		 $candpost_sql="INSERT INTO candidate_post (candidateID, postID, position) VALUES ('{$cand_id}', '{$post_id}', '{$position}')";
	// 		 $candpost_result = mysql_query($candpost_sql);

	// 		 if(!$candpost_result)
	// 		 {
	// 		 	die(mysql_error());
	// 		 }
			if(isset($insert_result)){
			 echo"<div class='container'>";
			
			echo"<h4>you have been registered successfully!</h4>";
			echo"<a href ='adminpanel.php' class='btn btn-success'>Back To Admin page</a>";
		}
		else{
			echo"<h4>error registering!!</h4>";
			die(mysql_error());
			echo"<a href='adminpanel.php' class='btn btn-success'>Back to Admin Panel</a></div>";
		}

		
		
	
		
?>


