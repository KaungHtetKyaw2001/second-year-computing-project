<?php  
session_start();
include('connect.php');
include('ShoppingCartFunction.php');
include('CustomerHeaderAfterLogin.php');

if (isset($_GET['action']))
{
	$action=$_GET['action'];

	if($action==="Cart") 
	{
		$ProductID=$_GET['ProductID'];
		$Quantity=$_GET['txtBuyQuantity'];
		AddProductToShoppingCart($ProductID,$Quantity);
	}
}
if(isset($_GET['Proceedaction'])) 
{
	$Proceedaction=$_GET['Proceedaction'];
	
	if($Proceedaction === "remove") 
	{
		$ProductID=$_GET['ProductID'];
		RemoveProduct($ProductID);
	}
	elseif ($Proceedaction === "clearall") 
	{
		ClearAll();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form>

<fieldset>
<legend>Shopped product Details :</legend>
<?php  
if(!isset($_SESSION['ShoppingCartFunctions'])) 
{
	echo "<p>Empty Cart!</p>";
	echo "<a href='ProductDisplay.php'>Back to Product Display</a>";
}
else
{
?>
	<table border="1" align="center" width="100%">
	<tr>
		<th>ProductID</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Sub-Total</th>
		<th>Product Image</th>
		<th>Action</th>
	</tr>
	<?php  
	$Productcount=count($_SESSION['ShoppingCartFunctions']);

	for($i=0;$i<$Productcount;$i++) 
	{ 
		$ProductID=$_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
		$ProductPrice=$_SESSION['ShoppingCartFunctions'][$i]['Price']; 
		$ProductQuantity=$_SESSION['ShoppingCartFunctions'][$i]['Quantity'];
		$ProductImage=$_SESSION['ShoppingCartFunctions'][$i]['ProductImage1'];
		$SubTotal=$ProductPrice * $ProductQuantity;

		echo "<tr>";
			echo "<td>" . $_SESSION['ShoppingCartFunctions'][$i]['ProductID'] . "</td>";
			echo "<td>" . $_SESSION['ShoppingCartFunctions'][$i]['ProductName'] . "</td>";
			echo "<td>" . $_SESSION['ShoppingCartFunctions'][$i]['Price'] . " MMK</td>";
			echo "<td>" . $_SESSION['ShoppingCartFunctions'][$i]['Quantity'] . " pcs</td>";

			echo "<td>" . $SubTotal . " MMK </td>";
			echo "<td><img src='$ProductImage' width='80px' height='100px' /></td>";
			echo "<td>
					<a href='ShoppingCart.php?Proceedaction=remove&ProductID=$ProductID'>Remove</a>
				  </td>";

		echo "</tr>";
	}
	?>
	<tr>
		<td colspan="7" align="right">
		Total Quantity : <b><?php echo TotalQuantity() ?> pieces</b>
		<br/>
		Total Amount : <b><?php echo TotalAmount() ?> MMK</b>
		<br/>
		Government Tax Amount:  <b><?php echo TaxAmount() ?> MMK</b>
		<br/>
		Grand Total : <b><?php echo TotalAmount() + TaxAmount() ?> MMK</b>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
		<a href="ProductDisplay.php">Continue Shopping</a>
		|
		<a href="ShoppingCart.php?Proceedaction=clearall">Clear All</a>
		|
		<a href="OrderPayment.php">Proceed</a>
		</td>
	</tr>
	</table>
<?php
}
?>
</fieldset>	

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>