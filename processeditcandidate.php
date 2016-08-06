<?php
     require_once("connect.php");
      include("includes/header.php");
      require_once( 'includes/session.php');

        $mysql=" SELECT * FROM candidate"; 
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
          <a href="admincandidateview.php" class="list-group-item">View Candidates</a>
          <a  class="list-group-item"  style="background-color :#A9A9A9;">Edit Candidates</a>
          <a href="assignpost.php" class="list-group-item">Assign Post</a>
          <a href="result1.php" class="list-group-item">Check Result</a> 
          <a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
     <div class="col-lg-8">
       <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
		  </li> <li>Edit Candidates</li> 
		  </ol>
         <div class='panel panel-success'>
             <div class='panel-heading'>
                <h3 class='panel-title'><center>VIEW CANDIDATES</center></h3>
              </div>
              <!-- <form class="form-horizontal" role="form" action="updateeditcandidate.php"  method="post"> -->
                 <table class="table">

                   <thead>
                      <th>NAME</th>
                      <th>DEPARTMENT</th>
                      <th>LEVEL</th>
                      <th>EDIT</th>
                  </thead>
                     <tbody>

                          <?php
                           foreach ($data as $key => $value) {
                            
                           ?>
                         
                           <tr>
                               <td><?= $value[1]?>&nbsp;<?=$value[2];?></td>
                               <td><?= $value[5];?></td>
	                             <td><?=$value[4]; ?></td>
                               <td><?php 
                                  $cand_id=$value[0];
                                  $sql_sel2="SELECT * FROM candidate WHERE candidateID = '$cand_id'";                         
                                       $result = mysql_query($sql_sel2);
                                       if(isset($result))
                                       {
                                        echo"<a href='updateeditcandidate.php?id=$value[0]' class='btn btn-success' role='button'>EDIT</a>";
                                       }

                                        ?>
                               
                                                    
                                                    <?php }?></td></tr>
                     </tbody>
                </table> 
          </div>
    
   </div> 
</div>