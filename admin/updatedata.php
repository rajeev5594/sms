<?php
include('../dbcon.php');
if(isset($_POST['submit']))
{

$rollno=$_POST['rollno'];
$name=$_POST['fname'];
$city=$_POST['city'];
$pcont=$_POST['pcon'];
$std=$_POST['std'];
$id=$_POST['sid'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimage/$imagename");
$sql="UPDATE student SET rollno='$rollno',name='$name',city='$city',pcont='$pcont',standard='$std',image='$imagename'WHERE id='$id'";
$run=mysqli_query($con,$sql);

if($run==true)
{
	?>
	<script>
	alert('Data updated successfully');
	window.open('updateform.php?sid=<?php echo $id;?>','_self'); 
	</script>
<?php
}
}
?>