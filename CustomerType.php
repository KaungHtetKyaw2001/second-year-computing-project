<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');

if (isset($_POST['btnRegister'])) 
{
	$CustomerTypeID = $_POST['txtCustomerTypeID'];
	$CustomerType = $_POST['txtCustomerType'];
	$Insert_CustomerType= "INSERT INTO `customertype`(`CustomerTypeID`, `CustomerType`) VALUES ('$CustomerTypeID','$CustomerType')";
	$Insert_Query = mysqli_query($connect,$Insert_CustomerType);
	if ($Insert_Query) 
	{
		echo "<script>window.alert('Customer Type Registration completed.')</script>";
		echo "<script>window.location='CustomerType.php'</script>";
	}
	else
	{
		echo "<p>Customer Type Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='CustomerType.php'</script>";
	}
}
if (isset($_POST['Update'])) 
{
	$_SESSION['CustomerTypeID']=$rows['CustomerTypeID'];
	$_SESSION['CustomerType']=$rows['CustomerType'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Type</title>

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

<form action="CustomerType.php" method="Post">
	<fieldset>
		<legend>Customer Type</legend>
		<h1 align="center">Customer Type Form</h1>
		<table align="center">
			<tr>
					<td>Customer Type ID</td>
					<td>
						<input type="text" name="txtCustomerTypeID" value="<?php echo AutoID('customertype','CustomerTypeID','CT-',6) ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Customer Type</td>
					<td>
						<input type="text" name="txtCustomerType" placeholder="Customer Type" required>
					</td>
			</tr>
			<td>
					<input type="Submit" name="btnRegister" value="Register">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>

	<fieldset>
		<legend>Customer Type List:</legend>
	<table id="tableid" class="display" align="center">
		<thead>
			<tr>
	<th>CustomerTypeID</th>
	<th>CustomerType</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_CustomerType="SELECT * FROM CustomerType";
	$CustomerType_Query=mysqli_query($connect,$Select_CustomerType);
	$CustomerType_Count=mysqli_num_rows($CustomerType_Query);

	for($i=0;$i<$CustomerType_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($CustomerType_Query);
		$CustomerTypeID=$rows['CustomerTypeID'];

		echo "<tr>";
			echo "<td>$CustomerTypeID</td>";
			echo "<td>" . $rows['CustomerType'] . "</td>";
			echo "<td>
				  <a href='CustomerTypeUpdate.php?CustomerTypeID=$CustomerTypeID'>Update</a> |
				  <a href='CustomerTypeDelete.php?CustomerTypeID=$CustomerTypeID'>Delete</a>
				  </td>
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
include	('footer.php');
 ?>