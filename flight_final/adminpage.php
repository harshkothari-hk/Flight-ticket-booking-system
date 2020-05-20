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
<title>Skyway</title>
<link href="style.css" type="text/css" rel="stylesheet">
<style>
.mid
{
	padding:50px;
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

<center>
<h1>Admin Area	</h1>
<hr>
<a href="ad.php">Goback</a> 
or
<a href="out.php">Logout</a>
<br />
<br />

<table border="0" width="800" id="grid">
<tr>
<td>ID:</td>
<td>Name:</td>
<td>Password:</td>
<td>Address:</td>
<td>Mobile:</td>
<td width="120">Email:</td>
<td width="70">Gender:</td>
<td>City:</td>
</tr>

<?php
include("conn.php");
$q="select * from air";
$w=mysql_query($q);
while($row=mysql_fetch_array($w)):

?>
<tr>
<td width="48"><?php echo $row[0]; ?></td>
<td width="85"><?php echo $row[1]; ?></td>
<td width="133"><?php echo $row[2]; ?></td>
<td width="116"><?php echo $row[3]; ?></td>
<td width="105"><?php echo $row[4]; ?></td>
<td width="120"><?php echo $row[5]; ?></td>
<td width="71"><?php echo $row[6]; ?></td>
<td><?php echo $row[7]; ?></td>
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

<script>
        $(function () {
            $("#grid").igGrid({                
            });
        });

    </script>
</body>
</html>
