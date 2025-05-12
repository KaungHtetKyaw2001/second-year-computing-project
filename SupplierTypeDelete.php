<?php  
session_start();
include('connect.php');

$SupplierTypeID=$_GET['SupplierTypeID'];

$SupplierType_Delete="DELETE FROM SupplierType WHERE `SupplierTypeID`='$SupplierTypeID'";
$result=mysqli_query($connect,$SupplierType_Delete);

if($result) //True
{
	echo "<script>window.alert('This supplier type has been successfully deleted!')</script>";
	echo "<script>window.location='SupplierType.php'</script>";
}
else
{
	echo "<p>Something went wrong in Supplier Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
	echo "<script>window.location='SupplierType.php'</script>";
}
?>