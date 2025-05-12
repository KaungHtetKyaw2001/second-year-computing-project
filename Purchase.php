<?php 
session_start();
include('connect.php');
include('AutoID_Functions.php');
include('SupplierHeaderAfterLogin.php');
if (isset($_POST['btnProceed'])) 
{
	$txtPurchaseID = $_POST['txtPurchaseID'];
	$txtPurchaseDate = $_POST['txtPurchaseDate'];
	$txtPurchase =$_POST['txtPurchase'];
	$txtQuantity = $_POST['txtQuantity'];
	$txtPurchase_Amount = $_POST['txtPurchaseAmount'];
	$txtFirst_Purchase = $_POST['txtFirstPurchase'];
	$txtSecond_Purchase = $_POST['txtSecondPurchase'];
	$txtDescription = $_POST['txtDescription'];
	$txtSupplierID = $_SESSION['SupplierID'];
	$PurchaseInsert = "INSERT INTO `purchase`(`PurchaseID`,`PurchaseDate`, `Purchase`, `Quantity`, `Purchase_Amount`, `First_Purchase`, `Second_Purchase`, `Description`,`SupplierID`) VALUES ('$txtPurchaseID','$txtPurchaseDate','$txtPurchase','$txtQuantity','$txtPurchase_Amount','$txtFirst_Purchase','$txtSecond_Purchase','$txtDescription','$txtSupplierID')";
	$Insert_Query=mysqli_query($connect,$PurchaseInsert);
	$PurchaseDetailsInsert = "INSERT INTO `purchasedetails`(`PurchaseID`) VALUES('$txtPurchaseID') ";
	$Insert_Query2 = mysqli_query($connect,$PurchaseDetailsInsert);

	if ($Insert_Query) 
	{

		echo "<script>window.alert('Your purchase is successfully completed.')</script>";
		 echo "<script>window.location='Purchase.php'</script>";
	}
	else
	{
		echo "<script>window.alert('Purchase failed. Please check your information!!')".mysqli_error($connect)."</script>";
		echo "<script>window.location='Purchase.php'</script>";
	}
	
	

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Supplier Purchase</title>

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
<form action = 'Purchase.php' method="Post">
	<h3>Welcome  <?php echo $_SESSION['SupplierName'] ?></h3>	
	<fieldset>
		<legend>Supplier Purchase</legend>
		<h1 align="center">Supplier Purchase Form</h1>
		<table align="center">
			<tr>
			<td>Purchase ID</td>
			<td>
				<input type="text" name="txtPurchaseID" value="<?php echo AutoID('Purchase','PurchaseID','PU-',6) ?>" readonly>
			</td>

		</tr>
		<tr><td>PurchaseDate</td>
			<td>
			<input type="text" name="txtPurchaseDate" value="<?php echo date('Y-m-d') ?>" readonly />
			</td>
		</tr>
			
		<tr><td>Purchase</td>
			<td>
				<input type="text" name="txtPurchase" required>
			</td>
		</tr>
			
		<tr>
			<td>Quantity</td>
			<td>
				<input type="text" name="txtQuantity" placeholder="Quantity" required>pcs
			</td>
		</tr>
			
		<tr>
			<td>Purchase Amount</td>
			<td>
				<input type="text" name="txtPurchaseAmount" placeholder="Purchase Amount" required>
			</td>
		</tr>
			
			<tr>	
				<td>First Purchase</td>
			<td>
				<input type="text" name="txtFirstPurchase" placeholder="First Amount" required>
			</td>
			</tr>
			
			<tr>
			<td>Second Purchase</td>
			<td>
				<input type="text" name="txtSecondPurchase" placeholder="Second Amount" required>
			</td>
			</tr>
			
			<tr>	
			<td>Description</td>
			<td>
				<input type="text" name="txtDescription" placeholder="Description" required>
			</td>
			</tr>
			
			<tr>
				<td>
				<input type="submit" name="btnProceed" value="Proceed">
				<input type="reset" value="Clear">
					</td>
			</tr>
			
		</tr>
		</table>
	</fieldset>
	<legend>Purchase Information List:</legend>
	<table id = "tableid" class="display" align="center">
		<thead>
			<tr>
	<th>PurchaseID</th>
	<th>PurchaseDate</th>
	<th>Purchase</th>
	<th>Quantity</th>
	<th>Purchase Amount</th>
	<th>First Purchase</th>
	<th>Second Purchase</th>
	<th>Description</th>
	<th>SupplierID</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_Purchase="SELECT * FROM Purchase";
	$Purchase_Query=mysqli_query($connect,$Select_Purchase);
	$Purchase_Count=mysqli_num_rows($Purchase_Query);

	for($i=0;$i<$Purchase_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($Purchase_Query);
		$PurchaseID=$rows['PurchaseID'];

		echo "<tr>";
			echo "<td>$PurchaseID</td>";
			echo "<td>" . $rows['Purchase'] . "</td>";
			echo "<td>" . $rows['PurchaseDate'] . "</td>";
			echo "<td>" . $rows['Quantity'] . "</td>";
			echo "<td>" . $rows['Purchase_Amount'] . "</td>";
			echo "<td>" . $rows['First_Purchase'] . "</td>";
			echo "<td>" . $rows['Second_Purchase'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			echo "<td>" . $rows['SupplierID'] . "</td>";
			echo "<td>
				  <a href='PurchaseUpdate.php?PurchaseID=$PurchaseID'>Edit</a> |
				  <a href='PurchaseDelete.php?PurchaseID=$PurchaseID'>Delete</a>
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