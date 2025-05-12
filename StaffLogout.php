<?php 
session_start();
include('StaffHeader.php');
session_destroy();
echo "<script>alert('Staff logged out successfully')</script>";
echo "<script> window.location = 'StaffLogin.php'</script>";
 ?>
 <?php 
 include('footer.php');
  ?>