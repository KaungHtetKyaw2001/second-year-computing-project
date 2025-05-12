<?php  
session_start();
include('Connect.php');
include('StaffHeaderAfterLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>My Ordered Products</title>

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

<form action="Order_History.php" method="get">
<fieldset>
<legend>Order History </legend>
<?php  


	$OrderSelect="SELECT o.*, c.CustomerID,c.CustomerName,p.*
			FROM orders o,customer c,payment p
			WHERE o.OrderID=p.OrderID 
			AND o.CustomerID=c.CustomerID
			
			";
	$Query=mysqli_query($connect,$OrderSelect);
	$count=mysqli_num_rows($Query);
	
?>
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>OrderID</th>
		<th>Order Date</th>
		<th>Customer Name</th>
		<th>Total Amount</th>
		<th>Total Quantity</th>
		<th>Total Amount with Tax</th>
		<th>Status</th>
		<th>Action</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	for($i=0;$i<$count;$i++) 
	{ 
		$rows=mysqli_fetch_array($Query);
		$OrderID=$rows['OrderID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>" . $rows['OrderID'] . "</td>";
			echo "<td>" . $rows['OrderDate'] . "</td>";
			echo "<td>" . $rows['CustomerName'] . "</td>";
			echo "<td>" . $rows['Payment_Amount'] . "</td>";
			echo "<td>" . $rows['Quantity'] . "</td>";
			echo "<td>" . $rows['TotalAmount'] . "</td>";
			echo "<td>" . $rows['Status'] . "</td>";
			echo "<td>
				  <a href='OrderDetailsforStaff.php?OrderID=$OrderID'>Details</a> 
				  </td>";
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