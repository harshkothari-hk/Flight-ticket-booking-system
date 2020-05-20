<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skyway.com</title>
<link href="style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div class="main">
<div class="header">
<h1>Skyway</h1>
<div class="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About us</a></li>
<li><a href="reg.php">Registration</a></li>
<li><a href="flights.php">Flight</a></li>
<li><a href="log.php">Login</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</div>

</div>
<div class="mid">


<div class="log">
<center>
<h1>Admin Login</h1>
<form method="post">
<table cellpadding="10" cellspacing="5">
<tr>
<td>Admin Name:</td>
<td><input type="text" name="u1"></td>
</tr>
<tr>
<td>Admin Password:</td>
<td><input type="password" name="u2"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="ux1" value="Login"></td>
</tr>
</table>
</form>
<?php
include("conn.php");
if(isset($_POST['ux1']))
{
	$a=$_POST['u1'];
	$b=$_POST['u2'];
	
	$q="select * from adm where admname='$a' and admpass='$b'";
	$w=mysql_query($q);
	$x=mysql_num_rows($w);
	if($x>0)
	{
		session_start();
		$_SESSION["my"]=$a;
		header("location:ad.php");
	}
	else
	{
		echo "<p>error with name password</p>";
	}
}
?>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
