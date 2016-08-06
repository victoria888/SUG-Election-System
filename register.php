<?php
include("includes/header.php");
include("includes/menu.php");
?>

<html>
  <body> 
     <div class="container" id="bigbox">
        <div class="row-fluid">
            <div class="col-md-8">
                <h1>Voter's Registration</h1>
                <h4>Please fill the registration form</h4><hr/>
                    <form class="form-horizontal" role="form" action="registerprocess.php" method="POST"> 
                        <div class="form-group">  
                            <label for="firstname" class="col-sm-2 control-label">First Name</label> 
                           <div class="col-sm-10"> 
                                 <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="Fname"> 
	                       </div> 
	                   </div>
	 
	                   <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Last Name" name="Lname">
                                </div>
                       </div>
	 
	                             <div class="form-group">
		                               <label for="name" class="col-sm-2 control-label">MatricNumber</label>
		                                   <div class="col-sm-10">
                                              <input type="text" class="form-control" id="name" placeholder="Matric Number" name="Matricno">
			                               </div>
			                      </div>
        
		                 <div class="form-group" >
		                        <label for="name" class="col-sm-2 control-label">Email</label> 
		                           <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="e.g john@example.com" name="Email">
			                       </div>
			            </div>
			   
			                   <div class="form-group" >
		                              <label for="name" class="col-sm-2 control-label">Phone Number</label> 
		                                  <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="00000000000" name="Phoneno">
			                              </div>
			                   </div>
           
		                              <div class="form-group">
	                                        <label for="name" class="col-sm-2 control-label">Sex</label>
                                                  <div class="col-sm-10">		
			                                            <select class="form-control" id="name" name="Sex">
			                                                <option>Male</option>
			                                                <option>Female</option>
			                                            </select>
			                                      </div>
			                          </div>
			
			  
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
		                                           </div>
		                                    </div>
		
		                         <div class="form-group">
		                             <label for="name" class="col-sm-2 control-label">Faculty</label>
		                                     <div class="col-sm-10">
		                                          <select class="form-control" id="name"  name="Faculty">
		
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
                                              </div>
                                 </div>
			  
											  <div class="form-group">
								                    <label for="name" class="col-sm-2 control-label">Department</label>
								                       <div class="col-sm-10">		
								                            <input type="text" class="form-control" id="name" placeholder="department" name="Department">
								                       </div>
								              </div>    
								 



                                   <div class="form-group">
                                         <label for="name" class="col-sm-2 control-label">Password</label>
                                              <div class="col-sm-10 ">	  
                                                   <input type="password" class="form-control" id="name" placeholder="Password" name="Password">
                                               </div>
          	  
                                    </div>
 
									     <center>
									     	<input type="submit" class="form-control btn btn-success" id="name" name="Register" value="Register">
									     </center>
                    </form>
            </div>
        </div>
    </div>
  
   </body>
</html>

<?php
include("includes/footer.php");?>