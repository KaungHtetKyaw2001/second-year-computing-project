<?php 	
session_start();
include('connect.php');
include('SupplierHeaderAfterLogin.php');

if (isset($_POST['btnUpdate'])) 
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

	// For updating data
	$Update_Supplier="UPDATE `supplier` 
					  SET `SupplierName`='$txtSuppliername',
					      `Age`='$txtAge',
					      `DateOfBirth`='$txtDateOfBirth',
					      `Address`='$txtAddress',
					      `Gender`='$cboGender',
					      `Email`='$txtemail',
					      `NRCNumber`='$txtNRCNumber',
					      `PhoneNumber`='$txtPhoneNumber',
					      `SupplierUsername`='$txtSupplierUsername',
					      `SupplierPassword`='$txtpassword',
					      `SupplierImage`='$filename'
					      WHERE `SupplierID`='$txtSupplierID'";
	$Update_Query=mysqli_query($connect,$Update_Supplier);

	if ($Update_Query) 
	{
		echo "<script>window.alert('Supplier Account Update completed. Welcome!!!')</script>";
		echo "<script>window.location='SupplierLogin.php'</script>";
	}
	else
	{
		echo "<p>Cannot update the information. Please check your information" . mysqli_error($connect) . "</p>";
	}

}
// 	if(isset($_GET['SupplierID'])) 
// {
// 	$txtSupplierID=$_GET['txtSupplierID'];

// 	$query="SELECT * FROM supplier WHERE SupplierID='$txtSupplierID'";
// 	$ret=mysqli_query($connect,$query);
// 	$rows=mysqli_fetch_array($query);
// }
// else
// {
// 	$SupplierID="";
// 	echo "<script>window.alert('Somthing went wrong | SupplierID not found')</script>";
// 	echo "<script>window.location='SupplierRegister.php'</script>";
// 	exit();
// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supplier Update</title>
</head>
<body>
	<form action="SupplierUpdate.php" method="Post" enctype="multipart/form-data">
		<fieldset>
			<legend>Supplier Update</legend>
			<h1 align="center">Update your account here</h1>
			<table align="center">

				<tr>
					<td>Supplier ID</td>
					<td>
						<input type="text" name="txtSupplierID" value="<?php echo $_SESSION['SupplierID'] ?>" readonly>
					</td>
					<td>Supplier Username</td>
					<td>
						<input type="text" name="txtSupplierUsername" placeholder="Enter Supplier Username" value="<?php echo $_SESSION['SupplierUsername'] ?>" required>
					</td>
				</tr>
				<!-- Customer Name and Password -->
				<tr>
					<td>Supplier Name</td>
					<td>
						<input type="text" name="txtSuppliername" placeholder="Your Full Name" value="<?php echo $_SESSION['SupplierName'] ?>" required>
					</td>
					<td>Supplier Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Supplier Password" value="<?php echo $_SESSION['SupplierPassword'] ?>" required>
					</td>
					
				</tr>

				<!-- Customer Age and Image -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $_SESSION['Age'] ?>" required>
					</td>
					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $_SESSION['SupplierImage'] ?>">
					</td>
					
				</tr>

				<!-- Customer Gender  -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $_SESSION['Gender'] ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
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
						<!-- <textarea name="txtAddress" value="<?php echo $_SESSION['Address'] ?>"></textarea> -->
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