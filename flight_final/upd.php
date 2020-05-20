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


<script>
  function val()
  {
	  var a=document.getElementById("ct1").value;
	  var b=document.getElementById("ct2").value;
	  
	  if(a==b)
	  {
		  alert("error with city's selection");
		  return false;
	  }
	  
	  var x=document.getElementById("a4").value;
	  var y=document.getElementById("a5").value;
	  
	  if(a==b)
	  {
		  alert("error with Timing");
		  return false;
	  }
	  }
  </script>
  
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
<h1>Show Inbox</h1>
<hr>

<a href="ad.php">Goback</a> 
or
<a href="out.php">Logout</a>
<br />
<br />
<form method="post">
<table border="0" cellpadding="10" cellspacing="5">
<tr>
<th width="80">ID:</th>
<th><input type="number" pattern=".{1,}" title="1 or more characters" required="required" name="x1"></th>
</tr>
<tr>
<th width="80">From City:</th>
<th><input pattern=".{3,}" title="Three or more characters" required="required" type="text" name="a1" id="ct1"></th>
</tr>
<tr>
<th width="80">To City:</th>
<th><input pattern=".{3,}" title="Three or more characters" required="required" type="text" name="a2" id="ct2"></th>
</tr>
<tr>
<th width="80">Date:</th>
<th><input pattern=".{3,}" title="Three or more characters" required="required" type="text" name="a3"></th>
</tr><tr>
<th width="80">arrival Time:</th>
<th><input type="date" name="a4" id="a4"></th>
</tr><tr>
<th width="80">Deparcher Time:</th>
<th><input required="required" type="date" id="a5" name="a5"></th>
</tr>
<tr>
<th width="80">Passenger's:</th>
<th><input  required="required" type="number" name="a6"></th>
</tr>
<tr>
<th width="80">Charges:</th>
<th><input pattern=".{3,}" title="Three or more characters" required="required" type="text" name="a7"></th>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" onclick="return val()" name="b1" value="UPDATE"></td>
</tr>
</table>
</form>
<?php 
if(isset($_POST['b1']))
{
include("conn.php");
$x=$_POST['x1'];
$a=$_POST['a1'];
$b=$_POST['a2'];
$c=$_POST['a3'];
$d=$_POST['a4'];
$e=$_POST['a5'];
$f=$_POST['a6'];
$g=$_POST['a7'];


$q="UPDATE  `flight`.`book` SET  
`frmcity` =  '$a',
`tocity` =  '$b',
`timing` =  '$c',
`avtime` =  '$d',
`dptime` =  '$e',
`pas` =  '$f',
`charges` =  '$g'
 WHERE  `book`.`id` =$x";


/*$q="UPDATE book set frmcity'$a', tocity='$b', timing='$c', avtime='$d',dptime='$e', pas='$f', charges='$g'  where id=$x";*/
$w=mysql_query($q);
if($w>0)
{
	echo "<script>alert('Value Updated');</script>";
}
}
?>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>
</body>
</html>
