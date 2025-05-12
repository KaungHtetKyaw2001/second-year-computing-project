<?php 	
session_start();
include('connect.php');
include('SupplierHeader.php');
include('AutoID_Functions.php');

if (isset($_POST['btnRegister'])) 
{
	$txtSupplierID=$_POST['txtSupplierID'];
	$txtSuppliername=$_POST['txtSuppliername'];
	$txtAge=$_POST['txtAge'];
	$txtDateOfBirth=$_POST['txtDateOfBirth'];
	$txtAddress=$_POST['txtAddress'];
	$cboGender=$_POST['cboGender'];
	$txtemail=$_POST['txtemail'];
	$txtNRCNumber=$_POST['txtNRCNumber'];
	$txtPhoneNumber=$_POST['txtPhoneNumber'];
	$txtSupplierUsername=$_POST['txtSupplierUsername'];
	$txtpassword=$_POST['txtpassword'];


	//Image Upload Start---------------------------------------
	$SupplierPhoto=$_FILES['txtImage']['name']; 			 //Hello.jpg
	$Folder="SupplierImage/";  										 //Define Folder Destination

	$filename=$Folder . '_' . $SupplierPhoto; 					 //CustomerImage/_Hello.jpg
	$copied=copy($_FILES['txtImage']['tmp_name'], $filename);

	if(!$copied) 
	{
		echo "<p>Error in Supplier Photo Upload</p>";
		exit();
	}

	// $Image=$_FILES['txtImage']['name'];
	// $CustomerImage='CustomerImage/';
	// if ($CustomerImage) 
	// {
	// 	$filename=$imagefolder."_".$Image;
 // 			$Copied=copy($_FILES['txtImage']['tmp_name'],$filename);
 // 			if (!$Copied) 
 // 			{
 // 				exit("Unexpected Error Occured. Cannot Upload Image");
 // 			}
	// }

   	//Check Supplier Email Already exist or not
	$check_email="SELECT * FROM supplier WHERE Email='$txtemail'";
	$result=mysqli_query($connect,$check_email);
	$count=mysqli_num_rows($result);

	if($count > 0) 
	{
		echo "<script>window.alert('Supplier Email $txtemail already exist!')</script>";
		echo "<script>window.location='SupplierRegister.php'</script>";
		exit();
	}

	// // For password checking
	// $Select_Password="SELECT * FROM Supplier WHERE SupplierPassword='$Password'";
	// $Query_Password=mysqli_query($connect,$Select_Password);
	// $Password_Count=mysqli_num_rows($Query_Password);
	// if ($Password_Count>0) 
	// {
	// 	echo "<script>window.alert('Your Supplier password of $txtPassword already exist! You should try with the another')</script>";
	// 	echo "<script>window.location='SupplierRegister.php'</script>";
	// 	exit();
	// }

	// // For Username checking
	// $Select_Password="SELECT * FROM Supplier WHERE SupplierUsername='$Username'";
	// $Query_Password=mysqli_query($connect,$Select_Password);
	// $Username_Count=mysqli_num_rows($Query_Password);
	// if ($Username_Count>0) 
	// {
	// 	echo "<script>window.alert('Your Supplier Username of $txtSupplierUsername already exist! You should try with the another')</script>";
	// 	echo "<script>window.location='CustomerRegister.php'</script>";
	// 	exit();
	// }


	// For inserting data
	$Insert_Customer="INSERT INTO `Supplier`(`SupplierID`, `SupplierName`, `Age`, `DateOfBirth`, `Address`, `Gender`, `Email`, `NRCNumber`, `PhoneNumber`, `SupplierUsername`, `SupplierPassword`, `SupplierImage`) VALUES ('$txtSupplierID','$txtSuppliername','$txtAge','$txtDateOfBirth','$txtAddress','$cboGender','$txtemail','$txtNRCNumber','$txtPhoneNumber','$txtSupplierUsername','$txtpassword','$filename')";
	$Insert_Query=mysqli_query($connect,$Insert_Customer);

	if ($Insert_Query) 
	{
		echo "<script>window.alert('Supplier Account Registration completed. Welcome!!!')</script>";
		echo "<script>window.location='SupplierLogin.php'</script>";
	}
	else
	{
		echo "<p>Supplier Account Registration Failed! Please check your information and data." . mysqli_error($connect). "</p>";
		
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Register</title>
	<script type="text/javascript" src="DatePicker/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="DatePicker/datepicker.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
	<form action="SupplierRegister.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Supplier Register</legend>
			<h1 align="center">Register your account here</h1>
			<table align="center">

				<tr>
					<td>Supplier ID</td>
					<td>
						<input type="text" name="txtSupplierID" value="<?php echo AutoID('Supplier','SupplierID','SU-',6) ?>" readonly>
					</td>
					<td>Supplier Username</td>
					<td>
						<input type="text" name="txtSupplierUsername" placeholder="Enter Supplier Username" required>
					</td>
				</tr>
				<!-- Customer Name and Password -->
				<tr>
					<td>Supplier Name</td>
					<td>
						<input type="text" name="txtSuppliername" placeholder="Your Full Name" required>
					</td>
					<td>Supplier Password</td>
					<td>
						<input type="text" name="txtpassword" placeholder="Enter Supplier Password" required>
					</td>
				</tr>

				<!-- Customer Age and Image -->
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

				<!-- Staff Gender -->
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
	
