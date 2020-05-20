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

<style>
th
{
	background:#6CC;
	border:3px solid #069;
	border-radius: 5px 35px 5px 35px;
}
th a
{
	text-decoration:none;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color:#FFF;
	font-weight:lighter;
}
th:hover
{
	background:#0FF;
}
</style>

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
<h1>Select Options</h1>
<br />
<a href="out.php">Logout</a>
<br />
<br />
<br />
<table border="0" cellpadding="10" cellspacing="5">
<tr>
<th><a href="adminpage.php"><h2>Show Registration</h2></a></th>
</tr>
<tr>
<th><a href="bookpage.php"><h2>Show Booking</h2></a></th>
</tr>
<tr>
<th><a href="inbe.php"><h2>Show Inbox</h2></a></th>
</tr>
<tr>
<th><a href="lst.php"><h2>Add Flights List</h2></a></th>
</tr>
</table>

</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
