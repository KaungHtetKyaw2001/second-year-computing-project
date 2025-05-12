<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');
if (isset($_POST['btnRegister'])) 
{
	$ProductTypeID = $_POST['txtProductTypeID'];
	$ProductType = $_POST['txtProductType'];
    $ProductSpecificType=$_POST['txtProductSpecificType'];
	$Insert_ProductType= "INSERT INTO `producttype`(`ProductTypeID`, `ProductType`, `ProductSpecificType`) VALUES ('$ProductTypeID','$ProductType','$ProductSpecificType')";
	$Insert_Query = mysqli_query($connect,$Insert_ProductType);
	if ($Insert_Query) 
	{
		echo "<script>window.alert('Product Type Registration completed.')</script>";
		echo "<script>window.location='ProductType.php'</script>";
	}
	else
	{
		echo "<p>Product Type Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='ProductType.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Type</title>

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

<form action="ProductType.php" method="Post">
	<fieldset>
		<legend>Product Type</legend>
		<h1 align="center">Product Type Form</h1>
		<table align="center">
			<tr>
					<td>Product Type ID</td>
					<td>
						<input type="text" name="txtProductTypeID" value="<?php echo AutoID('ProductType','ProductTypeID','PT-',6) ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Product Type</td>
					<td>
						<input type="text" name="txtProductType" placeholder="Product Type" required>
					</td>
			</tr>
			<tr>
					<td>Product Specific Type</td>
					<td>
						<input type="text" name="txtProductSpecificType" placeholder="Product Specific Type" required>
					</td>
			</tr>
			<td>
					<input type="Submit" name="btnRegister" value="Register">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>

	<fieldset>
		<legend>Product Type List:</legend>
	<table id="tableid" class="display" align="center">
		<thead>
			<tr>
	<th>ProductTypeID</th>
	<th>ProductType</th>
	<th>ProductSpecificType</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_ProductType="SELECT * FROM ProductType";
	$ProductType_Query=mysqli_query($connect,$Select_ProductType);
	$ProductType_Count=mysqli_num_rows($ProductType_Query);

	for($i=0;$i<$ProductType_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($ProductType_Query);
		$ProductTypeID=$rows['ProductTypeID'];

		echo "<tr>";
			echo "<td>$ProductTypeID</td>";
			echo "<td>" . $rows['ProductType'] . "</td>";
			echo "<td>" . $rows['ProductSpecificType'] . "</td>";
			echo "<td>
				  <a href='ProductTypeUpdate.php?ProductTypeID=$ProductTypeID'>Update</a> |
				  <a href='ProductTypeDelete.php?ProductTypeID=$ProductTypeID'>Delete</a>
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