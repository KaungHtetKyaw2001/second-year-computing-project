<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');
// if (isset($_POST['Update'])) 
// {
// 	$_SESSION['ProductID']=$rows['ProductID'];
// 	$_SESSION['ProductName']=$rows['ProductName'];
// 	$_SESSION['Brand']=$rows['Brand'];
// 	$_SESSION['Quantity']=$rows['Quantity'];
// 	$_SESSION['Price']=$rows['Price'];
// 	$_SESSION['Description']=$rows['Description'];
// 	$_SESSION['ProductImage1']=$rows['ProductImage1'];
// 	$_SESSION['ProductImage2']=$rows['ProductImage2'];
// 	$_SESSION['ProductImage3']=$rows['ProductImage3'];
// 	$_SESSION['ImportID']=$rows['ImportID'];
// 	$_SESSION['ProductTypeID']=$rows['ProductTypeID'];
// 	$_SESSION['staffID']=$rows['staffID'];
// }
if (isset($_POST['btnRegister'])) 
{
	$ProductID=$_POST['txtproductID'];
	$ProductName = $_POST['txtProductName'];
	$Brand = $_POST['txtBrand'];
    $Quantity=$_POST['txtQuantity'];
    $Price=$_POST['txtPrice'];
    $Description=$_POST['txtDescription'];
	$ProductImage1=$_FILES['txtProductImage1']['name']; //Shirt1.jpg
	$Folder="ProductImage/";

	$FileName1=$Folder . '_' . $ProductImage1; //StaffImage/_Shirt1.jpg

	$copied=copy($_FILES['txtProductImage1']['tmp_name'], $FileName1);

	if(!$copied) 
	{
		echo "<p>Product Image 1 cannot upload!</p>";
		exit();
	}
	//======================================================
	$ProductImage2=$_FILES['txtProductImage2']['name']; //Shirt1.jpg
	$Folder="ProductImage/";

	$FileName2=$Folder . '_' . $ProductImage2; //StaffImage/_Shirt1.jpg

	$copied=copy($_FILES['txtProductImage2']['tmp_name'], $FileName2);

	if(!$copied) 
	{
		echo "<p>Product Image 2 cannot upload!</p>";
		exit();
	}
	//======================================================
	$ProductImage3=$_FILES['txtProductImage3']['name']; //Shirt1.jpg
	$Folder="ProductImage/";

	$FileName3=$Folder . '_' . $ProductImage3; //StaffImage/_Shirt1.jpg

	$copied=copy($_FILES['txtProductImage3']['tmp_name'], $FileName3);

	if(!$copied) 
	{
		echo "<p>Product Image 3 cannot upload!</p>";
		exit();
	}
	$ImportID=$_POST['cboImportID'];
	$ProductTypeID=$_POST['cboProductTypeID'];
	$staffID=$_POST['cboStaffID'];


	$Insert_Product= "INSERT INTO `product`(`ProductID`, `ProductName`, `Brand`, `Quantity`, `Description`, `Price`, `ProductImage1`, `ProductImage2`, `ProductImage3`,`ImportID`,`ProductTypeID`,`StaffID`) VALUES ('$ProductID','$ProductName','$Brand','$Quantity','$Description','$Price','$FileName1','$FileName2','$FileName3','$ImportID','$ProductTypeID','$staffID')";
	$Insert_ImportDetails="INSERT INTO `importdetails`(`ProductID`) VALUES('$ProductID')";
	$Insert_PurchaseDetails="INSERT INTO `purchasedetails`(`ProductID`) VALUES('$ProductID')";
	$Insert_Query = mysqli_query($connect,$Insert_Product);
	$Insert_Query2 = mysqli_query($connect,$Insert_ImportDetails);
	$Insert_Query3 = mysqli_query($connect,$Insert_PurchaseDetails);

	if ($Insert_Query) 
	{
		echo "<script>window.alert('Product Registration completed.')</script>";
		echo "<script>window.location='ProductRegister.php'</script>";
	}
	else
	{
		echo "<p>Product Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='ProductRegister.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Register</title>

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

<form action="ProductRegister.php" method="Post" enctype="multipart/form-data">
	<fieldset>
		<legend>Product Register</legend>
		<h1 align="center">Register your product here</h1>
		<table align="center">
			<tr>
					<td>Product ID</td>
					<td>
						<input type="text" name="txtproductID" value="<?php echo AutoID('Product','ProductID','P-',6) ?>" readonly>
					</td>

					<td>Product Image 1</td>
					<td>
						<input type="file" name="txtProductImage1" required>
					</td>
			</tr>

			<tr>
					<td>Product Name</td>
					<td>
						<input type="text" name="txtProductName" placeholder="Enter your product name" required>
					</td>

					<td>Product Image 2</td>
					<td>
						<input type="file" name="txtProductImage2" required>
					</td>
			</tr>
			<tr>
					<td>Brand</td>
					<td>
						<input type="text" name="txtBrand" placeholder="Enter your brand" required>
					</td>

					<td>Product Image 3</td>
					<td>
						<input type="file" name="txtProductImage3" required>
					</td>
			</tr>
			<tr>
					<td>Quantity</td>
					<td>
						<input type="text" name="txtQuantity" placeholder="Amount of Quantity" required>
					</td>
			</tr>
			<tr>
					<td>Description</td>
					<td>
						<textarea name="txtDescription"></textarea>
					</td>
			</tr>
			<tr>
					<td>Price</td>
					<td>
						<input type="text" name="txtPrice" placeholder="Price" required>
					</td>
			</tr>
			<tr>
					<td>Import Type ID</td>
		<td>
		<select name="cboImportID">
			<option>-Choose Import Type ID-</option>
			<?php 
			$ImportType_query="SELECT * FROM importcompany";
			$ret=mysqli_query($connect,$ImportType_query);
			$count=mysqli_num_rows($ret);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$ImportID=$rows['ImportID'];
				$ImportType=$rows['ImportType'];


				echo "<option value='$ImportID'> $ImportID - $ImportType</option>";
			}
			?>
		</select>
		</td>
			</tr>

			<tr>
					<td>Product Type ID</td>
		<td>
		<select name="cboProductTypeID">
			<option>-Choose Product Type ID-</option>
			<?php 
			$ProductType_query="SELECT * FROM producttype";
			$ret=mysqli_query($connect,$ProductType_query);
			$count=mysqli_num_rows($ret);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$ProductTypeID=$rows['ProductTypeID'];
				$ProductType=$rows['ProductType'];
				$ProductSpecificType=$rows['ProductSpecificType'];


				echo "<option value='$ProductTypeID'> $ProductTypeID - $ProductType - $ProductSpecificType</option>";
			}
			?>
		</select>
		</td>
			</tr>
			<tr>
					<td>Staff Type ID</td>
		<td>
		<select name="cboStaffID">
			<option>-Choose Import Type ID-</option>
			<?php 
			$Staff_query="SELECT * FROM staff";
			$ret=mysqli_query($connect,$Staff_query);
			$count=mysqli_num_rows($ret);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$StaffID=$rows['StaffID'];
				$StaffName=$rows['StaffName'];


				echo "<option value='$StaffID'> $StaffID - $StaffName</option>";
			}
			?>
		</select>
		</td>
			</tr>
			<td>
					<input type="Submit" name="btnRegister" value="Register">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>

