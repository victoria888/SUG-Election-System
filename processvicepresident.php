<?php
require_once("connect.php");


$voterid = $_GET['voterid'];
$query = "SELECT votevp FROM voter where voterID=$voterid";
$result = mysql_query($query);
$myarray = mysql_fetch_array($result);


if($myarray['votevp'] == 0 )
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
 	$sql="UPDATE voter SET votevp = 1 WHERE voterid=$voterid ";
 	mysql_query($sql);

 	echo"vote successful";
 	echo"<a href='treasurer.php?voterid=".urlencode($voterid)."'>Go to next</a>";
    
 }
 else{
 	die(mysql_error());
 }
 }

 else
 {
   echo"sorry you have already voted for vice-president";
   echo"<a href='treasurer.php?voterid=".urlencode($voterid)."'>Go to next</a>";

 }

?>