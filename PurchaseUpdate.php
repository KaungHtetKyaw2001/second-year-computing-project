<?php 
session_start();
include('connect.php');
include('SupplierHeaderAfterLogin.php');
include('AutoID_Functions.php');

if (isset($_POST['btnUpdate'])) 
{
	$txtPurchaseID = $_POST['txtPurchaseID'];
	$txtPurchaseDate=$_POST['txtPurchaseDate'];
	$txtPurchase =$_POST['txtPurchase'];
	$txtQuantity = $_POST['txtQuantity'];
	$txtPurchase_Amount = $_POST['txtPurchaseAmount'];
	$txtFirst_Purchase = $_POST['txtFirstPurchase'];
	$txtSecond_Purchase = $_POST['txtSecondPurchase'];
	$txtDescription = $_POST['txtDescription'];
	$txtSupplierID = $_POST['txtSupplierID'];
	
	$PurchaseUpdate = "UPDATE `purchase` 
					   SET `PurchaseID`='$txtPurchaseID',
					   `PurchaseDate`='$txtPurchaseDate',
					       `Purchase`='$txtPurchase',
					       `Quantity`='$txtQuantity',
					       `Purchase_Amount`='$txtPurchase_Amount',
					       `First_Purchase`='$txtFirst_Purchase',
					       `Second_Purchase`='$txtSecond_Purchase',
					       `Description`='$txtDescription',
					       `SupplierID`='$txtSupplierID' 
					       WHERE `PurchaseID` = '$txtPurchaseID'";
	$Update_Query=mysqli_query($connect,$PurchaseUpdate);



	if ($Update_Query) 
	{
		echo "<script>window.alert('Your purchase has been sucessfully updated.')</script>";
		echo "<script>window.location='Purchase.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}
	

}
if(isset($_GET['PurchaseID'])) 
{
	$PurchaseID=$_GET['PurchaseID'];

	$query="SELECT * FROM purchase WHERE PurchaseID='$PurchaseID'";
	$ret=mysqli_query($connect,$query);
	$rows=mysqli_fetch_array($ret);
}
else
{
	$PurchaseID="";
	echo "<script>window.alert('Somthing went wrong | PurchaseID not found')</script>";
	echo "<script>window.location='Purchase.php'</script>";
	exit();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Purchase Update</title>

<script type="text/javascript" src="DatePicker/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="DatePicker/datepicker.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>

<form action = 'PurchaseUpdate.php' method="Post">
	<fieldset>
		<legend>Purchase Update</legend>
		<h1 align="center">Purchase Update</h1>
		<table align="center">
			<tr>
			<td>Purchase ID</td>
			<td>
				<input type="text" name="txtPurchaseID" value="<?php echo $rows['PurchaseID'] ?>" readonly>
			</td>

		</tr>
		<tr><td>PurchaseDate</td>
			<td>
			<input type="text" name="txtPurchaseDate" value="<?php echo $rows['PurchaseDate'] ?>" readonly />
			</td>
		</tr>
			
		<tr><td>Purchase</td>
			<td>
				<input type="text" name="txtPurchase" value="<?php echo $rows['Purchase'] ?>" required>
			</td>
		</tr>
			
		<tr>
			<td>Quantity</td>
			<td>
				<input type="text" name="txtQuantity" placeholder="Quantity" value="<?php echo $rows['Quantity'] ?>" required>pcs
			</td>
		</tr>
			
		<tr>
			<td>Purchase Amount</td>
			<td>
				<input type="text" name="txtPurchaseAmount" placeholder="Purchase Amount" value="<?php echo $rows['Purchase_Amount'] ?>" required>
			</td>
		</tr>
			
			<tr>	
				<td>First Purchase</td>
			<td>
				<input type="text" name="txtFirstPurchase" placeholder="First Amount" value="<?php echo $rows['First_Purchase'] ?>" required>
			</td>
			</tr>
			
			<tr>
			<td>Second Purchase</td>
			<td>
				<input type="text" name="txtSecondPurchase" placeholder="Second Amount" value="<?php echo $rows['Second_Purchase'] ?>" required>
			</td>
			</tr>
			
			<tr>	
			<td>Description</td>
			<td>
				<input type="text" name="txtDescription" placeholder="Description" value="<?php echo $rows['Description'] ?>" required>
			</td>
			</tr>
			
			<tr>	
			<td>Supplier ID</td>
			<td>
				<input type="text" name="txtSupplierID" placeholder="Description" value="<?php echo $_SESSION['SupplierID'] ?>" readonly>
			</td>
			</tr>

			<tr>
				<td>
				<input type="submit" name="btnUpdate" value="Update">
				<input type="reset" value="Clear">
					</td>
			</tr>
			
		</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>
<?php 
include('footer.php');
 ?>