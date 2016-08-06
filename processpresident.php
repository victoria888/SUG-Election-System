<?php
require_once("connect.php");


$voterid = $_GET['voterid'];
$query = "SELECT votepresident FROM voter where voterID=$voterid";
$result = mysql_query($query);
$myarray = mysql_fetch_array($result);


if($myarray['votepresident'] == 0 )
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
 	$sql="UPDATE voter SET votepresident = 1 WHERE voterid=$voterid ";
 	mysql_query($sql);

 	echo"vote successful";
 	echo"<a href='vicepresident.php?id=".urlencode($id)." &voterid=".urlencode($voterid)."'>Go to next</a>";
    
 }
 else{
 	die(mysql_error());
 }
 }

 else
 {
   echo"sorry you have already voted for president";
   echo"<a href='vicepresident.php?voterid=".urlencode($voterid)."'>Go to next</a>";

 }

?>