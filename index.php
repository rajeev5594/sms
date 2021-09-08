<html>
<head>
<title>Student management system</title>
</head>
<body bgcolor="lightblue ">
<a href="login.php" style="float:right"><b>Admin Login</b></a>
<h1 align="center" style="color:blue">STUDENT MANAGEMENT SYSTEM</h1>
<h3 align="center" style="color:blue" >UNIVERSITY OF THE PEOPLE</h3><br>
<h4 align="center" style="color:red" >The Education Revolution</h4>
<h3><marquee>Welcome to Our Portal!</marquee></h3>
<p><I>Our Student information management System include all the details about a student.This is designed for administrative department,where Admin can login into portal by providing valid username and password and Existing student can see their complete details by providing rollno and standard.<I></p> 
<form method="post" action="index.php">
<table align="center" border="1" style="margin-top:100px">
<tr >
<td colspan="2" align="center"><b>Existing Students Login Here</b></td></tr>
<tr>
<td>Choose Standard</td>
<td>
<select name="std">
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
<td>Enter Roll No</td>
<td><input type="number" name="rollno" placeholder="Enter RollNo" required="required"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);
}
?>







