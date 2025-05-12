<?php  
session_start();
include('Connect.php');
include('StaffHeaderAfterLogin.php');
if (isset($_POST['Assign'])) 
{
	$_SESSION['CustomerID']=$rows['CustomerID'];
	$_SESSION['CustomerType']=$rows['CustomerType'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Type Assign</title>

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

<form action="CustomerTypeAssign.php" method="post">
<fieldset>
<legend>Customer Type Assign</legend>
<?php  

	$CustomerSelect="SELECT * FROM Customer c, CustomerType ct
					where c.CustomerTypeID=ct.CustomerTypeID";
	$Query=mysqli_query($connect,$CustomerSelect);
	$size=mysqli_num_rows($Query);
?>
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>Customer Name</th>
		<th>Age</th>
		<th>Date of Birth</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Email</th>
		<th>NRC Number</th>
		<th>Phone Number</th>
		<th>Customer Type</th>
		<th>Action</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	for($i=0;$i<$size;$i++) 
	{ 
		$rows=mysqli_fetch_array($Query);
		$CustomerID=$rows['CustomerID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>" . $rows['CustomerName'] . "</td>";
			echo "<td>" . $rows['Age'] . "</td>";
			echo "<td>" . $rows['DateOfBirth'] . "</td>";
			echo "<td>" . $rows['Address'] . "</td>";
			echo "<td>" . $rows['Gender'] . "</td>";
			echo "<td>" . $rows['Email'] . "</td>";
			echo "<td>" . $rows['NRCNumber'] . "</td>";
			echo "<td>" . $rows['PhoneNumber'] . "</td>";
			echo "<td>" . $rows['CustomerType'] . "</td>";
			// echo "<td>" . $rows['CustomerPassword'] . "</td>";
			// $img=$rows['CustomerImage'];
			// echo "<td>" . "<img src='$img' width='100px' height='auto'>" . "</td>";
			echo "<td><a href='CustomerTypeAssignation.php?CustomerID=$CustomerID'>Assign</a></td>";
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