<?php 

// Connect to server and select database.
$conn_error='could not connect.';
$server='localhost';
$user='root';
$pass='';
  $connect_mysql = mysql_connect($server, $user, $pass);
  $select_db = mysql_select_db("election", $connect_mysql);
  if(!$select_db)
	{
		die($conn_error. mysql_error());
	}
?>
