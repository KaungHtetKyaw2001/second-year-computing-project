<?php 	
session_start();
include('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');

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

    // For Email address checking
	$Select_Email="SELECT * FROM Staff 
					WHERE Email='$email'";
	$Query_Email=mysqli_query($connect,$Select_Email);
	$Email_Count=mysqli_num_rows($Query_Email);
	if ($Email_Count>0) 
	{
		echo "<script>window.alert('Your staff email of $txtEmail already exist! You should try with the another')</script>";
		echo "<script>window.location='StaffAdministration.php'</script>";
		exit();
	}
	 // For password checking
	// $Select_Password="SELECT * FROM Staff WHERE StaffPassword='$password'";
	// $Query_Password=mysqli_query($connect,$Select_Password);
	// $Password_Count=mysqli_num_rows($Query_Password);
	// if ($Password_Count>0) 
	// {
	// 	echo "<script>window.alert('Your staff password of $txtPassword already exist! You should try with the another')</script>";
	// 	echo "<script>window.location='StaffRegister.php'</script>";
	// 	exit();
	// }

	// For Username checking
	$Select_Password="SELECT * FROM Staff WHERE StaffUsername='$Username'";
	$Query_Password=mysqli_query($connect,$Select_Password);
	$Username_Count=mysqli_num_rows($Query_Password);
	if ($Username_Count>0) 
	{
		echo "<script>window.alert('Your staff Username  of $txtStaffUsername already exist! You should try with the another')</script>";
		echo "<script>window.location='StaffAdministration.php'</script>";
		exit();
	}

	// For inserting data
	echo $Insert_Staff="INSERT INTO staff(StaffID, StaffName, Age, Gender, Role, DateOfBirth, Address, Email, NRCNumber, PhoneNumber, StaffUsername, StaffPassword, StaffImage, DepartmentID) 
				   VALUES ('$staffID','$staffname','$age','$gender','$role','$dob','$address','$email','$NRCnumber','$phonenumber','$Username','$Password','$filename','$DepartmentID')";
	$Insert_Query=mysqli_query($connect,$Insert_Staff);

	if ($Insert_Query) 
	{
		echo "<script>window.alert('Staff Account Registration completed. Welcome!!!')</script>";
		echo "<script>window.location='StaffAdministration.php'</script>";
	}
	else
	{
		// echo "<p>Staff Account Registration Failed! Please check your information and data." . mysqli_error($connect). "</p>";
		// echo "<script>window.location='StaffAdministration.php'</script>";
	}
}
if (isset($_POST['Edit']))
{
		$_SESSION['StaffID']=$rows['StaffID'];
		$_SESSION['StaffUsername']=$rows['StaffUsername'];
		$_SESSION['StaffPassword']=$rows['StaffPassword'];
		$_SESSION['StaffName']=$rows['StaffName'];
		$_SESSION['Age']=$rows['Age'];
		$_SESSION['Address']=$rows['Address'];
		$_SESSION['DateOfBirth']=$rows['DateOfBirth'];
		$_SESSION['Gender']=$rows['Gender'];
		$_SESSION['Email']=$rows['Email'];
		$_SESSION['NRCNumber']=$rows['NRCNumber'];
		$_SESSION['PhoneNumber']=$rows['PhoneNumber'];
		$_SESSION['StaffImage']=$rows['StaffImage'];
		$_SESSION['DepartmentID']=$rows['DepartmentID'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Administration</title>

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

<form action="StaffAdministration.php" method="Post" enctype="multipart/form-data">
	<h3>Welcome  <?php echo $_SESSION['StaffName'] . ' | ' . $_SESSION['Role'] ?></h3>	
		<fieldset>
			<legend>Staff administration</legend>
			<h1 align="center">Register administration</h1>
			<table align="center">
				<tr>
					<td>Staff ID</td>
					<td>
						<input type="text" name="txtStaffID" value="<?php echo AutoID('staff','StaffID','S-',6) ?>" readonly>
					</td>
				</tr>

				<!-- Staff Name and User name -->
				<tr>
					<td>Staff Name</td>
					<td>
						<input type="text" name="txtstaffname" placeholder="Your Full Name" required>
					</td>

					<td>Staff Username</td>
					<td>
						<input type="text" name="txtStaffUsername" placeholder="Enter Staff Username" required>
					</td>
				</tr>

				<!-- Staff Age and Password -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" required>
					</td>

					<td>Staff Password</td>
					<td>
						<input type="password" name="txtPassword" placeholder="Enter Staff Password" required>
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

					<td>Image</td>
					<td>
						<input type="file" name="txtImage">
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
				echo "<option value='$rtid'>" . $rtname . "</option>";
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

<fieldset>
	<legend>Staff Information List:</legend>
	<table id = "tableid" class="display">
		<thead>
			<tr>
	<th>StaffID</th>
	<th>Staff Name</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Role</th>
	<th>Date of Birth</th>
	<th>Address</th>
	<th>Email</th>
	<th>NRC Number</th>
	<th>Phone Number</th>
	<th>Department ID</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_Staff="SELECT * FROM Staff";
	$staff_Query=mysqli_query($connect,$Select_Staff);
	$staff_Count=mysqli_num_rows($staff_Query);

	for($i=0;$i<$staff_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($staff_Query);
		$StaffID=$rows['StaffID'];

		echo "<tr>";
			echo "<td>$StaffID</td>";
			echo "<td>" . $rows['StaffName'] . "</td>";
			echo "<td>" . $rows['Age'] . "</td>";
			echo "<td>" . $rows['Gender'] . "</td>";
			echo "<td>" . $rows['Role'] . "</td>";
			echo "<td>" . $rows['DateOfBirth'] . "</td>";
			echo "<td>" . $rows['Address'] . "</td>";
			echo "<td>" . $rows['Email'] . "</td>";
			echo "<td>" . $rows['NRCNumber'] . "</td>";
			echo "<td>" . $rows['PhoneNumber'] . "</td>";
			echo "<td>" . $rows['DepartmentID'] . "</td>";
			echo "<td> 
				  <a href='StaffUpdate.php?StaffID=$StaffID'>Edit</a> |
				  <a href='StaffDelete.php?StaffID=$StaffID'>Delete</a>
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