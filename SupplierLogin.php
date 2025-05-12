<?php 
session_start();
include ('connect.php');
include ('SupplierHeader.php');

if (isset($_POST['btnLogin'])) 
{
	$txtusername=$_POST['txtusername'];
	$txtpassword=$_POST['txtpassword'];

	$Select = "SELECT * FROM supplier 
			   WHERE SupplierUsername = '$txtusername' 
			   AND SupplierPassword = '$txtpassword'";

	$Query = mysqli_query($connect,$Select);
	$Count = mysqli_num_rows($Query);
	$Array = mysqli_fetch_array($Query);

	if($Count == 1) 
	{
		$_SESSION['SupplierID']=$Array['SupplierID'];
		$_SESSION['SupplierUsername']=$Array['SupplierUsername'];
		$_SESSION['SupplierPassword']=$Array['SupplierPassword'];
		$_SESSION['SupplierName']=$Array['SupplierName'];
		$_SESSION['Age']=$Array['Age'];
		$_SESSION['Address']=$Array['Address'];
		$_SESSION['DateOfBirth']=$Array['DateOfBirth'];
		$_SESSION['Gender']=$Array['Gender'];
		$_SESSION['Email']=$Array['Email'];
		$_SESSION['NRCNumber']=$Array['NRCNumber'];
		$_SESSION['PhoneNumber']=$Array['PhoneNumber'];
		$_SESSION['SupplierImage']=$Array['SupplierImage'];

		echo "<script>window.alert('Your Account Login is Success.')</script>";
		echo "<script>window.location='Purchase.php'</script>";
	}
	else
	{
		echo "<script> window.alert('Supplier Email or Password is Incorrect.')</script>";
		//echo "<script>window.alert('Supplier Email or Password is Incorrect. Please check your email and password and create a Supplier account if you don't created it.)</script>";
		//echo "<script>window.location='SupplierLogin.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supplier Login</title>
</head>
<script type="text/javascript" src="DatePicker/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="DatePicker/datepicker.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
<body>
<form action="SupplierLogin.php" method="post">
	<fieldset>
		<legend>Supplier Login</legend>
		<h1 align="center">Please login to get access your account</h1>
		<table align="center">
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="txtusername" placeholder="Username" required>
				</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>
					<input type="Password" name="txtpassword" placeholder="Your password" required>
				</td>
			</tr>

			<tr>
				<td><input type="submit" name="btnLogin" value="Login"></td>
				<td><input type="submit" value="Register"><a href="SupplierRegister.php"></a></td>
			</tr>

		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include ('footer.php');
 ?>