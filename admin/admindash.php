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
	 
?>
<div class='admintitle' align ="center">
<h4>
<a href="logout.php" style="float:right">Logout</a></h4>
<h1>Welcome To Admin Dashboard</h1>
</div>


<div class="dashboard" align="center">
<table>
<tr><td>1.</td>
<td ><a href ="addstud.php"> Insert Student Details.</a></td>
</tr><br>
<tr>
<td>2.</td>
<td><a href="updatestud.php">Update Student Details.</a></td>
</tr>
<tr>
<td>3.</td>
<td><a href="deletestud.php">Delete Student Details.</td>
</tr>
</table></div>
</body>
</html>


