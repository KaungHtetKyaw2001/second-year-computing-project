<?php 	
include('connect.php');
include('AutoID_Functions.php');
include('StaffHeader.php');

if (isset($_POST['btnRegister'])) 
{
	$staffID=$_POST['txtStaffID'];
	$staffname=$_POST['txtstaffname'];
	$age=$_POST['txtAge'];
	$gender=$_POST['cboGender'];
	$role=$_POST['cboRole'];
	$dob=$_POST['txtDateOfBirth'];
	$address=$_POST['txtAddress'];
	$email=$_POST['txtemail'];
	$NRCnumber=$_POST['txtNRCNumber'];
	$phonenumber=$_POST['txtPhoneNumber'];
	$Username=$_POST['txtStaffUsername'];
	$Password=$_POST['txtPassword'];

	$Image=$_FILES['txtImage']['name'];
	$StaffImage='StaffImage/';
	if ($StaffImage) 
	{
		$filename=$StaffImage."_".$Image;
 			$Copied=copy($_FILES['txtImage']['tmp_name'],$filename);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured. Cannot Upload Image");
 			}
	}
	
    // For Email address checking
	$Select_Email="SELECT * FROM Staff WHERE Email='$email'";
	$Query_Email=mysqli_query($connect,$Select_Email);
	$Email_Count=mysqli_num_rows($Query_Email);
	if ($Email_Count>0) 
	{
		echo "<script>window.alert('Your staff email of $txtEmail already exist! You should try with the another')</script>";
		echo "<script>window.location='StaffRegister.php'</script>";
		exit();
	}
	$DepartmentID=$_POST['cboDepartmentID'];
	// For inserting data
	$Insert_Staff="INSERT INTO `staff`(`StaffID`,`StaffName`, `Age`, `Gender`, `Role`, `DateOfBirth`, `Address`, `Email`, `NRCNumber`, `PhoneNumber`, `StaffUsername`, `StaffPassword`, `StaffImage`,`DepartmentID`) 
				   VALUES ('$staffID','$staffname','$age','$gender','$role','$dob','$address','$email','$NRCnumber','$phonenumber','$Username','$Password','$filename','$DepartmentID')";
	$Insert_Query=mysqli_query($connect,$Insert_Staff);
	echo $Insert_Query;

	if ($Insert_Query) 
	{
		echo "<script>window.alert('Staff Account Registration completed. Welcome!!!')</script>";
		echo "<script>window.location='StaffLogin.php'</script>";
	}
	else
	{
		// echo "<p>Staff Account Registration Failed! Please check your information and data." . mysqli_error($connect). "</p>";
		// echo "<script>window.location='StaffRegister.php'</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Register</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
	<form action="StaffRegister.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Staff Register</legend>
			<h1 align="center">Register your account here</h1>
			<table align="center">

				<tr>
					<td>Staff ID</td>
					<td>
						<input type="text" name="txtStaffID" value="<?php echo AutoID('staff','StaffID','S-',6) ?>" readonly>
					</td>
					
					<td>Staff Username</td>
					<td>
						<input type="text" name="txtStaffUsername" placeholder="Enter Staff Username" required>
					</td>
				</tr>
				<!-- Staff Name and Password -->
				<tr>
					<td>Staff Name</td>
					<td>
						<input type="text" name="txtstaffname" placeholder="Your Full Name" required>
					</td>

					<td>Staff Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Staff Password" required>
					</td>
				</tr>

				<!-- Staff Age and Image -->
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
				
				<!-- Staff Role -->
				<tr>
					<td>Role</td>
					<td>
						<select name = "cboRole" placeholder="Choose Role" required>
							<option>Oil Staff</option>
							<option>Medicine Staff</option>
							<option>Stationary Item Staff</option>
							<option>Paper Staff</option>
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

				<tr>
					<td>Department ID</td>
		<td>
		<select name="cboDepartmentID">
			<option>-Choose Department ID-</option>
			<?php 
			$Department_query="SELECT * FROM department";
			$ret=mysqli_query($connect,$Department_query);
			$count=mysqli_num_rows($ret);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$DepartmentID=$rows['DepartmentID'];
				$DepartmentName=$rows['DepartmentName'];

				echo "<option value='$DepartmentID'> $DepartmentID - $DepartmentName </option>";
			}
			?>
		</select>
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