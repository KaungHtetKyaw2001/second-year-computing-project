<?php  
session_start();
include('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');

if (isset($_REQUEST['CustomerID'])) 
{
	$CustomerID=$_REQUEST['CustomerID'];
	$query="SELECT * FROM Customer where CustomerID = '$CustomerID'";
	$result=mysqli_query($connect,$query);
	$req=mysqli_fetch_array($result);
	$CustomerID=$req['CustomerID'];
	$cname=$req['CustomerName'];
	$cuname=$req['CustomerUsername'];
	$Age=$req['Age'];
	$date=$req['DateOfBirth'];
	$gen=$req['Gender'];
	$add=$req['Address'];
	$em=$req['Email'];
	$nrc=$req['NRCNumber'];
	$ph=$req['PhoneNumber'];
	$cpw=$req['CustomerPassword'];
	$cimage=$req['CustomerImage'];
	$ctid=$req['CustomerTypeID'];
}

if (isset($_GET['btnAssign'])) 
{
	$cid=$_GET['txtCustomerID'];
	$CustomerTypeID=$_GET['cboCustomerTypeID'];
	$Update_CustomerType="UPDATE customer
						  SET CustomerTypeID = '$CustomerTypeID'
						  WHERE CustomerID = '$cid'";
	$Update_query=mysqli_query($connect,$Update_CustomerType);
	if ($Update_query) 
	{
		echo "<script>window.alert('Customer type is assigned to this customer successfully!')</script>";
		echo "<script>window.location='CustomerTypeAssign.php'</script>";
	}
	else
	{
		echo "<script>window.alert('Cannot assign to this customer!')".mysqli_error($connect)."</script>";
		echo "<script>window.location='CustomerTypeAssignation.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Type Assign</title>

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

<form action="CustomerTypeAssignation.php" method="get">
<fieldset>
			<legend>Customer Type Assignation</legend>
			<h1 align="center">Assign customer type here</h1>
			<table align="center">

				<tr>
					<td>Customer ID</td>
					<td>
						<input type="text" name="txtCustomerID" value="<?php echo $CustomerID ?>" readonly>
					</td>
					<td>Customer Username</td>
					<td>
						<input type="text" name="txtCustomerUsername" placeholder="Enter Customer Username" value="<?php echo $cuname ?>" required>
					</td>
				</tr>

				</tr>
				<!-- Customer Name and Password -->
				<tr>
					<td>Customer Name</td>
					<td>
						<input type="text" name="txtCustomername" placeholder="Your Full Name" value="<?php echo $cname ?>" required>
					</td>
					<td>Customer Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Customer Password" value="<?php echo $cpw ?>" required>
					</td>
					
				<!-- Customer Age and Image-->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $Age ?>" required>
					</td>

					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $cimage ?>">
					</td>
					
				</tr>

				<!-- Staff Gender -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $gen ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
				</tr>
				

				<!-- Date of Birth -->
				<tr>
					<td>Date of Birth</td>
					<td>
						<input type="Date" name="txtDateOfBirth" value="<?php echo $date ?>">
					</td>
				</tr>
					
				<!-- Address -->
				<tr>
					<td>Address</td>
					<td>
						<input type="text" name="txtAddress" value="<?php echo $add ?>">
					</td>
				</tr>

				<!-- Email -->
				<tr>
					<td>Email</td>
					<td>
						<input type="Email" name="txtemail" placeholder="Enter your Email" value="<?php echo $em ?>" required>
					</td>
				</tr>
					
				<!-- NRC Number -->
				<tr>
					<td>NRC Number</td>
					<td>
						<input type="text" name="txtNRCNumber" placeholder="Enter your NRC Number" value="<?php echo $nrc ?>" required>
					</td>
				</tr>
				
				<!-- Phone Number -->
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" value="<?php echo $ph ?>" required>
					</td>
				</tr>	
				<tr>
					<td>Customer Type ID</td>
		<td colspan="7">
		<select name="cboCustomerTypeID">
			<option>-Choose Customer Type ID-</option>
			<?php 
			$CustomerType_Select="SELECT * FROM customertype";
			$Query=mysqli_query($connect,$CustomerType_Select);
			$Count=mysqli_num_rows($Query);

			for($i=0;$i<$Count;$i++) 
			{ 
				$rows=mysqli_fetch_array($Query);
				$CustomerTypeID=$rows['CustomerTypeID'];
				$CustomerType=$rows['CustomerType'];

				echo "<option value='$CustomerTypeID'> $CustomerTypeID - $CustomerType </option>";
			}
			?>
		</select>
				<td></td>
				<tr>
					<td>
					<input type="Submit" name="btnAssign" value="Assign">
					<input type="Reset" value="Clear">
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