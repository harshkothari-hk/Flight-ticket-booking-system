<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skyway.com</title>
<style>
table
{
	font-size:28px;
}
button
{
	font-size:18px;
	font-weight:700;
	padding:20px;
}
center
{
	padding:50px;
}
</style>
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
<center>

<h1>Thank You For Registration</h1>
<hr>

<?php
if(isset($_POST['b1']))
{
	include("conn.php");
	
	$a=$_POST['t1'];
	$x=$_POST['t7'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];

	echo "Welcome User $a";


$q="INSERT INTO air  (`name`,`pass`, `add`, `mob`, `email`, `gen`, `currcity`) VALUES ('$a','$x', '$b', '$c', '$d', '$e', '$f');";
	$w=mysql_query($q);
/*if($w)
{
	echo "OK";
}*/

	
	echo "<table border='1' cellpadding='10' cellspacing='10'>
	<caption>Air Ticket</caption>
	<tr>
	<td>User Name:</td>
	<td>$a</td>
	</tr>
	<tr>
	<td>User Pasword:</td>
	<td>$x</td>
	</tr>
	<tr>
	<td>User Address:</td>
	<td>$b</td>
	</tr>
	<tr>
	<td>User Mobile:</td>
	<td>$c</td>
	</tr>
	<tr>
	<td>Email Name:</td>
	<td>$d</td>
	</tr>
	<tr>
	<td>User Gender:</td>
	<td>$e</td>
	</tr>
	<tr>
	<td>Current City:</td>
	<td>$f</td>
	</tr>
	</table>
	";

}

?>

<a href="index.php"><button>Go To Home</button></a>

</center>

<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>

</div>
</body>
</html>
