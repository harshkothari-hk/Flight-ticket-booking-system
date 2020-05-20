<?php
include("conn.php");
if(isset($_POST['date']))
{
	$data = "";
	$aDate=$_POST['date'];
	$qMain="SELECT * FROM book WHERE timing='".$aDate."'";
	$rs = mysql_query($qMain);
	$total = 0;
	while ($row1 = mysql_fetch_array($rs)) {
		$total += $row1['pas'] + $row1['chpass'];
	}
	if ($total==0) {
		$data = 50;
	}
	elseif($total<50){
		$data = 50-$total;
	}else{
		$data = "Not Available";
	}
	echo json_encode($data);
}else{
	echo json_encode("error");
}
