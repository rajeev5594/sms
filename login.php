<?php

session_start();
include("dbcon.php");
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

<html>
<head>
<title>sms</title>
</head>
<body bgcolor="lightblue">
<h3 align="center" style="color:blue">UNIVERSITY OF THE PEOPLE</h3>
<h5 align="center" style="color:blue">THE EDUCATION REVOLUTION</h5>
<br>
<p><marquee><b><I>Welcome To Admin Panel<I><b></marquee></p>
<form action=""method="post">
<table align="center" border="1" style="margin-top:100px">
<tr>
<td colspan="2" align="center"><b>Sign in</b></td></tr>
<tr>
<td>Username </td>
<td><input type="text"  name="user" value="" required/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password"  name="pass" value="" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Login"/></td></tr>
</table>
</form>
<h4 align="center"><a href="signup.php">New User Register Here</a></h4>
<h4 align="center"><a href="index.php" >Back To HomePage</a></h4><br>
<h4 align="center"><a href="#">Forgotten Password</a></h4>
</body>
</html>

<!--<!DOCTYPE html>
<head>
<title>Registration form</title> 
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2>Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control " required>
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control " required>
</div>
<button type="submit"  class="btn btn-primary"s>Login</button>
</form>
</div>

<div class="col-md-6 login-right" >
<h2>Register Here</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control " required>
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control " required>
</div>
<button type="submit"  class="btn btn-primary"s>Register</button>
</form>
</div>
</div>
</div>
</body>
</html>
-->

<?php

if(isset($_POST['login']))
{
	$user1 = $_POST['user'];
	$pwd = $_POST['pass'];
	$query = "SELECT * FROM admin WHERE username='$user1' && password='$pwd'";
    $data = mysqli_query($con,$query );
    $total = mysqli_num_rows($data);
    if($total<1)
	{
		?>
		<script>
		alert('Username or Password not match');
		window.open('login.php','_self');
</script>
<?php
	}
else
{
	$data1=mysqli_fetch_assoc($data);
	$id=$data1['id'];
	
	$_SESSION['uid']=$id;
	header('location:admin/admindash.php');

}	
}
?>	
	
	
	










