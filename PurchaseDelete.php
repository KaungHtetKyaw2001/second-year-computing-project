<?php  
session_start();
include('connect.php');

$PurchaseID=$_GET['PurchaseID'];

$Purchase_Delete="DELETE FROM Purchase WHERE `PurchaseID`='$PurchaseID'";
$result=mysqli_query($connect,$Purchase_Delete);

if($result) //True
{
	echo "<script>window.alert('Purchase has been successfully deleted!')</script>";
	echo "<script>window.location='Purchase.php'</script>";
}
else
{
	echo "<p>Something went wrong in Purchase Delete. Cannot operate the delete" . mysqli_error($connect) . "</p>";
}
?>