<?php  
session_start();
include('CustomerHeaderAfterLogin.php');
include('connect.php');

if(isset($_REQUEST['ProductID'])) 
{
	$ProductID=$_REQUEST['ProductID'];
	$sql="SELECT * From Product
			where ProductID='$ProductID'";
	$ret=mysqli_query($connect,$sql);
	$rows=mysqli_fetch_array($ret);

$ProductImage1=$rows['ProductImage1'];
$ProductImage2=$rows['ProductImage2'];
$ProductImage3=$rows['ProductImage3'];
}

// list($width,$height)=getimagesize($ProductImage1);
// $w=$width/2;
// $h=$height/2;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="ShoppingCart.php" method="get">
<input type="hidden" name="ProductID" value="<?php echo $rows['ProductID']; ?>">
		<input type="hidden" name="action" value="Cart">
<table align="center">
<tr>
	<td>
		
		<img id="PImage" src="<?php echo $ProductImage1 ?>" width="480px" height="250px" />
		<hr/>
		<img src="<?php echo $ProductImage1 ?>" width="100px" height="120px" 
		onClick="document.getElementById('PImage').src='<?php echo $ProductImage1 ?>'" />

		<img src="<?php echo $ProductImage2 ?>" width="100px" height="120px" 
		onClick="document.getElementById('PImage').src='<?php echo $ProductImage2 ?>'" />

		<img src="<?php echo $ProductImage3 ?>" width="100px" height="120px" 
		onClick="document.getElementById('PImage').src='<?php echo $ProductImage3 ?>'" />
	</td>
	<td>
		<table cellspacing="4px" cellpadding="4px">
		<tr>
			<td>Product Name</td>
			<td>
				: <b><?php echo $rows['ProductName'] ?></b>
			</td>
		</tr>
		<tr>
			<td>Brand</td>
			<td>
				: <b><?php echo $rows['Brand'] ?></b>
			</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>
				: <b><?php echo $rows['Description'] ?></b>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>
				: <b style="color: red;"><?php echo $rows['Price'] ?> MMK</b>
			</td>
		</tr>
		<tr>
			<td>Buy Quantity</td>
			<td>
				: <input type="number" name="txtBuyQuantity" value="1" min="1" max="<?php echo $rows['Quantity']; ?>" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="txtProductID" value="<?php echo $rows['ProductID'] ?>" />
				: <input type="submit" name="btnAddtoCart" value="Add to Cart" />
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

</form>
</body>
</html>
<?php 
include('footer.php');
?>

