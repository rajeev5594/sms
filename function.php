<?php
function showdetails($standard,$rollno)
{
	include('dbcon.php');
	$sql="SELECT * FROM student WHERE rollno='$rollno' AND standard='$standard'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
	
	?>
	
		<table border="1" style="width:50%; margin-top:20px" align="center" >
		<tr>
		<th colspan="3">Student Information</th>
		</tr>
		<tr>
		    <td rowspan="5" align="center"><img src="dataimage\<?php echo $data['image']?>" style="max-height:150px; max-width:120px; padding-left:30px;" /></td>
			
			<th align="left">Rollno</th>
			<td><?php echo $data['rollno'];?></td> 
			</tr>
			<tr>
			<th align="left">Name</th>
			<td><?php echo $data['name'];?></td> 
			</tr>
			<tr>
			<th align="left">Standard</th>
			<td><?php echo $data['standard'];?></td> 
			</tr>
			<tr>
			<th align="left">Parent contact number</th>
			<td><?php echo $data['pcont'];?></td> 
			</tr>
			<tr>
			<th align="left">City</th>
			<td><?php echo $data['city'];?></td> 
			</tr>
				
	</table>
	<?php
	}
	else
	{
		echo"<script>alert('no student found.')</script>";
		
	}
}
	?>
	
	
	
	
	
	
	