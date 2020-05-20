<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skyway.com</title>
<script src="js/jquery-1.12.2.min.js" type="text/javascript"></script>

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

<style>
table
{
	background:#0CF;
}
</style>

</head>

<body>
<table width="100%" cellpadding="3">
<tr>
<th>Classes</th>
<th>No. Seats</th>
<th>Current Availability's</th>
<th>Price</th>
<th>Flight Day's</th>
<th>Date</th>
</tr>
<tr>
<th>Business Class</th>
<th>50</th>
<th><label>Seats Status :</label><label id="a_seats"></label></th>
<th>30000/-</th>
<th>S M T W T F S</th>
<th><input id="dt" name="dt" required="required" type="date"></th>
</tr>
</table>
</body>
</html>