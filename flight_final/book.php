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
<script src="js/jquery-1.12.2.min.js"></script>

<script>

$(function() {
    $(".box").animate(
        {top : "+=100"}, 500, function() {}
    );
});

function abc()
{
	document.getElementById("box").style.display="none";
}
</script>

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
td
{
box-shadow:5px 5px 10px #333 !important;
border-radius:20px 0px 20px 0px;
}
.abc
{
	margin:auto;
	background:#922F46 !important;
	color:#FFF !important;
}
.box
{
	margin:auto;
	width:400px;
	height:220px;
	background:#FFF;
	border-radius:30px;
	text-align:center;
	box-shadow:0 0 20px #000;
	margin-left:350px;
	position:absolute;
	z-index:9999;
}
.box h1
{
	padding:50px;
}
.box img
{
	margin:auto;
	float:right;
	margin-top:-30px;
	margin-right:10px;
}
</style>
<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<div class="main">
<div class="box" id="box">
<br />
<br />
<img src="images/btnx.jpg" width="30" onclick="abc()" id="x1">
<h2>ticket booking confirmation message has been sent to your mobile</h2>
</div>
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
<?php
include("conn.php");
if(isset($_POST['dt']))
{
	$aDate=$_POST['dt'];
$qMain="SELECT * FROM book WHERE timing='".$aDate."'";
$rs = mysql_query($qMain);
$total = 0;
while ($row1 = mysql_fetch_array($rs)) {
	$total += $row1['pas'] + $row1['chpass'];
}
// echo $aDate;
// echo $total;

if($total<50)
{
?>
<h1>Seat Has Been Booked</h1>
<hr>


<?php
$q="select * from book ORDER BY id DESC";

$w=mysql_query($q);
if($rock=mysql_fetch_array($w)):
// echo $rock[0];
endif;
?>


<?php
if(isset($_POST['b1']))
{
	
	
	$nm=$_POST['t1'];
	$a=$_POST['ct1'];
	$b=$_POST['ct2'];
	$xo=$_POST['ct3'];
	$c=$_POST['dt'];
	$ax=$_POST['ariv'];
	$dx=$_POST['dip'];
	$d=$_POST['p1'];
	$e=$_POST['p2'];
	$zee=$_POST['x1x'];
	
	//print_r($cha);
	$x=$_SESSION['my'];
	echo "<p>Welcome User $x <a href='out.php'>Logout</a></p>";

	
	$qz=$d+$e;
	if($qz==1)
	{
		$ch=$zee;
	}
	elseif($qz==2)
	{
		$ch=$zee*2;
	}
	elseif($qz==3)
	{
		$ch=$zee*3;
	}
	elseif($qz==4)
	{
		$ch=$zee*4;
	}
	elseif($qz==5)
	{
		$ch=$zee*5;
	}
	elseif($qz==6)
	{
		$ch=$zee*6;
	}
	elseif($qz==7)
	{
		$ch=$zee*7;
	}
	elseif($qz==8)
	{
		$ch=$zee*8;
	}
	elseif($qz==9)
	{
		$ch=$zee*9;
	}
	elseif($qz==10)
	{
		$ch=$zee*10;
	}
	
    

	
	$q="INSERT INTO `flight`.`book` (`id`, `name`, `frmcity`, `tocity`, `timing`, `avtime`, `dptime`, `pas`,`chpass`, `charges`) VALUES (NULL, '$nm','$a', '$b', '$c', '$ax', '$dx', '$d','$e', '$ch');";
	


	$w=mysql_query($q);


	echo "<a href='usinbox.php'>Ticket Cancellation Or Update</a>";

	
	echo "<table border='0' cellpadding='10' cellspacing='10'>
	<caption>Air Ticket</caption>
	<tr>
	<th class='abc'>Passenger  ID:</th>
	<th class='abc'>$rock[0]</th>
	</tr>
	<tr>
	<td>Passenger Name:</td>
	<td>$nm</td>
	</tr>
	<tr>
	<td>Flight Name:</td>
	<td>$a</td>
	</tr>
	<tr>
	<td>From City:</td>
	<td>$xo</td>
	</tr>

	<tr>
	<td>To City:</td>
	<td>$b</td>
	</tr>
	<tr>
	<td>Booking Date:</td>
	<td>$c</td>
	</tr>
	<tr>
	<td>Arrival Time:</td>
	<td>$ax</td>
	</tr>
	<tr>
	<td>Deparcher Time:</td>
	<td>$dx</td>
	</tr>
	<tr>
	<td>Number Of Adult Passengers:</td>
	<td>$d</td>
	</tr>
	<tr>
	<td>Number Of Child Passengers:</td>
	<td>$e</td>
	</tr>
	<tr>
	<td>Total Charges:</td>
	<td>$ch /- Only</td>
	</tr>
	</table>
	";


}
echo "
<br />
<br />
<a href='https://www.paypal.com/signin/?country.x=IN'><button>Goto PayPal</button></a>
<a href='#'><button>Print Now</button></a>";
}else{
	echo "<h2>Sorry !! no seats are available... </h2>";
}
}
?>

</center>

<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>

</div>
</body>
</html>
