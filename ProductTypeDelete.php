<?php  
session_start();
include('connect.php');

$ProductTypeID=$_GET['ProductTypeID'];

$ProductType_Delete="DELETE FROM ProductType WHERE `ProductTypeID`='$ProductTypeID'";
$result=mysqli_query($connect,$ProductType_Delete);

if($result) //True
{
	echo "<script>window.alert('Product Type information has been successfully deleted!')</script>";
	echo "<script>window.location='ProductType.php'</script>";
}
else
{
	echo "<p>Something went wrong in Customer Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>