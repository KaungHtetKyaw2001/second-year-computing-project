<?php 
include ('connect.php');
include ('StaffHeaderAfterLogin.php');
include ('AutoID_Functions.php');
if (isset($_POST['btnUpdate'])) 
{
	$DepartmentID = $_POST['txtdepartmentID'];
	$DepartmentName = $_POST['txtdepartmentName'];
	$Description = $_POST['txtdescription'];
	$Update_Department="UPDATE `Department` 
						  SET `DepartmentName`='$DepartmentName',
						  	  `Description` = '$Description'
						  WHERE `DepartmentID`='$DepartmentID'";
	$Update_Query = mysqli_query($connect,$Update_Department);
	if ($Update_Query) 
	{
		echo "<script>window.alert('Department update completed.')</script>";
		echo "<script>window.location='Department.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}
}
if(isset($_GET['DepartmentID'])) 
{
	$DepartmentID=$_GET['DepartmentID'];

	$query="SELECT * FROM department WHERE DepartmentID='$DepartmentID'";
	$ret=mysqli_query($connect,$query);
	$rows=mysqli_fetch_array($ret);
}
else
{
	$DepartmentID="";
	echo "<script>window.alert('Somthing went wrong | DepartmentID not found')</script>";
	echo "<script>window.location='SupplierType.php'</script>";
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Department Update</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="DepartmentUpdate.php" method="post">
	<fieldset>
		<legend>Department Update form</legend>
		<h1 align="center">Department Update</h1>
		<table align="center">
			<tr>
				<td>Department ID</td>
				<td><input type="text" name="txtdepartmentID" value="<?php echo $rows['DepartmentID'] ?>" readonly></td>
			</tr>
			<tr>
				<td>Department Name</td>
				<td><input type="text" name="txtdepartmentName" placeholder="Department Name" value="<?php echo $rows['DepartmentName'] ?>" required></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="txtdescription" placeholder="Description" value="<?php echo $rows['Description'] ?>" required></td>
			</tr>
			<td><input type="submit" name="btnUpdate" value="Update"></td>
			<td><input type="Reset" value="Clear" colspan='2px'></td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>