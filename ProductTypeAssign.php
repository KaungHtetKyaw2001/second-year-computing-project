<?php
session_start();
include('Connect.php');
include('StaffHeaderAfterLogin.php');
if (isset($_POST['Assign'])) 
{

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Product Type Assign</title>

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

<form action="Order_History.php" method="post">
<fieldset>
<legend>Product Type Assign</legend>
<?php  
	$ProductID=$_SESSION['ProductID'];

	$ProductSelect="SELECT * FROM Product
			";
	$Query=mysqli_query($connect,$ProductSelect);
	$size=mysqli_num_rows($Query);
?>
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Brand</th>
		<th>Quantity</th>
		<th>Description</th>
		<th>Price</th>
		<th>Product Image 1</th>
		<th>Product Image 2</th>
		<th>Product Image 3</th>
		<th>Import ID</th>
		<th>Product Type ID</th>
		<th>Staff ID</th>
		<th>Purchase ID</th>
		<th>Product Type ID</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	for($i=0;$i<$size;$i++) 
	{ 
		$rows=mysqli_fetch_array($result);
		$ProductID=$rows['ProductID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>" . $rows['ProductID'] . "</td>";
			echo "<td>" . $rows['ProduceName'] . "</td>";
			echo "<td>" . $rows['Brand'] . "</td>";
			echo "<td>" . $rows['Category'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			echo "<td>" . $rows['Price'] . "</td>";
			echo "<td>" . $rows['ProductImage1'] . "</td>";
			echo "<td>" . $rows['ProductImage2'] . "</td>";
			echo "<td>" . $rows['ProductImage3'] . "</td>";
			echo "<td>" . $rows['ImportID'] . "</td>";
			echo "<td>" . $rows['ProductTypeID'] . "</td>";
			echo "<td>" . $rows['StaffID'] . "</td>";
			echo "<td>" . $rows['PurchaseID'] . "</td>";
			echo "<td>" . $rows['ProductTypeID'] . "</td>";
			echo "<td>";
		echo "</tr>";
	}
	?>
	</tbody>
	<tr>
		<td colspan="7" align="right">
		<select name="cboProductTypeID">
			<option>-Choose Product Type ID-</option>
			<?php 
			$ProductType_Select="SELECT * FROM producttype";
			$Query=mysqli_query($connect,$ProductType_Select);
			$Count=mysqli_num_rows($Query);

			for($i=0;$i<$Count;$i++) 
			{ 
				$rows=mysqli_fetch_array($Query);
				$ProductTypeID=$rows['ProductTypeID'];
				$ProductType=$rows['ProductType'];
				$ProductSpecificType=$rows['ProductSpecificType'];

				echo "<option value='$ProductTypeID'> $ProductTypeID - $ProductType - $ProductSpecificType </option>";
			}
			?>
		</select>
		|
		<input type="submit" name="btnAssign" value="Assign" />
		</td>
	</tr>
	</table>	

</fieldset>

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>