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
include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM student WHERE id='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>

<form action="updatedata.php" method="post" enctype="multipart/form-data" >
<table border="1" align="center" style="width:70% ;margin-top:40px;">
<tr>
<td>Rollno :</td>
<td ><input type="text" name="rollno" value="<?php echo $data['rollno']?>" required></td>
</tr>
<tr>
<td>Full name :</td>
<td><input type="text" name="fname" value="<?php echo $data['name']?>" required ></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city" value="<?php echo $data['city']?>" required="required"></td>
</tr>
<tr>
<td>Parent contact no:</td>
<td><input type="text" name="pcon" value="<?php echo $data['pcont']?>" required></td>
</tr>
<tr>
<td>Standard:</td>
<td><input type="text" name="std" value=" <?php echo $data['standard']?>" required="required"></td>
</tr>

<tr>
<td>Image:</td>
<td><input type ="file" name="simg" required ></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['id']?>"/>
<input type="Submit" name="submit" value="submit"/></td>
</tr>

</form>
</body>
</html>