<?php 
session_start();
include('connect.php');
include('CustomerHeaderAfterLogin.php');
// if(isset($_SESSION['CustomerID'])) 
// {
// 	$CustomerID=$_GET['CustomerID'];

// 	$query="SELECT * FROM customer WHERE CustomerID='$CustomerID'";
// 	$ret=mysqli_query($connect,$query);
// 	$Row=mysqli_fetch_array($ret);
// 	// $rows1=mysqli_fetch_array($ret);
// }
// else
// {
// 	$StaffID="";
// 	echo "<script>window.alert('An error has occured in the update.| CustomerID not found')</script>";
// 	echo "<script>window.location='CustomerUpdate.php'</script>";
// 	exit();
// }
if (isset($_POST['btnUpdate']))
{
	$CustomerID=$_POST['txtCustomerID'];
	$Customername=$_POST['txtCustomername'];
	$age=$_POST['txtAge'];
	$gender=$_POST['cboGender'];
	$dob=$_POST['txtDateOfBirth'];
	$address=$_POST['txtAddress'];
	$email=$_POST['txtemail'];
	$NRCnumber=$_POST['txtNRCNumber'];
	$phonenumber=$_POST['txtPhoneNumber'];
	$CustomerUsername=$_POST['txtCustomerUsername'];
	$Password=$_POST['txtPassword'];

	$Image=$_FILES['txtImage']['name'];
	$CustomerImage='CustomerImage/';
	if ($CustomerImage) 
	{
		$filename=$CustomerImage."_".$Image;
 			$Copied=copy($_FILES['txtImage']['tmp_name'],$filename);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}

	$UpdateCustomer = "UPDATE customer
					SET `CustomerName`='$Customername',
						`Age`='$age',
						`Gender`='$gender',
						`DateOfBirth`='$dob',
						`Address`='$address',
						`Email`='$email',
						`NRCnumber`='$NRCnumber',
						`PhoneNumber`='$phonenumber',
						`CustomerUsername`='$CustomerUsername',
						`CustomerPassword`='$Password',
						`CustomerImage`='$Image'
					WHERE `CustomerID` = '$CustomerID'";
	$Query_Update = mysqli_query($connect,$UpdateCustomer);

	if ($Query_Update)
	{
		echo "<script>window.alert('Customer Account Successfully Updated!')</script>";
		echo "<script>window.location='CustomerLogin.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Update</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>
<form action="CustomerUpdate.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Update your account here</legend>
			<h1 align="center">Update your Account</h1>
			<table align="center">
				<tr><td><input type="hidden" name="txtCustomerID" value="<?php echo $_SESSION['CustomerID'] ?>" /></td></tr>
				<!-- Customer Name and User name -->
				<tr>
					<td>Customer Name</td>
					<td>
						<input type="text" name="txtCustomername" placeholder="Your Full Name" value="<?php echo $_SESSION['CustomerName'] ?>" required>
					</td>

					<td>Customer Username</td>
					<td>
						<input type="text" name="txtCustomerUsername" placeholder='Your acc username' value="<?php echo $_SESSION['CustomerUsername'] ?>" required />
					</td>
				</tr>

				<!-- Customer Age and Password -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $_SESSION['Age'] ?>"required>
					</td>

					<td>Customer Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Staff Password" value="<?php echo $_SESSION['CustomerPassword'] ?>" required>
					</td>
				</tr>

				<!-- Customer Gender and Image -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $_SESSION['Gender'] ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>

					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $_SESSION['CustomerImage'] ?>">
					</td>
				</tr>

				<!-- Date of Birth -->
				<tr>
					<td>Date of Birth</td>
					<td>
						<input type="Date" name="txtDateOfBirth" value="<?php echo $_SESSION['DateOfBirth'] ?>">
					</td>
				</tr>
					
				<!-- Address -->
				<tr>
					<td>Address</td>
					<td>
						<input type="text" name="txtAddress" value="<?php echo $_SESSION['Address'] ?>">
					</td>
				</tr>

				<!-- Email -->
				<tr>
					<td>Email</td>
					<td>
						<input type="Email" name="txtemail" placeholder="Enter your Email" value="<?php echo $_SESSION['Email'] ?>" required>
					</td>
				</tr>
					
				<!-- NRC Number -->
				<tr>
					<td>NRC Number</td>
					<td>
						<input type="text" name="txtNRCNumber" placeholder="Enter your NRC Number" value="<?php echo $_SESSION['NRCNumber'] ?>" required>
					</td>
				</tr>
				
				<!-- Phone Number -->
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" value="<?php echo $_SESSION['PhoneNumber'] ?>" required>
					</td>
				</tr>	
				<td></td>
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