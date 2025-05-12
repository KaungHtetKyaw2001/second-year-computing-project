<?php  
session_start();
include('connect.php');

$DeliveryStaffID=$_GET['DeliveryStaffID'];

$DeliveryStaff_Delete="DELETE FROM DeliveryStaff WHERE `DeliveryStaffID`='$DeliveryStaffID'";
$result=mysqli_query($connect,$DeliveryStaff_Delete);

if($result) //True
{
	echo "<script>window.alert('Delivery staff account has been successfully deleted!')</script>";
	echo "<script>window.location='DeliveryStaffRegistration.php'</script>";
}
else
{
	echo "<p>Something went wrong in Customer Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>