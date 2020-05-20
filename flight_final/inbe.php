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
<li><a href="flight_show.php">Flight</a></li>
<li><a href="log.php">Login</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</div>

</div>
<div class="mid">


<div class="log">
<center>
<h1>Show Inbox</h1>
<hr>

<a href="ad.php">Goback</a> 
or
<a href="out.php">Logout</a>
<br />
<br />


<table border="1" cellpadding="10" width="800" cellspacing="5">
<tr>
<th width="80">ID:</th>
<th>Message</th>
</tr>

<?php 
include("conn.php");
$q="select * from inbox";
$w=mysql_query($q);
while($row=mysql_fetch_array($w)):
?>

<tr>
<th width="80"><?php echo $row[0];?></th>
<th><?php echo $row[1];?></th>
</tr>

<?php
endwhile;
?>
</table>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020
</h3>
</div>
</div>
</body>
</html>
