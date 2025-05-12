<?php  
session_start();
include('connect.php');

$SupplierID=$_GET['SupplierID'];

$Supplier_Delete="DELETE FROM Supplier WHERE `SupplierID`='$SupplierID'";
$result=mysqli_query($connect,$Supplier_Delete);

if($result) //True
{
	echo "<script>window.alert('Supplier account has been successfully deleted!')</script>";
	echo "<script>window.location='SupplierRegistration.php'</script>";
}
else
{
	echo "<p>Something went wrong in Supplier Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>