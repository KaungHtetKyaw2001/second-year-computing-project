<?php  
session_start();
include('connect.php');

$CustomerTypeID=$_GET['CustomerTypeID'];

$CustomerType_Delete="DELETE FROM CustomerType WHERE `CustomerTypeID`='$CustomerTypeID'";
$result=mysqli_query($connect,$CustomerType_Delete);

if($result) //True
{
	echo "<script>window.alert('Customer Type information has been successfully deleted!')</script>";
	echo "<script>window.location='CustomerType.php'</script>";
}
else
{
	echo "<p>Something went wrong in CustomerType Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>