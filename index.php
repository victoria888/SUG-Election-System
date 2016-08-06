
<?php
include("includes/header.php");
?>
<html>
<body>
<div class="container">
    <div class="row-fluid">
      <div class="col-sm-12 col-md-12 col-lg-12">
          <nav class="navbar navbar-inverse" id="navbar">
            <div class="container-fluid">   
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
                        <li><a href="index.php"><span class="glyphicon glyphicon-home" id="home"></span></a></li> 
                        <li><a href="about1.php"> About</a></li> 
                      </ul> 
   
                      <ul class="nav user-menu pull-right">
                         <div class="btn-group" id="button"> 
                             <a class="btn btn-success" href="register.php">REGISTER</a>
                               <button type="button" class="btn btn-success" >
                                      <span class="glyphicon glyphicon-log-in"></span>LOGIN

                               </button> 
                                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"> 
                                        <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> 
                                  </button> 
                                             <ul class="dropdown-menu" role="menu"> 
                                                <li><a href="admin.php">Admin</a></li> 
                                                <li class="divider"></li> 
                                                <li><a href="login.php">Voter</a></li> 
                                             </ul>
                          </div>
                      </ul> 
                   </div>
            </div> 
          </nav>
     </div>
              
              <!--BEGINNING OF SLIDE-->

    <div class="col-sm-12 col-md-12 col-lg-12" id="slide">
      <div class="right col-lg-12 col-md-12 col-sm-12" id="slide">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                     <div class="item active">
                                        <img src="images/s2.jpg" alt="could not load image">
                                     </div>

                                     <div class="item">
                                      <img src="images/s3.jpg" alt="could not load image">
                                     </div>

                                     <div class="item">
                                      <img src="images/s3.jpg" alt="could not load image">
                                     </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
			        </div>
			</div>
    </div>
  </div>
</div>

</body>
</html>
<?php
include("includes/footer.php");
?>



