<?php
include("includes/header.php");
 require_once("connect.php");
        require_once( 'includes/session.php');
 require_once( 'includes/function.php');
  confirm_logged_in();
$voterid = $_GET['voterid']; 
  $sql_sel="SELECT * FROM voter WHERE voterid = $voterid LIMIT 1";
     $result = mysql_query($sql_sel);
      if($result)
      {
          $row = mysql_fetch_array($result);
          
      }
      else{
      	die(mysql_error());
      }
                                         
                                         
?>


  <body> 
  
 


<div class="container">
  <div class="row-fluid">
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
        echo"<li class='active'><a href='processeditvoter.php?voterid=".urlencode($voterid)."'>Edit Profile</a></li>";
        echo"<li><a href='voting.php?voterid=".urlencode($voterid)."'> Vote</a></li>";
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
       
<div class="col-lg-12 col-md-12 col-sm-12"  id="bigbox">
<h1>PROFILE UPDATE</h1>
<h4>update the necessary information</h4><hr/>

<form class="form-horizontal" role="form" action="updateeditvoter.php?id=<?php echo $voterid;?>" method="POST"> 
 <div class="form-group">  
  <label for="firstname" class="col-sm-2 control-label">First Name</label> 
   <div class="col-sm-10"> 
    <input type="text" class="form-control" id="name"  name="Fname" value="<?php echo $row['Fname'];?>"> 
	 </div> </div>
	 
	  <div class="form-group">
 <label for="username" class="col-sm-2 control-label">Last Name</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="name" placeholder="Last Name" name="Lname" value="<?php echo $row['Lname'];?>">
 </div></div>
	 
	 <div class="form-group">
		 <label for="name" class="col-sm-2 control-label">MatricNumber</label>
		 <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Matric Number" name="Matricno" disabled value="<?php echo $row['Matricno'];?>">
			  </div></div>
        
		 <div class="form-group" >
		<label for="name" class="col-sm-2 control-label">Email</label> 
		<div class="col-sm-10">
               <input type="text" class="form-control" id="name" placeholder="e.g john@example.com" name="Email" value="<?php echo $row['Email'];?>">
			   </div></div>
			   
			   <div class="form-group" >
		<label for="name" class="col-sm-2 control-label">Phone Number</label> 
		<div class="col-sm-10">
               <input type="text" class="form-control" id="name" placeholder="08012345678" name="Phoneno" value="<?php echo $row['Phoneno'];?>">
			   </div></div>
           
		   <div class="form-group">
	    <label for="name" class="col-sm-2 control-label">Sex</label>
         <div class="col-sm-10">		
			 <select class="form-control" id="name" name="Sex">
			 <option>Male</option>
			 <option>Female</option>
			 </select></div></div>
			
			  
			  <div class="form-group">
			  <label for="name"class="col-sm-2 control-label">level</label>
			  <div class="col-sm-10">
			  <select class="form-control" id="name"  name="Level">
                   <option>100</option>
                   <option>200</option>
                   <option>300</option>
                   <option>400</option>
                   <option>500</option>
                   <option>600</option>
               </select>
		        </div></div>
		
		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Faculty</label>
		<div class="col-sm-10">
		<select class="form-control" id="name"  name="Faculty" value="<?php echo $row['name'];?>">
		
		   <option>Agriculture</option>
		   <option>Arts</option>
		   <option>Biological sciences</option>
		   <option>Business Administration</option>
		   <option>Education</option>
		   <option>Engineering</option>
		   <option>Dentistry</option>
		   <option>Environmental Studies</option>
		   <option>Health Science and Technology</option>
		   <option>Law</option>
		   <option>Pharmaceutical Sciences</option>
		   <option>Physical Sciences</option>
		   <option>Social Sciences</option>
		   <option>Medical Sciences</option>
		   <option>Veterinary Medicine</option>
		</select>
              </div></div>
			  
			  <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">		
           <input type="text" class="form-control" id="name" placeholder="department" name="Department" value="<?php echo $row['Department'];?>">
    </div></div>    
 



         <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Password</label>
       <div class="col-sm-10 ">	  
<input type="password" class="form-control" id="name" placeholder="Password" name="Password" value="<?php echo $row['Password'];?>">
 </div>
          	  
 </div>
 
     <center>
     	<button type="submit" class="btn btn-success">UPDATE</butto>
     </center>


</form>

 </div>

</div>
  </div>
</body>


<?php
include("includes/footer.php");?>