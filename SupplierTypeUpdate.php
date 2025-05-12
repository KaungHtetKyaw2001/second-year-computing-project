<?php 
session_start();
include ('connect.php');
include ('SupplierHeaderAfterLogin.php');
if (isset($_POST['btnUpdate'])) 
{
	$SupplierTypeID = $_POST['txtSupplierTypeID'];
	$SupplierType = $_POST['txtSupplierType'];
	$Update_SupplierType= "UPDATE `suppliertype` 
							  SET `SupplierTypeID`= '$SupplierTypeID',
							      `SupplierType`='$SupplierType' 
							  WHERE `SupplierTypeID`= '$SupplierTypeID'";
	$Update_Query = mysqli_query($connect,$Update_SupplierType);
	if ($Update_Query) 
	{
		echo "<script>window.alert('Supplier Type Information updated.')</script>";
		echo "<script>window.location='SupplierType.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}
}
if(isset($_GET['SupplierTypeID'])) 
{
	$SupplierTypeID=$_GET['SupplierTypeID'];

	$query="SELECT * FROM suppliertype WHERE SupplierTypeID='$SupplierTypeID'";
	$ret=mysqli_query($connect,$query);
	$rows=mysqli_fetch_array($ret);
}
else
{
	$SupplierTypeID="";
	echo "<script>window.alert('Somthing went wrong | SupplierTypeID not found')</script>";
	echo "<script>window.location='SupplierType.php'</script>";
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supplier Type Update</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>

<form action="SupplierTypeUpdate.php" method="Post">
	<fieldset>
		<legend>Supplier Type Update</legend>
		<h1 align="center">Supplier Type Update</h1>
		<table align="center">
			<tr>
					<td>Supplier Type ID</td>
					<td>
						<input type="text" name="txtSupplierTypeID" value="<?php echo $rows['SupplierTypeID'] ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Supplier Type</td>
					<td>
						<input type="text" name="txtSupplierType" placeholder="Supplier Type" value="<?php echo $rows['SupplierType'] ?>" required>
					</td>
			</tr>
			<td>
					<input type="Submit" name="btnUpdate" value="Update">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>