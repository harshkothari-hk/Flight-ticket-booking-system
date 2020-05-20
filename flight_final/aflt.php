<?php
session_start();
if(!isset($_SESSION["my"]))
{
	header("location:index.php");
}
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
<h1>Insert Flight Details</h1>
<a href="out.php">Logout</a>
<br />
<br />
<a href="aflt3.php">Update or delete</a>

<br />
<form method="post" action="aflt2.php">
<table border="0" cellpadding="10" cellspacing="5">
<tr>
<td>Flight Name</td>
<td><input type="text" name="t01" required></td>
</tr>

<tr>
<td>Flight No.</td>
<td><input type="text" name="t1" required></td>
</tr>
<tr>
<td>Dispatcher</td>
<td><input type="date" name="t2" required></td>
</tr>
<tr>
<td>Arrival</td>
<td><input type="date" name="t3" required></td>
</tr>
<tr>
<td>From City</td>
<td><input type="text" name="t4" required></td>
</tr>
<tr>
<td>To City</td>
<td><input type="text" name="t5" required></td>
</tr>
<tr>
<td>1st Class</td>
<td><input type="text" name="t6" required></td>
</tr>
<tr>
<td>2nd Class</td>
<td><input type="text" name="t7" required></td>
</tr>
<tr>
<td>3rd Class</td>
<td><input type="text" name="t8" required></td>
</tr>
<tr>
<td>Seats Available</td>
<td><input type="text" name="t9" required></td>
</tr>
<tr>
<td>Offers</td>
<td><input type="text" name="t10" required></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Insert" name="b1"></td>
</tr>
</table>
</form>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
