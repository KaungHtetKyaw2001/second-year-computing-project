<?php  
session_start(); 
include('connect.php');

if(isset($_SESSION['CustomerID'])) 
{
	$OrderID=$_GET['OrderID'];
	//$StaffID=$_SESSION['StaffID'];

	$result=mysqli_query($connect,"SELECT * FROM orderdetails
									  WHERE OrderID='$OrderID'");

	while ($arr=mysqli_fetch_array($result)) 
	{
		$ProductID=$arr['ProductID'];
		$Quantity=$arr['Quantity'];

		$UpdateQty="UPDATE product
					SET Quantity= Quantity - '$Quantity'
					WHERE ProductID='$ProductID'
					";
		$ret=mysqli_query($connect,$UpdateQty);
	}
	
	$UpdateStatus="UPDATE Orders
				   SET Status='Confirmed'
				   WHERE OrderID='$OrderID'";
	$result=mysqli_query($connect,$UpdateStatus);

	if($result) //True
	{
		echo "<script>window.alert('Order Successfully Confirmed!')</script>";
		echo "<script>window.location='OrderSearch.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Order Confirmed" . mysqli_error($connect) . "</p>";
	}
}
else
{
	echo "<script>window.alert('Please Login as customer to continue...')</script>";
	echo "<script>window.location='CustomerLogin.php'</script>";
	exit();
}


?>