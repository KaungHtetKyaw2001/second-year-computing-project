<?php 	
include('connect.php');
include('CustomerHeader.php');
include('AutoID_Functions.php');

if (isset($_POST['btnRegister'])) 
{
	$CustomerID=$_POST['txtCustomerID'];
	$Customername=$_POST['txtCustomername'];
	$age=$_POST['txtAge'];
	$dob=$_POST['txtDateOfBirth'];
	$address=$_POST['txtAddress'];
	$gender=$_POST['cboGender'];
	$email=$_POST['txtemail'];
	$NRCnumber=$_POST['txtNRCNumber'];
	$phonenumber=$_POST['txtPhoneNumber'];
	$Username=$_POST['txtCustomerUsername'];
	$Password=$_POST['txtPassword'];

	$Image=$_FILES['txtImage']['name'];
	$CustomerImage='CustomerImage/';
	if ($CustomerImage) 
	{
		$filename=$imagefolder."_".$Image;
 			$Copied=copy($_FILES['txtImage']['tmp_name'],$filename);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}

    // For Email address checking
	$Select_Email="SELECT * FROM Customer WHERE Email='$email'";
	$Query_Email=mysqli_query($connect,$Select_Email);
	$Email_Count=mysqli_num_rows($Query_Email);
	if ($Email_Count>0) 
	{
		echo "<script>window.alert('Your customer email of $txtEmail already exist! You should try with the another')</script>";
		echo "<script>window.location='CustomerRegister.php'</script>";
		exit();
	}

	// For inserting data
	$Insert_Customer="INSERT INTO `customer`(`CustomerID`, `CustomerName`, `Age`, `DateOfBirth`, `Address`, `Gender`, `Email`, `NRCNumber`, `PhoneNumber`, `CustomerUsername`, `CustomerPassword`, `CustomerImage`) VALUES ('$CustomerID','$Customername','$age','$dob','$address','$gender','$email','$NRCnumber','$phonenumber','$Username','$Password','$filename')";
	$Insert_Query=mysqli_query($connect,$Insert_Customer);

	if ($Insert_Query) 
	{
		echo "<script>window.alert('Customer Account Registration completed. Welcome!!!')</script>";
		echo "<script>window.location='CustomerLogin.php'</script>";
	}
	else
	{
		echo "<p>Customer Account Registration Failed! Please check your information and data." . mysqli_error($connect). "</p>";
		echo "<script>window.location='CustomerRegister.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Register</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
	<form action="CustomerRegister.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Customer Register</legend>
			<h1 align="center">Register your account here</h1>
			<table align="center">

				<tr>
					<td>Customer ID</td>
					<td>
						<input type="text" name="txtCustomerID" value="<?php echo AutoID('Customer','CustomerID','C-',6) ?>" readonly>
					</td>
					<td>Customer Username</td>
					<td>
						<input type="text" name="txtCustomerUsername" placeholder="Enter Customer Username" required>
					</td>
				</tr>
				<!-- Customer Name and User name -->
				<tr>
					<td>Customer Name</td>
					<td>
						<input type="text" name="txtCustomername" placeholder="Your Full Name" required>
					</td>
					<td>Customer Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Customer Password" required>
					</td>
					
				</tr>

				<!-- Customer Age and Password -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" required>
					</td>
					<td>Image</td>
					<td>
						<input type="file" name="txtImage">
					</td>
				</tr>

				<!-- Staff Gender and Image -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>

				</tr>
				

				<!-- Date of Birth -->
				<tr>
					<td>Date of Birth</td>
					<td>
						<input type="Date" name="txtDateOfBirth">
					</td>
				</tr>
					
				<!-- Address -->
				<tr>
					<td>Address</td>
					<td>
						<textarea name="txtAddress"></textarea>
					</td>
				</tr>

				<!-- Email -->
				<tr>
					<td>Email</td>
					<td>
						<input type="Email" name="txtemail" placeholder="Enter your Email" required>
					</td>
				</tr>
					
				<!-- NRC Number -->
				<tr>
					<td>NRC Number</td>
					<td>
						<input type="text" name="txtNRCNumber" placeholder="Enter your NRC Number" required>
					</td>
				</tr>
				
				<!-- Phone Number -->
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" required>
					</td>
				</tr>	
				<td></td>
				<td>
					<input type="Submit" name="btnRegister" value="Register">
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