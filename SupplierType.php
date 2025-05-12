<?php 
session_start();
include ('connect.php');
include('StaffHeaderAfterLogin.php');
include('AutoID_Functions.php');

if (isset($_POST['btnRegister'])) 
{
	$SupplierTypeID = $_POST['txtSupplierTypeID'];
	$SupplierType = $_POST['txtSupplierType'];
	$Insert_SupplierType= "INSERT INTO `suppliertype`(`SupplierTypeID`, `SupplierType`) VALUES ('$SupplierTypeID','$SupplierType')";
	$Insert_Query = mysqli_query($connect,$Insert_SupplierType);
	if ($Insert_Query) 
	{
		echo "<script>window.alert('Supplier Type Registration completed.')</script>";
		echo "<script>window.location='SupplierType.php'</script>";
	}
	else
	{
		echo "<p>Supplier Type Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='SupplierType.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supplier Type</title>

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

<form action="SupplierType.php" method="Post">
	<fieldset>
		<legend>Supplier Type</legend>
		<h1 align="center">Supplier Type Form</h1>
		<table align="center">
			<tr>
					<td>Supplier Type ID</td>
					<td>
						<input type="text" name="txtSupplierTypeID" value="<?php echo AutoID('suppliertype','SupplierTypeID','SUT-',6) ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Supplier Type</td>
					<td>
						<input type="text" name="txtSupplierType" placeholder="Supplier Type" required>
					</td>
			</tr>
			<td>
					<input type="Submit" name="btnRegister" value="Register">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>

	<fieldset>
		<legend>Supplier Type List:</legend>
	<table id="tableid" class="display" align="center">
		<thead>
			<tr>
	<th>SupplierTypeID</th>
	<th>SupplierType</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_SupplierType="SELECT * FROM SupplierType";
	$SupplierType_Query=mysqli_query($connect,$Select_SupplierType);
	$SupplierType_Count=mysqli_num_rows($SupplierType_Query);

	for($i=0;$i<$SupplierType_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($SupplierType_Query);
		$SupplierTypeID=$rows['SupplierTypeID'];

		echo "<tr>";
			echo "<td>$SupplierTypeID</td>";
			echo "<td>" . $rows['SupplierType'] . "</td>";
			echo "<td>
				  <a href='SupplierTypeUpdate.php?SupplierTypeID=$SupplierTypeID'>Update</a> |
				  <a href='SupplierTypeDelete.php?SupplierTypeID=$SupplierTypeID'>Delete</a>
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
include ('footer.php');
 ?>