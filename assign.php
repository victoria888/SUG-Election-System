<?php
require_once'connect.php';
include("includes/header.php");

$cand_id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];

// echo $cand_id, $fname, $lname;

?>


<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12">
	  <div class='panel panel-success'>
             <div class='panel-heading'>
                <h3 class='panel-title'><center>ASSIGNING----</center></h3>
              </div>
                 <table class="table">
                   <thead>
                      <th>NAME</th>
                      <th>CHOOSE POST</th>
                      
                  </thead>
                     <tbody>
                        
                            <tr>
                            	<td><?php echo $fname, $lname?></td>
                            	<td>
                            	  <form role="role" action="processassign.php?cand_id=<?=$cand_id;?> &fname=<?=$fname;?> &lname=<?=($lname);?>" method="POST" >
                            		<select class="form-control" name="post">
                            		<?=
										  $sql_sel="SELECT * FROM post";
										      $result = mysql_query($sql_sel);
										      
										      if(isset($result))
										      {
										          while($retval = mysql_fetch_array($result))
										          {
										            
										              echo"<option>". $retval['position'] ."</option>";
										             
										          }
										          
										      }
                            		?>
                            			
                            		</select>
                            		
                            	</td>
                            </tr>
                          
                        
                     </tbody>
                 </table>

       </div>
           <center><input type="submit" class="form-control btn btn-success" ></center>
		</form>
			
		
	</div>
</div>