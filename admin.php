

<?php include("includes/header.php");
include("includes/menu.php");

?>
<div class="container" id="info">
    
<h1>ADMIN Login</h1><hr>
<h4>Only Registered Administrators should login.</h4><br/>
<form class="form-horizontal" role="form" action="adminlogin.php" method="post">
<div class="row-fluid"> 
<div class="form-group"> 

<div class="form-group"> 
<label for="firstname" class="col-sm-2 control-label">Username</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="name" placeholder="Enter username" name="username"> 
</div> </div>
 <div class="form-group"> 
<label for="lastname" class="col-sm-2 control-label">Password</label> 
<div class="col-sm-10"> 
<input type="password" class="form-control" id="name" placeholder="Enter password" name="password"> 
</div> </div> 

 
<div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> 
<button type="submit" class="btn btn-success">Sign in</button> </div> </div> </form>

</div></div>
</div>
<?php include("includes/footer.php")?>
