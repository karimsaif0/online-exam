<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_offering.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Question" ><i class="icon-plus-sign icon-large"></i> Add Question</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_members=mysql_query("select * from offering");
	             $count = mysql_num_rows($count_members);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Registered Question List</div>
                          <div class="muted pull-right">
								Number of Registered Question: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Question List 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

													
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_Visitors.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
                	<th>Exam Description</th>
					<th>Question Description </th>
					<th>Answer</th>
			        				                   	
                   		
                    				
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$members_query = mysql_query("select * from offering")or die(mysql_error());
		while($row = mysql_fetch_array($members_query)){
		$username = $row['offeringid'];
	
		?>
									
		<tr>
		    <td><?php echo $row['examdesc'];?></td>
			<td><?php echo $row['questiondesc']; ?></td>
			<td><?php echo $row['questionanswer']; ?></td>
						
           
            </tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>
	
</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>