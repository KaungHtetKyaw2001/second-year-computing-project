<?php  
session_start(); //Session Declare
include('connect.php');
include('AutoID_Functions.php');
include('SupplierHeaderAfterLogin.php');

$SupplierID=$_SESSION['SupplierID'];
$query="SELECT * FROM Supplier where SupplierID = '$SupplierID'";
$result=mysqli_query($connect,$query);
$row1=mysqli_fetch_array($result);
if (isset($_POST['btnAssign'])) 
{
	$SupplierTypeID=$_POST['cboSupplierTypeID'];
	$Update_SupplierType="UPDATE`supplier`
						  SET `SupplierTypeID` = '$SupplierTypeID'
						  WHERE SupplierID = '$SupplierID'";
	$Update_query=mysqli_query($connect,$Update_SupplierType);
	if ($Update_query) 
	{
		echo "<script>window.alert('Supplier type is assigned to this supplier successfully!')</script>";
		echo "<script>window.location='SupplierTypeAssign.php'</script>";
	}
	else
	{
		echo "<script>window.alert('Cannot assign to this supplier!')".mysqli_error($connect)."</script>";
		echo "<script>window.location='SupplierTypeAssignation.php'</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Supplier Type Assignation</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>
	<form action="SupplierTypeAssignation.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Supplier Type Assignation</legend>
			<h1 align="center">Assign supplier type here</h1>
			<table align="center">

				<tr>
					<td>Supplier ID</td>
					<td>
						<input type="text" name="txtSupplierID" value="<?php echo $row1['SupplierID'] ?>" readonly>
					</td>
					<td>Supplier Username</td>
					<td>
						<input type="text" name="txtSupplierUsername" placeholder="Enter Supplier Username" value="<?php echo $row1['SupplierUsername'] ?>" required>
					</td>
				</tr>
				<!-- Customer Name and Password -->
				<tr>
					<td>Supplier Name</td>
					<td>
						<input type="text" name="txtSuppliername" placeholder="Your Full Name" value="<?php echo $row1['SupplierName'] ?>" required>
					</td>
					<td>Supplier Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Supplier Password" value="<?php echo $row1['SupplierPassword'] ?>" required>
					</td>
					
				</tr>

				<!-- Customer Age and Image -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $row1['Age'] ?>" required>
					</td>
					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $row1['SupplierImage'] ?>">
					</td>
					
				</tr>

				<!-- Customer Gender  -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $row1['Gender'] ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
				</tr>

				<!-- Date of Birth -->
				<tr>
					<td>Date of Birth</td>
					<td>
						<input type="Date" name="txtDateOfBirth" value="<?php echo $row1['DateOfBirth'] ?>">
					</td>
				</tr>
					
				<!-- Address -->
				<tr>
					<td>Address</td>
					<td>
						<input type="text" name="txtAddress" value="<?php echo $row1['Address'] ?>">
					</td>
				</tr>

				<!-- Email -->
				<tr>
					<td>Email</td>
					<td>
						<input type="Email" name="txtemail" placeholder="Enter your Email" value="<?php echo $row1['Email'] ?>" required>
					</td>
				</tr>
					
				<!-- NRC Number -->
				<tr>
					<td>NRC Number</td>
					<td>
						<input type="text" name="txtNRCNumber" placeholder="Enter your NRC Number" value="<?php echo $row1['NRCNumber'] ?>" required>
					</td>
				</tr>
				
				<!-- Phone Number -->
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" value="<?php echo $row1['PhoneNumber'] ?>" required>
					</td>
				</tr>
				<tr>
					<td>Supplier Type ID</td>
		<td>
		<select name="cboSupplierTypeID">
			<option>-Choose Supplier Type ID-</option>
			<?php 
			$SupplierType_query="SELECT * FROM suppliertype";
			$ret=mysqli_query($connect,$SupplierType_query);
			$count=mysqli_num_rows($ret);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$SupplierTypeID=$rows['SupplierTypeID'];
				$SupplierType=$rows['SupplierType'];


				echo "<option value='$SupplierTypeID'> $SupplierTypeID - $SupplierType</option>";
			}
			?>
		</select>
		</td>
			</tr>
				<td></td>
				<td>
					<input type="Submit" name="btnAssign" value="Assign">
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