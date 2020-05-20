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
<h1>Insert Flight List</h1>
<a href="out.php">Logout</a>
<br />
<br />
<form method="post">
<table border="0" cellpadding="10" cellspacing="5">
<tr>
<td>List No.</td>
<td><input type="text" name="t01" required></td>
</tr>

<tr>
<td>Flight Seat's</td>
<td><input type="text" name="t02" required></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Insert" name="b1"></td>
</tr>
</table>
</form>
</div>
<hr>
<?php
include("conn.php");
if(isset($_POST['b1']))
{
	$a=$_POST['t01'];
	$b=$_POST['t02'];	
	
	$q="UPDATE `flight`.`seat` SET `setx` = '$a' WHERE `seat`.`id` = $b;";
	$w=mysql_query($q);
	if($w)
	{
		echo "<script>alert('Value Has Been Updated');</script>";
	}
	else
	{
		echo "<script>alert('Err');</script>";
	}
}
?>


<center>
<h1>Flight Details</h1>
<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Flight No.</th>
<th>Seat's</th>
</tr>
<?php

$q="select * from seat";
$w=mysql_query($q);

while($row=mysql_fetch_array($w)):
?>
<tr>
<td><?php echo $row['0']; ?></td>
<td><?php echo $row['1']; ?></td>
<td><?php echo $row['2']; ?></td>
</tr>
<?php
endwhile;
?>
</table>
</center>
</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
