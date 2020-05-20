<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skyway.com</title>
<link href="style.css" type="text/css" rel="stylesheet">

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    
    <script>
	function valid()
	{
		var a=document.getElementById("t1").value;
		if(a=="" || a==null || a.length<3 || !isNaN(a))
		{
			alert("error with name");
			return false;
		}
		var g=document.getElementById("t7").value;
		if(g=="" || g==null || g.length<6)
		{
			alert("error with password");
			return false;
		}
		var b=document.getElementById("t2").value;
		if(b=="" || b==null || b.length<5)
		{
			alert("error with address");
			return false;
		}
		var c=document.getElementById("t3").value;
		if(c=="" || c==null || c.length!=10 || isNaN(c) || c.indexOf(9) && c.indexOf(8) && c.indexOf(7))
		{
			alert("error with mobile");
			return false;
		}
		var d=document.getElementById("t4").value;
		var x=d.indexOf("@");
		var y=d.indexOf(".");
		
		if(x<2 || y<x+2 || y+2>=d.length)
		{
			alert("error with email");
			return false;
		}
		/* var e=document.getElementById("t5").value;
		if(e!=checked)
		{
			alert("Select Gender");
		}*/
		
		var f=document.getElementById("t6").value;
		if(f=="" || f==null || f.length<5 || !isNaN(f))
		{
			alert("error with from city");
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
        
        <div id="slider">
        
        <img src="images/img1.jpg" alt="Welcome to Skyway" />
        <img src="images/img2.jpg" alt="Welcome to Skyway" />
        <img src="images/img3.jpg" alt="Welcome to Skyway" />
        <img src="images/img6.jpg" alt="Welcome to Skyway" />
        <img src="images/img4.jpg" alt="Welcome to Skyway" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>

<div class="frm">
<h1>Registration Form</h1>
<hr>
<form action="welcome.php" method="post">
<table cellpadding="10" cellspacing="5">
<tr>
<td>Name:</td>
<td><input type="text" class="a1" name="t1" id="t1"></td>
</tr>
<td>Password:</td>
<td><input type="password" class="a1" name="t7" id="t7"></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" class="a1" name="t2" id="t2"></td>
</tr>
<tr>
<td>Mobile:</td>
<td><input type="text" class="a1" name="t3" id="t3"></td>
</tr>
<tr>
<td>E-mail:</td>
<td><input type="text" class="a1" name="t4" id="t4"></td>
</tr>
<tr>
<td>Gender:</td>
<td>Male: <input value="male" type="radio" class="x1" name="t5" id="t5">
Female: <input value="female" type="radio" class="x1" name="t5" id="t5">
</td>
</tr>
<tr>
<td>Current City:</td>
<td><input type="text" class="a1" name="t6" id="t6"></td>
</tr>
<tr>
<td align="right" colspan="2">
<input type="submit" class="reg1" name="b1" id="b1" value="Registration" onclick="return valid()"></td>
</tr>
</table>
</form>

</div>

</div>
<div class="footer">
<h3>&copy; Copyright: 2020</h3></div>
</div>
</body>
</html>
