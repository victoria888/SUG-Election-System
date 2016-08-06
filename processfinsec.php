<?php
require_once("connect.php");


$voterid = $_GET['voterid'];
$query = "SELECT votefinsec FROM voter where voterID=$voterid";
$result = mysql_query($query);
$myarray = mysql_fetch_array($result);


if($myarray['votefinsec'] == 0 )
 {
 	

 $id = $_GET['id'];
 $query = "SELECT * FROM candidate_post where candidateID = '$id'";
 $result = mysql_query($query);
 $array = mysql_fetch_array($result);
 $candidateID = $array['candidateID'];
 $postID = $array['postID'];

 

 $sql="INSERT INTO votes (voterid, candidateID, postID) VALUES('{$voterid}', '{$candidateID}', '{$postID}')";
 if(mysql_query($sql))
 {
 	$sql="UPDATE voter SET votefinsec = 1 WHERE voterid=$voterid ";
 	mysql_query($sql);

 	echo"vote successful<br\>";
    echo"you have finished voting<br\>";
    echo"<a href='voterspage.php?voterid=".urlencode($voterid)."'>Back to home</a>";
 }
 else{
 	die(mysql_error());
 }
 }

 else
 {
   echo"sorry you have already voted for financial secretary</br>";
    echo"you have finished voting </br>";
    echo"<a href='voterspage.php?voterid=".urlencode($voterid)."'>Back to home</a>";

 }

?>