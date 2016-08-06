<?php
     require_once("connect.php");
      include("includes/header.php");
      require_once( 'includes/session.php');

        $mysql=" SELECT candidate_post.candidateID,candidate_post.postID, Fname, Lname, Department,Level,Manifesto, post.position,sex FROM candidate, post, candidate_post WHERE candidate_post.candidateID=candidate.candidateID AND post.postID=candidate_post.postID"; 
  
  $retval = mysql_query( $mysql); 
   if(! $retval ) 
   { 
    die('Could not get data: ' . mysql_error()); 
  }
    $data = [];
      while ($row=mysql_fetch_array($retval, MYSQL_NUM)) {
        array_push($data, $row);
  }
?>

<div class="container">
<div class="col-lg-4">
  <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
<a href="candidateform.php" class="list-group-item">Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item">Add Post</a>
<a  class="list-group-item"  style="background-color :#A9A9A9;">View Candidates</a>
<a href="processeditcandidate.php" class="list-group-item">Edit Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item">Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
     <div class="col-lg-8">
       <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
		  </li> <li>View Candidates</li> 
		  </ol>
         <div class='panel panel-success'>
             <div class='panel-heading'>
                <h3 class='panel-title'><center>VIEW CANDIDATES</center></h3>
              </div>
                 <table class="table">
                   <thead>
                      <th>NAME</th>
                      <th>DEPARTMENT</th>
                      <th>LEVEL</th>
                      <th>POSTS</th>
                      <th>SEX</th>
                      <th>MANIFESTO</th>
                  </thead>
                     <tbody>
                          <?php
                           foreach ($data as $key => $value) {
                            
                           ?>
                               <tr>
                                    <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
	                                <td><?=$value[4];?></td>
	                                <td><?=$value[5];?></td>
	                                <td><?=$value[7];?></td>
	                                <td><?=$value[8];?></td>
	                                <td><?=$value[6];?></td>
                               </tr>
          
                  
                                                    <?php
                                                              
                                                            }
                                                    ?>
                     </tbody>
                </table>
          
  </div>
    
    
</div>
    </div>
