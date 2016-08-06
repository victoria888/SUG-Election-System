<?php
	require_once "connect.php";
	require_once ('includes/session.php');
	
	$username  = $_POST['username'];
	$password = $_POST['password'];
	
	if($username !=""&& $password !="")
	{
		$query="SELECT * FROM admin";
		$result = mysql_query($query);
		
		if(isset($result))
		{
			while ($found_user = mysql_fetch_array($result))
			{
				if($found_user['username'] == $username && $found_user['password'] == $password)
				{
					Header("Location: adminpanel.php");
				}
			}
		}
		
		else
			{
				echo "Error Logging In";
			}
	}
	else
		{
			echo 'ok';
		}
	
?>