<?php  
session_start();
include('connect.php');

$StaffID=$_GET['StaffID'];

$Staff_Delete="DELETE FROM Staff WHERE `StaffID`='$StaffID'";
$result=mysqli_query($connect,$Staff_Delete);

if($result) //True
{
	echo "<script>window.alert('Staff information has been successfully deleted!')</script>";
	echo "<script>window.location='StaffAdministration.php'</script>";
}
else
{
	echo "<p>Something went wrong in Staff Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>