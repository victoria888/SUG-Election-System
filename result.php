<?php
       require_once("connect.php");
       include("includes/header.php");
       require_once( 'includes/session.php');
       require_once( 'includes/function.php');
    confirm_logged_in();
      $voterid = $_GET['voterid'];
      $mysql='SELECT votes.candidateID,votes.postID, `Fname`, `Lname`, `Department`, post.position, count(*) FROM `candidate`, `post`, `votes` WHERE votes.candidateID=candidate.candidateID AND post.postID=votes.postID GROUP BY votes.candidateID, votes.postID';
  
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
<div class ="container">
    <div class ="row-fluid">
      <div class="col-sm-12 col-md-12 col-lg-12">
           <nav class="navbar navbar-inverse" id="navbar">
             <div class="navbar-header" id="brand">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
             </div> 
   <!--mobile collapse menu button-->

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
           <?php 
            echo"<li><a href='voterspage.php?voterid=".urlencode($voterid)."'><span class='glyphicon glyphicon-home' id='home'></span></a></li>"; 
            echo"<li><a href='about.php?voterid=".urlencode($voterid)."'> About</a></li> ";
            echo"<li><a href='viewcandidate.php?voterid=".urlencode($voterid)."'>View Candidate</a></li>";
            echo"<li><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";
            echo"<li><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
            echo"<li class='active'><a href='result.php?voterid=".urlencode($voterid)."'>Result</a></li>";
           ?>
      </ul> 
   
              <ul class="nav user-menu pull-right">
                   <ul class="nav navbar-nav navbar-right">
                         <a href="logoutprocess.php" class="btn btn-success" id="button">
                            <span class="glyphicon glyphicon-log-out"></span>LOGOUT
                          </a>
                   </ul> 
              </ul>
    </div>
       </div>
<div class="col-md-12">                                 
    <form action='votingprocess.php' method='POST'>
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
    </form>
</div>
    </div>
</div>
<?php include('includes/footer.php');?>