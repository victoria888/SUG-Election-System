<?php
include("includes/header.php");
require_once 'connect.php';
echo "<div class='container'>";

while ($row=mysql_fetch_array($retval, MYSQL_NUM))
				{
				  $query = 'SELECT  * FROM candidate';
			mysql_select_db('election');
			$retval = mysql_query( $query);
			if(! $retval ) 
			{

				die('Could not get data: ' . mysql_error()); 
			}?>
        <form action='votingprocess.php' method='POST'>
   <div>
		  
		   <div>
		   
  <?php if($row[3] === 'President')
					{ ?>  
						<div class='panel panel-success'>
                     <div class='panel-heading'>
	               <h3 class='panel-title'><center>PRESIDENTIAL CANDIDATES</center></h3> </div>
    	           <div class='panel-body'></div>
				   
				   <table class='table'> 
				   <th>NAME</th> <th>DEPARTMENT</th> <th>VOTE</th>
						<tr><td><?php{$row[1]}?> &nbsp; <?php{$row[2]}?></td>  <td><?php{$row[6]}?></td>
						
						<div class='checkbox'>
						<td><label>
						<input type='radio' name='red' checked> 
						</label></td>
						</div>
						  </tr>
						  </table>
						  </div>
					<?php
					}?>			




		  
		 
			
			
		  
		   
				
				
 
					
				<?php}
			
			
				
				
				
				
				echo"<button type='submit' class='btn btn-success'>Submit</button>";
				
				echo"</form>";
				echo"  </div>";
		   ?>