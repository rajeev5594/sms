<?php
session_start();
//header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'sms');

$name=$_POST['user'];
$pass=$_POST['password'];

$qry="select * from admin where username='$name'";

$result=mysqli_query($con,$qry);

$num=mysqli_num_rows($result);

if($num==1){
	?>
	<script>
	alert('Username Already Exist!');
	window.open('signup.php','_self');
	</script>
	<?php

}else{
	$reg="insert into admin(username,password) values('$name','$pass')";
    mysqli_query($con, $reg);
    ?>
	<script>
	alert('Registration Successful!Kindely Signin');
	window.open('login.php','_self');
	</script>
<?php
}
?>
