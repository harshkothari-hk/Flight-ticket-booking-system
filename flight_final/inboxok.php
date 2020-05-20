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

<script>
function abc()
{
	var a=document.getElementById("txt1").value;
	if(a<10 || a==null || a=="")
	{
		alert("error with Message");
		return false;
	}
}
</script>

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

<h1>Thank you for Request</h1>
<a href="out.php">Logout</a>
<hr>


<?php
if(isset($_POST['b1']))
{
	include("conn.php");
	$a=$_POST['txt1'];
	
	$q="insert into inbox(inb)values('$a')";
	$w=mysql_query($q);
	echo $a;
}
?>

</center>

<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>

</div>
</body>
</html>
