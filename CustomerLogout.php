<?php 
session_start();
include('CustomerHeader.php');
session_destroy();
echo "<script>alert('Customer logged out successfully')</script>";
echo "<script> window.location = 'CustomerLogin.php'</script>";
 ?>
 <?php 
 include('footer.php');
  ?>