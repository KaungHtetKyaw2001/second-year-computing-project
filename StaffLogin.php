<?php 
session_start();
include ('connect.php');
include ('StaffHeader.php');
if (isset($_POST['btnLogin'])) 
{
	$txtusername=$_POST['txtusername'];
	$txtpassword=$_POST['txtpassword'];

	$Select = "SELECT * FROM staff 
			   WHERE StaffUsername = '$txtusername' 
			   AND StaffPassword = '$txtpassword'";

	$Query = mysqli_query($connect,$Select);
	$Count = mysqli_num_rows($Query);
	$Array = mysqli_fetch_array($Query);

	print_r($Array);

	if($Count < 1) 
	{
		echo "<script> window.alert('Staff Email or Password is incorrect!')</script>";
		echo "<script>window.location='StaffLogin.php'</script>";
		exit();
	}
	else
	{
		$_SESSION['StaffID']=$Array['StaffID'];
		$_SESSION['StaffName']=$Array['StaffName'];
		$_SESSION['Age']=$Array['Age'];
		$_SESSION['Gender']=$Array['Gender'];
		$_SESSION['Role']=$Array['Role'];
		$_SESSION['DateOfBirth']=$Array['DateOfBirth'];
		$_SESSION['Address']=$Array['Address'];
		$_SESSION['Email']=$Array['Email'];
		$_SESSION['NRCNumber']=$Array['NRCNumber'];
		$_SESSION['PhoneNumber']=$Array['PhoneNumber'];
		$_SESSION['StaffUsername']=$Array['StaffUsername'];
		$_SESSION['StaffPassword']=$Array['StaffPassword'];
		$_SESSION['StaffImage']=$Array['StaffImage'];

		echo "<script>window.alert('Your Account Login is Success.')</script>";
		echo "<script>window.location='StaffAdministration.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<script type="text/javascript" src="DatePicker/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="DatePicker/datepicker.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="StaffLogin.php" method="post">
	<fieldset>
		<legend>Staff Login</legend>
		<h1 align="center">Please login to get access your account</h1>
		<table align="center">
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="txtusername" placeholder="Username or Email" required="Please Fill your username or password">
				</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>
					<input type="Password" name="txtpassword" placeholder="Your password" required="Please Fill your password here">
				</td>
			</tr>

			<tr>
				<td><input type="submit" name="btnLogin" value="Login"></td>
				<td><input type="submit" value="Register"><a href="StaffRegister.php?"></a></td>
			</tr>

		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>