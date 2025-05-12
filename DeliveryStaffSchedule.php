<?php  
session_start();
include('Connect.php');
include('DeliveryStaffHeaderAfterLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Delivery Staff Schedules</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>

<script>
	$(document).ready( function (){
		$('#tableid').DataTable();
	} );
</script>

<form action="DeliveryStaffSchedule.php" method="post">
<fieldset>
<legend>Delivery Staff Schedules</legend>
<?php  
	// $DeliveryID=$_SESSION['DeliveryID'];

	$DeliverySelect="SELECT * FROM delivery";
	$Query=mysqli_query($connect,$DeliverySelect);
	$size=mysqli_num_rows($Query);
?>
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>Delivery ID</th>
		<th>Delivery Date</th>
		<th>Description</th>
		<th>Delivery Route</th>
		<th>Delivery Staff ID</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	for($i=0;$i<$size;$i++) 
	{ 
		$rows=mysqli_fetch_array($Query);
		$DeliveryID=$rows['DeliveryID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>" . $rows['DeliveryID'] . "</td>";
			echo "<td>" . $rows['DeliveryDate'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			echo "<td>" . $rows['DeliveryRoute'] . "</td>";
			echo "<td>" . $rows['DeliveryStaffID'] . "</td>";
		echo "</tr>";
	}
	?>
	</tbody>
	</table>	

</fieldset>

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>