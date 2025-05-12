<?php 
session_start();
include ('connect.php');
include ('StaffHeaderAfterLogin.php');
include('AutoID_Functions.php');
if (isset($_POST['btnUpdate'])) 
{
	$ProductTypeID = $_POST['txtProductTypeID'];
	$ProductType = $_POST['txtProductType'];
    $ProductSpecificType=$_POST['txtProductSpecificType'];
	$Update_ProductType= "UPDATE `producttype`
						  SET `ProductType`='$ProductType',
						      `ProductSpecificType`= '$ProductSpecificType'
						  WHERE `ProductTypeID`='$ProductTypeID'";
	$Update_Query = mysqli_query($connect,$Update_ProductType);
	if ($Update_Query) 
	{
		echo "<script>window.alert('Product Type update completed.')</script>";
		echo "<script>window.location='ProductType.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}

}
if(isset($_GET['ProductTypeID'])) 
{
	$ProductTypeID=$_GET['ProductTypeID'];

	$query="SELECT * FROM producttype WHERE ProductTypeID='$ProductTypeID'";
	$ret=mysqli_query($connect,$query);
	$rows=mysqli_fetch_array($ret);
}
else
{
	$ProductTypeID="";
	echo "<script>window.alert('Somthing went wrong | Product Type ID not found')</script>";
	echo "<script>window.location='ProductType.php'</script>";
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Type Update</title>

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

<form action="ProductTypeUpdate.php" method="Post">
	<fieldset>
		<legend>Product Type Update</legend>
		<h1 align="center">Product Update Form Form</h1>
		<table align="center">
			<tr>
					<td>Product Type ID</td>
					<td>
						<input type="text" name="txtProductTypeID" value = "<?php echo $rows['ProductTypeID'] ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Product Type</td>
					<td>
						<input type="text" name="txtProductType" placeholder="Product Type" value="<?php echo $rows['ProductType']?>" required>
					</td>
			</tr>
			<tr>
					<td>Product Specific Type</td>
					<td>
						<input type="text" name="txtProductSpecificType" placeholder="Product Specific Type" value="<?php echo $rows['ProductSpecificType']?>" required>
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