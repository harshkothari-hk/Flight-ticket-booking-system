<?php
include("conn.php");
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
<link href="style.css" type="text/css" rel="stylesheet">
  
  
  <style>
  .b1
  {
	  margin:auto;
	  padding: 7px 20px 7px 20px;
	  font-size:22px;
  }
  td
  {
	  background:none !important;
  }
  table
  {
	  background:#FFC;
  }
  </style>
  
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

<div id="sliderFrame">       

<div class="booking">
<center>
<h1>Book Your Seat Now</h1>

<hr>
<a href="out.php" style="float:right; margin-right:50px;"><button> Logout</button></a>
<a href="flights.php" style="float:right; margin-right:10px;"><button> Go Back</button></a>
<a href="facility.php" style="float:right; margin-right:10px;"><button> Check Facility</button></a>
<form method="post" action="book.php">
<table cellpadding="10" cellspacing="10" border="0" style="background:none;">
<tr>
<td>Name:</td>
<td><input type="text" class="t1" name="t1" placeholder="Full Name" required="required" pattern=".{3,}"></td>
</tr>
<tr>
<td>Selected Flight:</td>
<td colspan="3"><select id="ct1" name="ct1" required="required"> 
<option value="Indian Airline">Indian Airline</option>
</select></td>
</tr>
<tr>
<td>From City:</td>
<td colspan="3"><select id="ct2" name="ct2" required="required">
<option value="Indore">Mumbai</option>
</select></td>
</tr>
<tr>
<td>To City:</td>
<td colspan="3"><select id="ct3" name="ct3" required="required">
<option value="Bhopal">Pune</option>
</select></td>
</tr>
<!--<tr>
<td>Select Filght:</td>
<td colspan="3"><select id="ct1" name="ct1" required="required"> 
<option value="Indian Airline">Indian Airline</option>
</select></td>
</tr>-->
<tr>
<td>Time:</td>
<td><input type="text" name="dip" value="Dispatcher 12:30PM" /></td>
<td><input type="text" name="ariv" value="Arrival 02:00PM" /></td>
</tr>
<tr>
<td>Date:</td>
<td colspan="3"><input id="dt" name="dt" required="required" type="date"></td>
</tr>
<tr>
<td>Adult Passengers:</td>
<td><select id="p1" name="p1" required="required">
<option value="">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td>
<td>Child Passengers:</td>
<td><select id="p2" name="p2">
<option value="">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td>
</tr>
<tr>
<td>Select Class</td>
<td>
<select id="x1x" name="x1x" required="required">
	<option value="">-----------</option>
	<option value="10000">Business  Class</option>
	<option value="7500">Economy  Class</option>
	<option value="5000">Premium  Class</option>
</select>
</td>
<td><label>Seats Status :</label><label id="a_seats"></label></td>
</tr>
<tr>
<td colspan="4" align="center"><input type="submit" onclick="return val()" name="b1" value="Book Now" class="b1"></td>
</tr>
</table>
</form>
</center>
</div>
</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3>
</div>
</div>

<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#dt').change(function(){
			// console.log($(this).val());
			$.ajax({
				url: "available_seats.php", 
				type: "POST",
				data: "date="+$(this).val(),
				success: function(result){
					console.log("success");
					console.log(result);
					// alert(result);
					$("#a_seats").empty();
					$("#a_seats").text(result);
		    	},
				error: function(result){
					console.log("error");
		    	}
			});
		});
	});
</script>
</body>
</html>
