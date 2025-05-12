<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include ('StaffHeaderAfterLogin.php');
if (isset($_POST['btnUpdate'])) 
{
	$CustomerTypeID = $_POST['txtCustomerTypeID'];
	$CustomerType = $_POST['txtCustomerType'];
	$Update_CustomerType="UPDATE `customertype` 
						  SET `CustomerType`='$CustomerType' 
						  WHERE `CustomerTypeID`='$CustomerTypeID'";
	$Update_Query = mysqli_query($connect,$Update_CustomerType);
	if ($Update_Query) 
	{
		echo "<script>window.alert('Customer Type Registration completed.')</script>";
		echo "<script>window.location='CustomerType.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}

}
if(isset($_GET['CustomerTypeID'])) 
{
	$CustomerTypeID=$_GET['CustomerTypeID'];

	$query="SELECT * FROM customertype WHERE CustomerTypeID='$CustomerTypeID'";
	$ret=mysqli_query($connect,$query);
	$rows=mysqli_fetch_array($ret);
}
else
{
	$CustomerTypeID="";
	echo "<script>window.alert('Somthing went wrong | CustomerTypeID not found')</script>";
	echo "<script>window.location='CustomerType.php'</script>";
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Type Update</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="CustomerTypeUpdate.php" method="Post">
	<fieldset>
		<legend>Customer Type</legend>
		<h1 align="center">Customer Type Update</h1>
		<table align="center">
			<tr>
					<td>Customer Type ID</td>
					<td>
						<input type="text" name="txtCustomerTypeID" value = "<?php echo $rows['CustomerTypeID'] ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Customer Type</td>
					<td>
						<input type="text" name="txtCustomerType" placeholder="Customer Type" value="<?php echo $rows['CustomerType']?>" required>
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