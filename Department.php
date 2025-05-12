<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');

if (isset($_POST['btnRegister'])) 
{
	$DepartmentID = $_POST['txtdepartmentID'];
	$DepartmentName = $_POST['txtdepartmentName'];
	$Description = $_POST['txtdescription'];
	$Insert_Department= "INSERT INTO `department`(`DepartmentID`, `DepartmentName`, `Description`) VALUES ('$DepartmentID','$DepartmentName','$Description')";
	$Insert_Query = mysqli_query($connect,$Insert_Department);
	if ($Insert_Query) 
	{
		echo "<script>window.alert('Department Registration completed.')</script>";
		echo "<script>window.location='Department.php'</script>";
	}
	else
	{
		echo "<p>Department Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='Department.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Department</title>

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

<form action="Department.php" method="post">
	<fieldset>
		<legend>Department form</legend>
		<h1 align="center">Department Register</h1>
		<table align="center">
			<tr>
				<td>Department ID</td>
				<td><input type="text" name="txtdepartmentID" value="<?php echo AutoID('department','DepartmentID','D-',6) ?>" readonly></td>
			</tr>
			<tr>
				<td>Department Name</td>
				<td><input type="text" name="txtdepartmentName" placeholder="Department Name" required></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="txtdescription" required></textarea></td>
			</tr>
			<td><input type="submit" name="btnRegister" value="Register"></td>
			<td><input type="Reset" value="Clear" colspan='2px'></td>
			</tr>
		</table>
	</fieldset>

	<fieldset>
		<legend>Department List</legend>
		<table id = "tableid" class="display" align="center" cellpadding="10px">
		<thead>
			<tr>
	<th>DepartmentID</th>
	<th>Department</th>
	<th>Description</th>
		   </tr>	
		</thead>

		<tbody>
		<?php 
		$Select_Department="SELECT * FROM Department";
		$Department_Query=mysqli_query($connect,$Select_Department);
		$Department_Count=mysqli_num_rows($Department_Query);

	for($i=0;$i<$Department_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($Department_Query);
		$DepartmentID=$rows['DepartmentID'];

		echo "<tr>";
			echo "<td>$DepartmentID</td>";
			echo "<td>" . $rows['DepartmentName'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			echo "<td><a href='DepartmentUpdate.php?DepartmentID=$DepartmentID'>Update</a> |
					  <a href='DepartmentDelete.php?DepartmentID=$DepartmentID'>Delete</a>
				  
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