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

<h1>Inbox Your Querys</h1>
<a href="out.php">Logout</a>
<br />
<br />
<a href="check.php">Go back</a>
<hr>
<br />
<form method="post">
Booking Cancellation: <input type="text" value="

<?php
include("conn.php");
$x=$_SESSION['xz'];
echo $x;
?>

" name="cal" readonly="readonly" class="cal" required="required">
<input type="submit" name="c1x" value="Cancled">
</form>
<?php
if(isset($_POST['c1x']))
{
	
	$a=$_POST['cal'];
	$q="delete from book where id='$a'";
	$w=mysql_query($q);
	
	if($w>0)
	{
		echo "<script>alert('Your Booking has been Cancled');</script>";
	}
}
?>
<br />
<br />
<br />
<form method="post" action="inboxok.php">
<textarea cols="70" rows="15" pattern=".{10,}" title="Ten or more characters" type="text" placeholder="Request For Ticket Booking Cancellation" required="required" id="txt1" name="txt1"></textarea>
<br />
<input type="submit" name="b1"   value="SEND">
</form>
</center>

<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>

</div>
</body>
</html>
