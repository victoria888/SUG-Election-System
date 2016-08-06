<?php 
include("includes/header.php");
require_once ('includes/session.php');
require_once('connect.php');

$mysql="SELECT * FROM candidate_post";
$result=mysql_query($mysql);

$sql="SELECT * FROM candidate";
$retval=mysql_query($sql);
 
   if(! $retval ) 
   { 
    die('Could not get data: ' . mysql_error()); 
  }
    $data = [];
      while ($row=mysql_fetch_array($retval, MYSQL_NUM)) {
         // $cand_id=$row['candidateID'];
        array_push($data, $row);
        
        
  }

?>

<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-4">
            <a  class="list-group-item success" style="background-color :#dff0d8;"> Main Menu </a> 
            <a href="candidateform.php" class="list-group-item" >Add Candidate</a>
            <a href="addadmin.php" class="list-group-item">Add Admin</a>  
            <a href="post.php" class="list-group-item">Add Post</a>
            <a href="admincandidateview.php" class="list-group-item">View Candidates</a>
            <a href="processeditcandidate.php" class="list-group-item">Edit Candidates</a>
            <a class="list-group-item" style="background-color:#A9A9A9";>Assign Post</a>
            <a href="result1.php" class="list-group-item" >Check Result</a> 
            <a href="adminlogout.php" class="list-group-item">Logout</a>

          </div>
 
           <div class="col-md-8" >
              <ol class="breadcrumb"> 
                 <li><a href="adminpanel.php">Home</a></li> 
                 <li>Assigning Candidate to post</li> 
             </ol>
  
  	                  <div class='panel panel-success'>
                         <div class='panel-heading'>
                               <h3 class='panel-title'><center>ASSIGN POSTS</center></h3>
                         </div>
                                     <table class="table">
                           <thead>
                              <th>NAME</th>
                              <th>DEPARTMENT</th>
                              <th>ASSIGN POST</th>
                            

                          </thead>
                      <tbody>
                          <?php
                           foreach ($data as $key => $value) {
                            
                           ?>
                               <tr>
                                  <td><?=$value[1];?> &nbsp; <?=$value[2];?></td>
                                  <td><?=$value[5];?></td>
                                  
                                  <td><?php
                                  $cand_id=$value[0];
                                  $sql_sel2="SELECT * FROM candidate_post WHERE candidateID = '$cand_id'";                         
                                       $result = mysql_query($sql_sel2);
                                       if(mysql_num_rows($result) > 0)
                                       {
                                        echo"<a href='#' class='btn btn-default' disabled='disabled' role='button'>ASSIGNED</a>";
                                        // echo"$fname $lname is already assigned to a post</br>";
                                        // echo"<a href='assignpost.php' class='btn btn-success'>assign another candidate</a>";
                                       }
                                  
                                  // echo $cand_id; 
                                  // if(isset($result))
                                  // {
                                  //          if(mysql_num_rows($result) > 0)
                                  //          {
                                            
                                            // echo"$fname $lname is already assigned to a post</br>";
                                            // echo"<a href='assignpost.php' class='btn btn-success'>assign another candidate</a>";
                                           // }
                                           else{
                                            echo"<a href='assign.php?id=$value[0] &fname=$value[1] &lname=$value[2]' class='btn btn-success' role='button'>ASSIGN</a>";
                                           }
                                      ?>
                                  </td>
                               </tr>

                                                    <?php
                                                              }
                                                            
                                                    ?>
                      </tbody>
                    </table>
                    </div>  

                </div>
  </div>
</div> 
<?php include("includes/footer.php")?> 