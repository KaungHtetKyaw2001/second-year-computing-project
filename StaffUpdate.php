<?php 
session_start();
include('connect.php');
include('StaffHeaderAfterLogin.php');
if (isset($_REQUEST['StaffID'])) 
{
	$StaffID=$_REQUEST['StaffID'];
	$select="SELECT * From staff
			WHERE StaffID='$StaffID'";
	$ret=mysqli_query($connect,$select);
	$req=mysqli_fetch_array($ret);
	$sid=$req['StaffID'];
	$sname=$req['StaffName'];
	$suname=$req['StaffUsername'];
	$Age=$req['Age'];
	$gen=$req['Gender'];
	$rol=$req['Role'];
	$date=$req['DateOfBirth'];
	$add=$req['Address'];
	$em=$req['Email'];
	$nrc=$req['NRCNumber'];
	$ph=$req['PhoneNumber'];
	$spw=$req['StaffPassword'];
	$simage=$req['StaffImage'];
	$depid=$req['DepartmentID'];
}

if (isset($_POST['btnUpdate']))
{
	$StaffID=$_POST['txtStaffID'];
	$staffname=$_POST['txtstaffname'];
	$age=$_POST['txtAge'];
	$gender=$_POST['cboGender'];
	$role=$_POST['cboRole'];
	$dob=$_POST['txtDateOfBirth'];
	$address=$_POST['txtAddress'];
	$email=$_POST['txtemail'];
	$NRCnumber=$_POST['txtNRCNumber'];
	$phonenumber=$_POST['txtPhoneNumber'];
	$StaffUsername=$_POST['txtStaffUsername'];
	$Password=$_POST['txtPassword'];
	$DepartmentID=$_POST['cboDepartmentID'];

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

	$UpdateStaff = "UPDATE staff
					SET `StaffName`='$staffname',
						`Age`='$age',
						`Gender`='$gender',
						`Role`='$role',
						`DateOfBirth`='$dob',
						`Address`='$address',
						`Email`='$email',
						`NRCnumber`='$NRCnumber',
						`PhoneNumber`='$phonenumber',
						`StaffUsername`='$StaffUsername',
						`StaffPassword`='$Password',
						`StaffImage`='$Image',
						`DepartmentID` ='$DepartmentID'
					WHERE `StaffID` = '$StaffID'";
	$Query_Update = mysqli_query($connect,$UpdateStaff);

	if ($Query_Update)
	{
		echo "<script>window.alert('Staff Account Successfully Updated!')</script>";
		echo "<script>window.location='StaffAdministration.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}

if(isset($_GET['StaffID'])) 
{
	$StaffID=$_SESSION['StaffID'];

	$query="SELECT * FROM staff WHERE StaffID='$StaffID'";
	$ret=mysqli_query($connect,$query);
	$Row=mysqli_fetch_array($ret);
	// $rows1=mysqli_fetch_array($ret);
}
else
{
	$StaffID="";
	echo "<script>window.alert('An error has occured in the update.| StaffID not found')</script>";
	echo "<script>window.location='StaffAdministration.php'</script>";
	exit();
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Update</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>
<form action="StaffUpdate.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Update your account here</legend>
			<h1 align="center">Update your Account</h1>
			<table align="center">
				<tr><td><input type="hidden" name="txtStaffID" value="<?php echo $sid ?>" /></td></tr>
				<!-- Staff Name and User name -->
				<tr>
					<td>Staff Name</td>
					<td>
						<input type="text" name="txtstaffname" placeholder="Your Full Name" value="<?php echo $sname ?>" required>
					</td>

					<td>Staff Username</td>
					<td>
						<input type="text" name="txtStaffUsername" value="<?php echo $suname ?>" required />
					</td>
				</tr>

				<!-- Staff Age and Password -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $Age ?>"required>
					</td>

					<td>Staff Password</td>
					<td>
						<input type="password" name="txtPassword" placeholder="Enter Staff Password" value="<?php echo $_SESSION['StaffPassword'] ?>" required>
					</td>
				</tr>

				<!-- Staff Gender and Image -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $gen ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>

					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $simage ?>">
					</td>
				</tr>
				
				<!-- Staff Role -->
				<tr>
					<td>Role</td>
					<td>
						<select name = "cboRole" placeholder="Choose Role" value="<?php echo $role ?>" required>
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
				<td>Department</td>
	<td>
		<select name="cboDepartmentID">
			<option>-Add Respective Department-</option>
			<?php 
			$Department_Select="SELECT * FROM Department";
			$Query=mysqli_query($connect,$Department_Select);
			$count=mysqli_num_rows($Query);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows=mysqli_fetch_array($Query);
				$DepartmentID=$rows['DepartmentID'];
				$DepartmentName=$rows['DepartmentName'];
				echo "<option value='$DepartmentID'> $DepartmentID - $DepartmentName </option>";
			}
			?>
		</select>
	</td>
				<td></td>
				<tr>
				<td>
					<input type="Submit" name="btnUpdate" value="Update">
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