<fieldset>
		<legend>Products List:</legend>
	<table id="tableid" class="display" align="center">
		<thead>
			<tr>
	<th>ProductID</th>
	<th>ProductName</th>
	<th>Brand</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Description</th>
	<th>ProductImage1</th>
	<!-- <th>ProductImage2</th> -->
	<!-- <th>ProductImage3</th> -->
	<th>Import Type ID</th>
	<th>Product Type ID</th>
	<th>Staff ID</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_Product="SELECT * FROM Product";
	$Product_Query=mysqli_query($connect,$Select_Product);
	$Product_Count=mysqli_num_rows($Product_Query);

	for($i=0;$i<$Product_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($Product_Query);
		$ProductID=$rows['ProductID'];

		echo "<tr>";
			echo "<td>$ProductID</td>";
			echo "<td>" . $rows['ProductName'] . "</td>";
			echo "<td>" . $rows['Brand'] . "</td>";
			echo "<td>" . $rows['Quantity'] . "</td>";
			echo "<td>" . $rows['Price'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			$img=$rows['ProductImage1'];
			echo "<td>" . "<img src='$img' width='100px' height='auto'>" . "</td>";
			// echo "<td>" . $rows['ProductImage2'] . "</td>";
			// echo "<td>" . $rows['ProductImage3'] . "</td>";
			echo "<td>" . $rows['ImportID'] . "</td>";
			echo "<td>" . $rows['ProductTypeID'] . "</td>";
			echo "<td>" . $rows['StaffID'] . "</td>";
			echo "<td><a href='ProductUpdate.php?ProductID=$ProductID'>Update</a> |
			<a href='ProductDelete.php?ProductID=$ProductID'>Delete</a>
				  	</td>";
		echo "</tr>";
	}

?>
	</tbody>
	</table>	
</fieldset>
</body>
</html>
<?php 
include('footer.php');
 ?>