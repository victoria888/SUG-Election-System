<?php include("includes/header.php");?>
<?php include("includes/menu.php");?>

<div class="container" id="info">
   <div class="col-md-12">
        <h1>Login</h1><hr>
        <h4>Provide your login details.</h4><br/>
            <form class="form-horizontal" role="form" action="processlogin.php" method="post">
                <div class="row-fluid"> 
                    <div class="form-group"> 
                        <label for="firstname" class="col-sm-2 control-label">Matric Number</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="name" placeholder="Enter Matric Number" name="Mnumber">
                            </div>
                     </div>
                     <div class="form-group"> 
                         <label for="lastname" class="col-sm-2 control-label">Password</label> 
                            <div class="col-sm-10"> 
                                 <input type="password" class="form-control" id="name" placeholder="Enter password" name="password">
                            </div> 
                     </div> 
                            <div class="form-group"> 
                               <div class="col-sm-offset-2 col-sm-10"> 
                                  <div class="checkbox"> 
                                       <label> <input type="checkbox"> Remember me </label> 
                                   </div> 
                                </div>
                             </div>


                        <div class="col-sm-offset-2 col-sm-10">
                            <span class="divider" role="menuitem"></span><small role="menuitem">Not yet registered? 
							    <a href="register.php" class="signup">Register now!</a></small> 									
                        </div>

                           <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10"><br/> 
                                    <button type="submit" class="btn btn-success">LOGIN</button> 
                                </div> 
                           </div>
                </div>
            </form>

    </div>
</div>

<?php include("includes/footer.php")?>



