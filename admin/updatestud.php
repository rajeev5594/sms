<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo"";
}
else
{
	header('location:../login.php');
}
?>
<?php
include('titlehead.php');
include('header.php');
?>

<table align="center" >
<form action="updatestud.php" method="post">
<br><br>
<tr>
<td>Enter Standard:</td>
<td><input type="number" name="std" placeholder="Enter your Std" required/></td>
<td>Enter Student name:</td>
<td><input type="text" name="fname" placeholder="Enter your full name" required/></td>
<td colspan="2" align="center">

<input type="Submit" name="submit" value="Search"/></td>
</tr>
</form>
</table>
<br><br>
<table align="center" border="1" width="80%" style="margin-top:10px;" >
<tr>
<th>S.No</th><th>Image</th><th>Full Name</th><th>Rollno</th><th>Edit</th>
</tr> 
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$standard=$_POST['std'];
	$name=$_POST['fname'];
	$sql="SELECT * FROM student WHERE standard ='$standard' AND name LIKE '%$name%'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_num_rows($run);
	
	if($data<1)
	{
		echo"No Records found";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
        $count++;   			
?>
<tr>
<td align ="center"><?php echo $count;?></td>
<td align="center"><img src="../dataimg/ <?php echo$data['image'];?>"style="max-width:100px;"/></td>
<td align="center"><?php echo $data['name'];?></td>
<td align="center"><?php echo $data['rollno'];?></td>
<td align="center"><a href="updateform.php? sid=<?php echo $data['id'];?>">Edit</a></td>
<?php
}
}
}
?>
</table>
</html>