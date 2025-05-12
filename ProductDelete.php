<?php  
session_start();
include('connect.php');

$ProductID=$_GET['ProductID'];

$Product_Delete="DELETE FROM Product WHERE `ProductID`='$ProductID'";
$result=mysqli_query($connect,$Product_Delete);

if($result) //True
{
	echo "<script>window.alert('Product has been successfully deleted!')</script>";
	echo "<script>window.location='ProductRegister.php'</script>";
}
else
{
	echo "<p>Something went wrong in Product Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>