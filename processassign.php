<?php
require_once'connect.php';
include("includes/header.php");

$cand_id=$_GET['cand_id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$post=$_POST['post'];


$sql_sel="SELECT postID FROM post WHERE position = '$post'";
      $result = mysql_query($sql_sel);
      $retval = mysql_fetch_array($result);
      $postID = $retval['postID'];

      // echo  $postID,$fname, $lname;
      echo"<div class='container'>";


		$sql_sel2="SELECT * FROM candidate_post WHERE candidateID = '$cand_id'";								         
		 $result = mysql_query($sql_sel2);
		 if(mysql_num_rows($result) > 0)
		 {
		 	echo"$fname $lname is already assigned to a post</br>";
		 	echo"<a href='assignpost.php' class='btn btn-success'>assign another candidate</a>";
		 }
		 else
		 {
		 	$sql="INSERT INTO candidate_post (candidateID,postID) VALUES ('{$cand_id}','{$postID}') ";
		 	$sql_run=mysql_query($sql);
		 	if(isset($sql_run)){
		 	echo"<h4>successfully assigned a post to $fname $lname</h4>";
		 	echo"<a href='assignpost.php' class='btn btn-success'>Back to assign page</a>";
		 	//insert the candidateid and post id into the candidate post table
		 }
		 else{
		 	die(mysql_error());
		 }
		 }	
		 echo"</div>";							           
?>