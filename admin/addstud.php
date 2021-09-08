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
     include('header.php');
     include('titlehead.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Add student Details.</title>
</head>
<body>
<br><br>
<form action="addstud.php" method="post" enctype="multipart/form-data">
<table border="1" align="center">
<tr>
<td>RollNo :</td>
<td><input type="text" name="rollno"/></td>
</tr>
<tr>
<td>Full Name :</td>
<td><input type="text" name="fname"/></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city"/></td>
</tr>
<tr>
<td>Parent Contact Number:</td>
<td><input type="text" name="pcon"/></td>
</tr>
<tr>
<td>Standard:</td>
<td align="left"><select name="std">
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
<option value="7">7th</option>
<option value="8">8th</option>
<option value="9">9th</option>
<option value="10">10th</option>

</tr>


<tr>
<td>Image:</td>
<td><input type ="file" name="simg" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" name="submit" value="submit"/></td>
</tr>

</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
include('../dbcon.php');
$rollno=$_POST['rollno'];
$name=$_POST['fname'];
$city=$_POST['city'];
$pcont=$_POST['pcon'];
$std=$_POST['std'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimage/$imagename");
$sql="INSERT INTO student (rollno,name,city,pcont,standard,image) VALUES ('$rollno','$name','$city','$pcont','$std','$imagename')";
$run=mysqli_query($con,$sql);

if($run==true)
{
	?>
	<script>
	alert('Data inserted successfully');
	</script>
<?php
}
}
?>





 











