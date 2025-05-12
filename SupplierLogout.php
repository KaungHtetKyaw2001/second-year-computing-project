<?php 
session_start();
include('SupplierHeader.php');
session_destroy();
echo "<script>alert('Supplier logged out successfully')</script>";
echo "<script> window.location = 'SupplierLogin.php'</script>";
 ?>
 <?php 
 include('footer.php');
  ?>