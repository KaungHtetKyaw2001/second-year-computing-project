<?php  
session_start();
include('connect.php');

$DepartmentID=$_GET['DepartmentID'];

$Department_Delete="DELETE FROM Department WHERE `DepartmentID`='$DepartmentID'";
$result=mysqli_query($connect,$Department_Delete);

if($result) //True
{
	echo "<script>window.alert('Department information has been successfully deleted!')</script>";
	echo "<script>window.location='Department.php'</script>";
}
else
{
	echo "<p>Something went wrong in Department Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>