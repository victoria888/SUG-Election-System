<?php
       require_once("connect.php");
      include("includes/header.php");
      require_once( 'includes/session.php');
 require_once( 'includes/function.php');
  confirm_logged_in();
         $voterid = $_GET['voterid'];

      // $mysql='SELECT * FROM candidate';
        $mysql=" SELECT candidate_post.candidateID,candidate_post.postID, Fname, Lname, Department,Level,Manifesto, post.position,sex FROM candidate, post, candidate_post WHERE candidate_post.candidateID=candidate.candidateID AND post.postID=candidate_post.postID";
      // $result=mysql_query($mysql);
   // mysql_select_db('election'); 
  
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
        echo"<li ><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
        echo"<li class='active'><a href='viewcandidate.php?voterid=".urlencode($voterid)."'>View Candidate</a></li>";
        echo"<li><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";
        echo"<li><a href='result.php?voterid=".urlencode($voterid)."'>Result</a></li>";
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
    
         <div class='panel panel-success'>
             <div class='panel-heading'>
                <h3 class='panel-title'><center>PRESIDENTIAL CANDIDATES</center></h3>
              </div>
                 <table class="table">
                   <thead>
                      <th>NAME</th>
                      <th>DEPARTMENT</th>
                      <th>LEVEL</th>
                      <th>SEX</th>
                      <th>MANIFESTO</th>
                  </thead>
                     <tbody>
                          <?php
                           foreach ($data as $key => $value) {
                            if ($value[7] === 'President') {
                           ?>
                               <tr>
                                    <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
	                                <td><?=$value[4];?></td>
	                                <td><?=$value[5];?></td>
	                                <td><?=$value[8];?></td>
	                                <td><?=$value[6];?></td>
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
                      <th>LEVEL</th>
                      <th>SEX</th>
                      <th>MANIFESTO</th>
                     </thead>
                       <tbody>
                            <?php
                               foreach ($data as $key => $value) {
                                 if ($value[7] === 'Vice-president') {
                            ?>
                                  <tr>
                                        <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
			                            <td><?=$value[4];?></td>
			                            <td><?=$value[5];?></td>
			                            <td><?=$value[8];?></td>
			                            <td><?=$value[6];?></td>
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
		                      <th>LEVEL</th>
		                      <th>SEX</th>
		                      <th>MANIFESTO</th>
                        </thead>
                             <tbody>
                                          <?php
                                            foreach ($data as $key => $value) {
                                              if ($value[7] === 'Treasurer') {
                                          ?>
                                            <tr>
                                                 <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                                <td><?=$value[4];?></td>
                                                <td><?=$value[5];?></td>
                                                <td><?=$value[8];?></td>
                                                <td><?=$value[6];?></td>
                    
                  
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
		                      <th>DEPARTMENT</th>
		                      <th>LEVEL</th>
		                      <th>SEX</th>
		                      <th>MANIFESTO</th>
                        </thead>
                             <tbody>
                                          <?php
                                            foreach ($data as $key => $value) {
                                              if ($value[7] === 'Financial secretary') {
                                          ?>
                                            <tr>
                                                <td><?=$value[2];?> &nbsp; <?=$value[3];?></td>
                                                <td><?=$value[4];?></td>
                                                <td><?=$value[5];?></td>
                                                <td><?=$value[8];?></td>
                                                <td><?=$value[6];?></td>
                    
                  
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
<div id="navigation_up_down_3594">
    <noscript>Javascript is disable - <a href="http://www.webestools.com/">http://www.webestools.com/</a> - 
    <a href="http://www.webestools.com/navigation-buttons-generator-scroll-top-bottom-shortcut-page-up-down-scroll-buttons-javascript.html">Navigation Buttons Generator
    </a></noscript><script type="text/javascript" src="http://services.webestools.com/navigation_up_down/8-3594-right.js"></script></div>
<?php include('includes/footer.php');?>