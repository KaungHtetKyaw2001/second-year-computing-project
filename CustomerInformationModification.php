<?php 	
include('connect.php');
include('CustomerHeaderAfterLogin.php');
include('AutoID_Functions.php');

if (isset($_POST['btnUpdate'])) 
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
	$Password=md5($_POST['txtPassword']);

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

	// For inserting data
	$Update_Customer="UPDATE `customer` 
					  SET `CustomerName`='$Customername',
					      `Age`='$age',
					      `DateOfBirth`='$dob',
					      `Address`='$address',
					      `Gender`='$gender',
					      `Email`='$email',
					      `NRCNumber`='$NRCNumber',
					      `PhoneNumber`='$phonenumber',
					      `CustomerUsername`='$Username',
					      `CustomerPassword`='$Password',
					      `CustomerImage`='$filename'
					      WHERE `CustomerID`='$CustomerID'";
	$Update_Query=mysqli_query($connect,$Update_Customer);

	if ($Update_Query) 
	{
		echo "<script>window.alert('Customer Account Update completed. Welcome!!!')</script>";
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
						<input type="text" name="txtCustomerID" value="<?php echo $rows['CustomerID'] ?>" readonly>
					</td>
				</tr>
				<!-- Customer Name and User name -->
				<tr>
					<td>Customer Name</td>
					<td>
						<input type="text" name="txtCustomername" placeholder="Your Full Name" value="<?php echo $rows['CustomerName'] ?>" required>
					</td>

					<td>Customer Username</td>
					<td>
						<input type="text" name="txtCustomerUsername" placeholder="Enter Customer Username" value="<?php echo $rows['CustomerUsername'] ?>" required>
					</td>
				</tr>

				<!-- Customer Age and Password -->
				<tr>
					<td>Age</td>
					<td>
						<input type="text" name="txtAge" placeholder="Your Age" value="<?php echo $rows['Age'] ?>" required>
					</td>

					<td>Customer Password</td>
					<td>
						<input type="text" name="txtPassword" placeholder="Enter Customer Password" value="<?php echo $rows['CustomerPassword'] ?>" required>
					</td>
				</tr>

				<!-- Customer Gender and Image -->
				<tr>
					<td>Gender</td>
					<td>
						<select name = "cboGender" placeholder="Add your Gender" value="<?php echo $rows['Gender'] ?>" required>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>

					<td>Image</td>
					<td>
						<input type="file" name="txtImage" value="<?php echo $rows['CustomerImage'] ?>">
					</td>
				</tr>

				<!-- Date of Birth -->
				<tr>
					<td>Date of Birth</td>
					<td>
						<input type="Date" name="txtDateOfBirth" value="<?php echo $rows['DateOfBirth'] ?>">
					</td>
				</tr>
					
				<!-- Address -->
				<tr>
					<td>Address</td>
					<td>
						<textarea name="txtAddress" value="<?php echo $rows['Address'] ?>"></textarea>
					</td>
				</tr>

				<!-- Email -->
				<tr>
					<td>Email</td>
					<td>
						<input type="Email" name="txtemail" placeholder="Enter your Email" value="<?php echo $rows['Email'] ?>" required>
					</td>
				</tr>
					
				<!-- NRC Number -->
				<tr>
					<td>NRC Number</td>
					<td>
						<input type="text" name="txtNRCNumber" placeholder="Enter your NRC Number" value="<?php echo $rows['NRCNumber'] ?>" required>
					</td>
				</tr>
				
				<!-- Phone Number -->
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" value="<?php echo $rows['PhoneNumber'] ?>" required>
					</td>
				</tr>	
				<td></td>
				<td>
					<input type="Submit" name="btnUpdate" value="Update">
					<input type="Submit" value="Delete"><a href="CustomerDelete.php?CustomerID=$CustomerID"></a>
				</td>
			</table>
		</fieldset>
	</form>
</body>
</html>
<?php 
include('footer.php');
 ?>