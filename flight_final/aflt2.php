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
<h1>Insert Flight Details</h1>
<a href="out.php">Logout</a>
<br />
<br />

<?php
if(isset($_POST['b1']))
{
	
		$ax=$_POST['t01'];
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$_POST['t3'];
		$d=$_POST['t4'];
		$e=$_POST['t5'];
		$f=$_POST['t6'];
		$g=$_POST['t7'];
		$h=$_POST['t8'];
		$i=$_POST['t9'];
		$j=$_POST['t10'];
		
		$q="insert into adflight(fnm,fno,dis,arr,fcity,tocity,fclass,sclass,tclass,sava,offers) values ('$ax','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
		
		$w=mysql_query($q);
		
		if($w);
		{
			echo "<p>Value Inserted</p>";
		}
		
}
?>

<form method="post" action="aflt2.php">
<table border="0" cellpadding="10" cellspacing="5">
<tr>
<td>Flight No.</td>
<td><?php echo $a;?></td>
</tr>
<tr>
<td>Dispatcher</td>
<td><?php echo $b;?></td>
</tr>
<tr>
<td>Arrival</td>
<td><?php echo $c;?></td>
</tr>
<tr>
<td>From City</td>
<td><?php echo $d;?></td>
</tr>
<tr>
<td>To City</td>
<td><?php echo $e;?></td>
</tr>
<tr>
<td>1st Class</td>
<td><?php echo $f;?></td>
</tr>
<tr>
<td>2nd Class</td>
<td><?php echo $g;?></td>
</tr>
<tr>
<td>3rd Class</td>
<td><?php echo $h;?></td>
</tr>
<tr>
<td>Seats Available</td>
<td><?php echo $i;?></td>
</tr>
</table>
</form>


</center>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
