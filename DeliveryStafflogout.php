<?php 
session_start();
include('DeliveryStaffHeader.php');
session_destroy();
echo "<script>alert('Delivery staff logged out successfully')</script>";
echo "<script> window.location = 'DeliveryStaffLogin.php'</script>";
 ?>
 <?php 
 include('footer.php');
  ?>