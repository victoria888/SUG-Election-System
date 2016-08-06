<?php

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Position = $_POST['Position'];
    $level= $_POST['level'];
    $department= $_POST['department'];
    $cgpa= $_POST['cgpa'];
    $manifesto= $_POST['manifesto'];
$user_name = "root";
$password = "";
$database = "election";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
$SQL = "INSERT INTO candidate (, , Fname, Lname, Position, level, department, cgpa, manifesto) VALUES ('', '$Fname','$Lname','$Position', '$level', '$department', '$cgpa', '$manifesto')";
$result = mysql_query($SQL);
mysql_close($db_handle);


     echo 'Unsuccessful enusre to fill in all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Error::. </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "candidateform.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
			header("location:home.php");
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}

        
    
 ?>
