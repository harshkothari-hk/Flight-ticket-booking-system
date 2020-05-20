<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die("error with server".mysql_errno());
}
mysql_select_db("flight");
?>