<?php 
session_start();
include ('connect.php');
include ('DeliveryStaffHeader.php');
if (isset($_POST['btnLogin'])) 
{
	$txtusername=$_POST['txtusername'];
	$txtpassword=$_POST['txtpassword'];

	$Select = "SELECT * FROM deliverystaff 
			   WHERE DeliveryStaffUsername = '$txtusername' 
			   AND DeliveryStaffPassword = '$txtpassword'";

	$Query = mysqli_query($connect,$Select);
	$Count = mysqli_num_rows($Query);
	$Array = mysqli_fetch_array($Query);

	print_r($Array);

	if($Count < 1) 
	{
		echo "<script>window.alert('Delivery Staff Email or Password Incorrect!)</script>";
		echo "<script>window.location='DeliveryStaffLogin.php'</script>";
		exit();
	}
	else
	{
		$dsid=$Array['DeliveryStaffID'];
		$_SESSION['DeliveryStaffName']=$Array['DeliveryStaffName'];
		$_SESSION['Age']=$Array['Age'];
		$_SESSION['DateOfBirth']=$Array['DateOfBirth'];
		$_SESSION['Gender']=$Array['Gender'];
		$_SESSION['Email']=$Array['Email'];
		$_SESSION['Address']=$Array['Address'];
		$_SESSION['PhoneNumber']=$Array['PhoneNumber'];
		$_SESSION['DeliveryStaffUsername']=$Array['DeliveryStaffUsername'];
		$_SESSION['DeliveryStaffPassword']=$Array['DeliveryStaffPassword'];
		$_SESSION['DeliveryStaffImage']=$Array['DeliveryStaffImage'];
		echo "<script>window.alert('Your Account Login is Success.')</script>";
		echo "<script>window.location='DeliveryStaffUpdate.php?DeliveryStaffID=$dsid'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delivery Staff Login</title>
</head>
<body>
<form action="DeliveryStaffLogin.php" method="post">
	<fieldset>
		<legend>Delivery Staff Login</legend>
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
				<td><input type="submit" value="Register"><a href="DeliveryStaffRegister.php"></a></td>
			</tr>

		</table>
	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>