<?php  
session_start();
include('connect.php');

$CustomerID=$_GET['CustomerID'];

$Customer_Delete="DELETE FROM Customer WHERE `CustomerID`='$CustomerID'";
$result=mysqli_query($connect,$Customer_Delete);

if($result) //True
{
	echo "<script>window.alert('Customer account has been successfully deleted!')</script>";
	echo "<script>window.location='CustomerRegistration.php'</script>";
}
else
{
	echo "<p>Something went wrong in Customer Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>