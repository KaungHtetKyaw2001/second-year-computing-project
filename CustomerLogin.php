<?php 
session_start();
include ('connect.php');
include ('CustomerHeader.php');

if (isset($_POST['btnLogin'])) 
{
	$txtusername=$_POST['txtusername'];
	$txtpassword=$_POST['txtpassword'];

	$Select = "SELECT * FROM Customer 
			   WHERE CustomerUsername = '$txtusername' 
			   AND CustomerPassword = '$txtpassword'";

	$Query = mysqli_query($connect,$Select);
	$Count = mysqli_num_rows($Query);
	$Array = mysqli_fetch_array($Query);

	print_r($Array);

	if($Count < 1) 
	{
		echo "<script>window.alert('Customer Email or Password Incorrect!.')</script>";
		echo "<script>window.location='CustomerLogin.php'</script>";
		exit();
	}
	else
	{
		$_SESSION['CustomerID']=$Array['CustomerID'];
		$_SESSION['CustomerName']=$Array['CustomerName'];
		$_SESSION['Age']=$Array['Age'];
		$_SESSION['DateOfBirth']=$Array['DateOfBirth'];
		$_SESSION['Address']=$Array['Address'];
		$_SESSION['Gender']=$Array['Gender'];
		$_SESSION['Email']=$Array['Email'];
		$_SESSION['NRCNumber']=$Array['NRCNumber'];
		$_SESSION['PhoneNumber']=$Array['PhoneNumber'];
		$_SESSION['CustomerUsername']=$Array['CustomerUsername'];
		$_SESSION['CustomerPassword']=$Array['CustomerPassword'];
		$_SESSION['CustomerImage']=$Array['CustomerImage'];
		echo "<script>window.alert('Your Account Login is Success.')</script>";
		echo "<script>window.location='ProductDisplay.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="CustomerLogin.php" method="post">
	<fieldset>
		<legend>Customer Login</legend>
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
				<td><a href="CustomerRegister.php">Register</a></td>
			</tr>

		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>