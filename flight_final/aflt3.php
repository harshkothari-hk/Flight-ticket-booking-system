<?php
session_start();
if(!isset($_SESSION["my"]))
{
	header("location:index.php");
}
include("conn.php");
?>
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
<h1>Update Flight Details</h1>
<a href="out.php">Logout</a>
<br />
<br />

<form action="#" method="post">
<table>
<tr>
<td>ID No.</td>
<td><input type="text" name="u1"></td>
</tr>
<tr>
<td>Flight No.</td>
<td><input type="text" name="u2"></td>
</tr>
<tr>
<td>Dispatcher</td>
<td><input type="text" name="u3"></td>
</tr>
<tr>
<td>Arrival</td>
<td><input type="text" name="u4"></td>
</tr>
<tr>
<td>From City</td>
<td><input type="text" name="u5"></td>
</tr>
<tr>
<td>To City</td>
<td><input type="text" name="u6"></td>
</tr>
<tr>
<td>1st Class</td>
<td><input type="text" name="u7"></td>
</tr>
<tr>
<td>2nd Class</td>
<td><input type="text" name="u8"></td>
</tr>
<tr>
<td>3rd Class</td>
<td><input type="text" name="u9"></td>
</tr>
<tr>
<td>Seats Available</td>
<td><input type="text" name="u10"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="ux1" value="Update"></td>
</tr>
</table>
</form>


<?php
if(isset($_POST['ux1']))
{
	$a=$_POST['u1'];
	$b=$_POST['u2'];
	$c=$_POST['u3'];
	$d=$_POST['u4'];
	$e=$_POST['u5'];
	$f=$_POST['u6'];
	$g=$_POST['u7'];
	$h=$_POST['u8'];
	$i=$_POST['u9'];
	$j=$_POST['u10'];
	
	$q="UPDATE `flight`.`adflight` SET `fno` = '$b', `dis` = '$c', `arr` = '$d', `fcity` = '$e', `tocity` = '$f', `fclass` = '$g', `sclass` = '$h', `tclass` = '$i', `sava` = '$j' WHERE `adflight`.`id` = $a;";
	$w=mysql_query($q);
	
	if($w >0)
	{
		echo "<h3>Value is Updated</h3>";
	}
}
?>

<h3>or</h3>

<h2>Delete Flight</h2>

<form method="post" action="#">
<table>
<tr>
<td>ID No.</td>
<td><input type="text" name="x1"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Delete" name="x01"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['x01']))
{
	$x=$_POST['x1'];
	
	$qx="delete from adflight where id=$x";
	$wx=mysql_query($qx);
	if($wx>0)
	{
		echo "<script>alert('Value is Deleted');</script>";
	}
}
?>

</center>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>



