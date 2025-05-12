<?php  
session_start();
include('Connect.php');
include('StaffHeaderAfterLogin.php');
if (isset($_POST['Assign'])) 
{
	$SESSION=$rows['SupplierID'];
	// $SupplierSelect="SELECT * FROM Supplier WHERE SupplierID='$SupplierID'";
	// $Query=mysqli_query($connect,$SupplierSelect);
	// $size=mysqli_num_rows($Query);



	// $SupplierTypeID=$_POST['cboSupplierTypeID'];
	// $Insert_SupplierType="INSERT INTO `supplier`(`SupplierTypeID`) VALUES ('$SupplierTypeID')";
	// $Insert_query=mysqli_query($connect,$Insert_SupplierType);
	// if ($Insert_query) 
	// {
	// 	echo "<script>window.alert('Supplier type is assigned to this supplier successfully!')</script>";
	// 	echo "<script>window.location='SupplierTypeAssign.php'</script>";
	// }
	// else
	// {
	// 	echo "<script>window.alert('Cannot assign to this supplier!')".mysqli_error($connect)."</script>";
	// 	echo "<script>window.location='SupplierTypeAssign.php'</script>";
	// }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Supplier Type Assign</title>

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

<form action="SupplierTypeAssign.php" method="post">
<fieldset>
<legend>Supplier Type Assign</legend>
<?php  
	// $SupplierID=$_SESSION['SupplierID'];

	$SupplierSelect="SELECT * FROM Supplier";
	$Query=mysqli_query($connect,$SupplierSelect);
	$size=mysqli_num_rows($Query);
?>
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>Supplier ID</th>
		<th>Supplier Name</th>
		<th>Age</th>
		<th>Date of Birth</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Email</th>
		<th>NRC Number</th>
		<th>Phone Number</th>
		<th>Supplier Username</th>
		<th>Supplier Password</th>
		<th>Supplier Image</th>
		<th>Supplier Type ID</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	for($i=0;$i<$size;$i++) 
	{ 
		$rows=mysqli_fetch_array($Query);
		$SupplierID=$rows['SupplierID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>" . $rows['SupplierID'] . "</td>";
			echo "<td>" . $rows['SupplierName'] . "</td>";
			echo "<td>" . $rows['Age'] . "</td>";
			echo "<td>" . $rows['DateOfBirth'] . "</td>";
			echo "<td>" . $rows['Address'] . "</td>";
			echo "<td>" . $rows['Gender'] . "</td>";
			echo "<td>" . $rows['Email'] . "</td>";
			echo "<td>" . $rows['NRCNumber'] . "</td>";
			echo "<td>" . $rows['PhoneNumber'] . "</td>";
			echo "<td>" . $rows['SupplierUsername'] . "</td>";
			echo "<td>" . $rows['SupplierPassword'] . "</td>";
			echo "<td>" . $rows['SupplierImage'] . "</td>";
			echo "<td>" . $rows['SupplierTypeID'] . "</td>";
			echo "<td><a href='SupplierTypeAssignation.php?SupplierID=$SupplierID'>Assign</a></td>";
			echo "<td>";
		echo "</tr>";
	}
	?>
	</tbody>
	<!-- <tr>
		<td colspan="7" align="right">
		<select name="cboCustomerTypeID">
			<option>-Choose Supplier Type ID-</option>
			<?php 
			$SupplierType_Select="SELECT * FROM SupplierType";
			$Query=mysqli_query($connect,$SupplierType_Select);
			$Count=mysqli_num_rows($Query);

			for($i=0;$i<$Count;$i++) 
			{ 
				$rows=mysqli_fetch_array($Query);
				$SupplierTypeID=$rows['SupplierTypeID'];
				$SupplierType=$rows['SupplierType'];

				echo "<option value='$SupplierTypeID'> $SupplierTypeID - $SupplierType </option>";
			}
			?>
		</select>
		|
		<input type="submit" name="btnAssign" value="Assign" />
		</td>
	</tr> -->
	</table>	

</fieldset>

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>