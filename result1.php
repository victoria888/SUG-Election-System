<?php
 require_once("connect.php");
 include("includes/header.php");
require_once( 'includes/session.php');

$mysql='SELECT votes.candidateID,votes.postID, `Fname`, `Lname`, `Department`, post.position, count(*) FROM `candidate`, `post`, `votes` WHERE votes.candidateID=candidate.candidateID AND post.postID=votes.postID GROUP BY votes.candidateID, votes.postID';
 $result=mysql_query($mysql);
  mysql_select_db('election'); 
  
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
<a href="candidateform.php" class="list-group-item" >Add Candidate</a>
<a href="addadmin.php" class="list-group-item">Add Admin</a>  
<a href="post.php" class="list-group-item">Add Post</a>
<a href="admincandidateview.php" class="list-group-item">View Candidates</a>
<a href="processeditcandidate.php" class="list-group-item">Edit Candidates</a>
<a href="assignpost.php" class="list-group-item">Assign Post</a>
<a href="result1.php" class="list-group-item"  style="background-color:#A9A9A9";>Check Result</a> 
<a href="adminlogout.php" class="list-group-item">Logout</a>

</div>
  <div class="col-lg-8">
    <ol class="breadcrumb"> <li><a href="adminpanel.php">Home</a>
  </li>  
  <li class="active">ELECTION RESULT</li> </ol>
  
            <div class='panel panel-success'>
             <div class='panel-heading'>
                <h3 class='panel-title'><center>PRESIDENTIAL CANDIDATES</center></h3>
              </div>
                 <table class="table">
                   <thead>
                      <th>NAME</th>
                      <th>DEPARTMENT</th>
                      <th>RESULT</th>
                  </thead>
                     <tbody>
                          <?php
                           foreach ($data as $key => $value) {
                            if ($value[5] === 'President') {
                           ?>
                               <tr>
                                  <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                  <td><?=$value[4];?></td>
                                  <td><span class="badge"><?=$value[6];?></span></td>
                               </tr>
          
                  
                                                    <?php
                                                              }
                                                            }
                                                    ?>
                     </tbody>
                </table>
          </div>
            <div class='panel panel-success'>
                 <div class='panel-heading'>
                    <h3 class='panel-title'><center>VICE PRESIDENTIAL CANDIDATES</center></h3>
                 </div>
                  <table class="table">
                      <thead>
                          <th>NAME</th>
                          <th>DEPARTMENT</th>
                          <th>RESULT</th>
                     </thead>
                       <tbody>
                            <?php
                               foreach ($data as $key => $value) {
                                 if ($value[5] === 'Vice-president') {
                            ?>
                                  <tr>
                                  <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                  <td><?=$value[4];?></td>
                                  <td><span class="badge"><?=$value[6];?></span></td>
                          </tr>
                                                              <?php
                                                                }
                                                                     }
                                                              ?>
                       </tbody>
                 </table>
            </div>
              <div class='panel panel-success'>
                  <div class='panel-heading'>
                    <h3 class='panel-title'><center>TREASURER CANDIDATES</center></h3>
                  </div>
                     <table class="table">
                         <thead>
                                <th>NAME</th>
                                <th>DEPARTMENT</th>
                                <th>RESULT</th>
                        </thead>
                             <tbody>
                                          <?php
                                            foreach ($data as $key => $value) {
                                              if ($value[5] === 'Treasurer') {
                                          ?>
                                            <tr>
                                                <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                                <td><?=$value[4];?></td>
                                                <td><span class="badge"><?=$value[6];?></span></td>
                    
                  
                                            </tr>
            <?php
                        }
                      }
                    ?>
                            </tbody>
                   </table>
               </div>
        <div class='panel panel-success'>
                  <div class='panel-heading'>
                    <h3 class='panel-title'><center>FINANCIAL SECRETARY CANDIDATES</center></h3>
                  </div>
                     <table class="table">
                         <thead>
                                <th>NAME</th>
                                <th>POSITION</th>
                                <th>RESULT</th>
                        </thead>
                             <tbody>
                                          <?php
                                            foreach ($data as $key => $value) {
                                              if ($value[5] === 'Financial secretary') {
                                          ?>
                                            <tr>
                                                <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                                <td><?=$value[4];?></td>
                                                <td><span class="badge"><?=$value[6];?></span></td>
                    
                  
                                            </tr>
            <?php
                        }
                      }
                    ?>
                            </tbody>
                   </table>
               </div>

        
  
  </div>
  </div>

</div>
<?php include("includes/footer.php");?>