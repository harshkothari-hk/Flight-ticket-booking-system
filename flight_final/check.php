<?php
session_start();
if(!isset($_SESSION['my']))
{
	header("location:log.php");
}
?>

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

<h1>Enter Your ID:</h1>
<br />
<a href="out.php">Logout</a>
<hr>
<br />
<br />
<form method="post">
Check Your Availability: <input type="text" placeholder="Availability" name="cal" class="cal" required="required">
<input type="submit" name="c1x" value="SHOW">
</form>
<br />

<?php
if(isset($_POST['c1x']))
{
	include("conn.php");
	$a=$_POST['cal'];
	$q="select * from book where id='$a'";
	$w=mysql_query($q);
	
	if($rox=mysql_fetch_array($w)):

	echo "<table border='0' cellpadding='10' cellspacing='10'>
	<caption>Air Ticket</caption>
	<tr>
	<th class='abc'>Passenger  ID:</th>
	<th class='abc'>$rox[0]</th>
	</tr>
	<tr>
	<td>Passenger Name:</td>
	<td>$rox[1]</td>
	</tr>
	<tr>
	<td>Flight Name:</td>
	<td>$rox[2]</td>
	</tr>
	<tr>
	<td>From City:</td>
	<td>$rox[3]</td>
	</tr>

	<tr>
	<td>To City:</td>
	<td>$rox[4]</td>
	</tr>
	<tr>
	<td>Booking Date:</td>
	<td>$rox[5]</td>
	</tr>
	<tr>
	<td>Arrival Time:</td>
	<td>$rox[6]</td>
	</tr>
	<tr>
	<td>Deparcher Time:</td>
	<td>$rox[7]</td>
	</tr>
	<tr>
	<td>Number Of Adult Passengers:</td>
	<td>$rox[8]</td>
	</tr>
	<tr>
	<td>Total Charges:</td>
	<td>$rox[9]</td>
	</tr>
	<tr>
	<td>Ticket Cancellation Or Update</td>
	<td><a href='usinbox2.php'><button>Goto Page</button></a></td>
	</tr>
	</table>
	";
	endif;
	
	$_SESSION['xz']=$rox[0];
	
}
?>
<br />
</center>

<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>

</div>
</body>
</html>
