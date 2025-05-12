<?php 
session_start();
include ('connect.php');
include ('StaffHeaderAfterLogin.php');
include('AutoID_Functions.php');

if (isset($_REQUEST['ProductID'])) 
{
	$ProductID=$_REQUEST['ProductID'];
	$query="SELECT * FROM product where ProductID = '$ProductID'";
	$result=mysqli_query($connect,$query);
	$req=mysqli_fetch_array($result);
	$ProductID=$req['ProductID'];
	$pname=$req['ProductName'];
	$b=$req['Brand'];
	$q=$req['Quantity'];
	$d=$req['Description'];
	$p=$req['Price'];
	$pi1=$req['ProductImage1'];
	$pi2=$req['ProductImage2'];
	$pi3=$req['ProductImage3'];
	$imid=$req['ImportID'];
	$ptid=$req['ProductTypeID'];
	$sid=$req['StaffID'];
}

if (isset($_POST['btnUpdate'])) 
{
	$ProductID=$_POST['txtproductID'];
	$ProductName = $_POST['txtProductName'];
	$Brand = $_POST['txtBrand'];
    $Quantity=$_POST['txtQuantity'];
    $Price=$_POST['txtPrice'];
    $Description=$_POST['txtDescription'];
    $Quantity=$_POST['txtQuantity'];
    $Description=$_POST['txtDescription'];

	$Image1=$_FILES['txtProductImage1']['name'];
	$ProductImage1='ProductImage/';
	if ($ProductImage1) 
	{
		$filename1=$ProductImage1."_".$Image1;
 			$Copied=copy($_FILES['txtProductImage2']['tmp_name'],$filename1);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}
	$Image2=$_FILES['txtProductImage2']['name'];
	$ProductImage2='ProductImage/';
	if ($ProductImage2) 
	{
		$filename2=$ProductImage2."_".$Image2;
 			$Copied=copy($_FILES['txtProductImage2']['tmp_name'],$filename2);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}
	$Image3=$_FILES['txtProductImage3']['name'];
	$ProductImage3='ProductImage/';
	if ($ProductImage3) 
	{
		$filename3=$ProductImage3."_".$Image3;
 			$Copied=copy($_FILES['txtProductImage3']['tmp_name'],$filename3);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}
	$ImportID=$_POST['cboImportID'];
	$ProductTypeID=$_POST['cboProductTypeID'];
	$StaffID=$_POST['cboStaffID'];
	$Update_Product= "UPDATE `product`
				      SET `ProductID`='$ProductID',
				          `ProductName`='$ProductName',
				          `Brand`='$Brand',
				          `Quantity`='$Quantity',
				          `Description`='$Description',
				          `Price`='$Price',
				          `ProductImage1`='$filename1',
				          `ProductImage2`='$filename2',
				          `ProductImage3`='$filename3',
				          `ImportID`='$ImportID',
				          `ProductTypeID`='$ProductTypeID',
				          `StaffID`='$StaffID'
				          WHERE `ProductID`='$ProductID'";
	$Update_Query = mysqli_query($connect,$Update_Product);
	if ($Update_Query) 
	{
		echo "<script>window.alert('Product Information Updated.')</script>";
		echo "<script>window.location='ProductRegister.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
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
<form action="ProductUpdate.php" method="Post" enctype="multipart/form-data">
	<fieldset>
		<legend>Product Update</legend>
		<h1 align="center">Product Update</h1>
		<table align="center">
			<tr>
					<td>Product ID</td>
					<td>
						<input type="text" name="txtproductID" value="<?php echo $ProductID ?>" readonly>
					</td>

					<td>Product Image 1</td>
					<td>
						<input type="file" name="txtProductImage1" value="<?php echo $pi1 ?>" required>
					</td>
			</tr>

			<tr>
					<td>Product Name</td>
					<td>
						<input type="text" name="txtProductName" placeholder="Enter your product name" value="<?php echo $pname ?>" required>
					</td>

					<td>Product Image 2</td>
					<td>
						<input type="file" name="txtProductImage2" value="<?php echo $pi2 ?>" required>
					</td>
			</tr>
			<tr>
					<td>Brand</td>
					<td>
						<input type="text" name="txtBrand" placeholder="Enter your brand" value="<?php echo $b ?>" required>
					</td>

					<td>Product Image 3</td>
					<td>
						<input type="file" name="txtProductImage3" value="<?php echo $pi3 ?>" required>
					</td>
			</tr>
			<tr>
					<td>Quantity</td>
					<td>
						<input type="text" name="txtQuantity" placeholder="Amount of Quantity" value="<?php echo $q ?>" required>
					</td>
			</tr>
			<tr>
					<td>Price</td>
					<td>
						<input type="text" name="txtPrice" placeholder="Price" value="<?php echo $p ?>" required>
					</td>
			</tr>
			<tr>
					<td>Description</td>
					<td>
						<input type="text" name="txtDescription" placeholder="Description" value="<?php echo $d ?>" required>
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
			<option>-Choose Staff ID-</option>
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
					<input type="Submit" name="btnUpdate" value="Update">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>
</body>
</html>
<?php 
include('footer.php');
 ?>