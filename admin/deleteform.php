<?php
include('../dbcon.php');
$id=$_REQUEST['sid'];
$sql="DELETE FROM student WHERE id='$id'";
$run=mysqli_query($con,$sql);

if($run==true)
{
	?>
	<script>
	alert('Data deleted successfully');
	window.open('deletestud.php','_self'); 
	</script>
<?php
}
?>
