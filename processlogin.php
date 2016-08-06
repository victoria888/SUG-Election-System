<?php
	require_once "connect.php";
	require_once ('includes/session.php');
	
	$matricno  = $_POST['Mnumber'];
	$password = $_POST['password'];
	
	if($matricno !="" && $password !="")
	{
		$query="SELECT * FROM voter";
		$result = mysql_query($query);
		 
		if(isset($result))
		{
			while ($found_user = mysql_fetch_array($result))
			{
				if($found_user['Matricno'] == $matricno && $found_user['Password'] == $password)
				{
					$_SESSION['id']= $found_user['voterid'];
                     $_SESSION['name']= $found_user['Mnumber'];
					$voterid=$found_user['voterid'];
					Header("Location: voterspage.php?voterid=$voterid");
				}

			else 
			{ 
				$errmsg = "Could not Login";
			}

		}
		
		
		}
	
	if(isset($errmsg))
            {
                echo 'Incorrect Login details, Ensure to enter correct username and/or password';
                echo '<br>';
        
                 echo '<HTML>';
                 echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
                 echo '<BODY>';
                 echo '<br>';
                 echo '<A HREF = "index.php">Click to Log In Again</A>';
                 echo '</BODY>';
                 echo '</HTML>';
            }
        }
        
        else 
            {
            echo 'Error Logging In, Ensure to enter all fields';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "index.php">Click to Log In Again</A>';
            echo '</BODY>';
            echo '</HTML>';
            }
        
	
?>