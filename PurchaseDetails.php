<?php  
session_start(); //Session Declare
include('connect.php');
include('AutoID_Functions.php');
include('SupplierHeaderAfterLogin.php');

//Single Group------------------------------------------------------------
$query="SELECT p.*,sup.SupplierID,sup.SupplierName  
		FROM purchase p,supplier sup
		WHERE p.SupplierID=sup.SupplierID
		";
$result=mysqli_query($connect,$query);
$row1=mysqli_fetch_array($result);

 $query2="SELECT * FROM purchase";
 $result2=mysqli_query($connect,$query2);
 $count=mysqli_num_rows($result2);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Supplier Purchase Details</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form>
<fieldset>
<legend>Supplier Purchase Details for <?php echo $row1['SupplierID'] ?></legend>

<table align="center" border="1" cellpadding="5px" cellspacing="5px">

<tr>
	<td>SupplierID</td>
	<td colspan="100px">
		 <b><?php echo $row1['SupplierID']  ?></b>
	</td>
	
</tr>
<tr>
	<td>PurchaseDate</td>
	<td>
		 <b><?php echo $row1['PurchaseDate']  ?></b>
	</td>
	<td>SupplierName</td>
	<td>
		 <b><?php echo $row1['SupplierName']  ?></b>
	</td>
</tr>
<tr>
	<td colspan="4">
	<table border="1" width="100%">
	<tr>
		<th>No</th>
		<th>PurchaseID</th>
		<th>Purchase</th>
		<th>Quantity</th>
		<th>Purchase Amount</th>
		<th>First Amount</th>
		<th>Second Amount</th>
	</tr>
	
	<?php
	$Quantity= null;
		$Purchase_Amount= null;
		$First_Purchase= null;
		$Second_Purchase= null;  
	for($i=0;$i<$count;$i++) 
	{

		$row1=mysqli_fetch_array($result2);

		echo "<tr>";	
		echo "<td>" . ($i+1) . "</td>";
		echo "<td>" . $row1['PurchaseID'] . "</td>";
		echo "<td>" . $row1['Purchase'] . "</td>";
		echo "<td>" . $row1['Quantity'] . "</td>";
		echo "<td>" . $row1['Purchase_Amount'] . "</td>";
		echo "<td>" . $row1['First_Purchase'] . "</td>";
		echo "<td>" . $row1['Second_Purchase'] . "</td>";
		echo "</tr>";

		

		$Quantity+= $row1['Quantity'];
		$Purchase_Amount+=$row1['Purchase_Amount'];
		$First_Purchase+=$row1['First_Purchase'];
		$Second_Purchase+=$row1['Second_Purchase'];	
	}
	


	$TotalQuantity=$Quantity;
	$TotalPurchaseAmount=$Purchase_Amount;
	$TotalFirstPurchase=$First_Purchase;
	$TotalSecondPurchase=$Second_Purchase;
	?>

</tr>
	</table>
	
</tr>
<tr>
	<td colspan="4" align="right">
	<p>Total Quantity : <b><?php echo $TotalQuantity ?></b></p>
	<p>Total Amount : <b><?php echo $TotalPurchaseAmount ?></b> MMK</p>
	<p>Total First Purchase : <b><?php echo $TotalFirstPurchase ?></b> MMK</p>
	<p>Total Second Purchase : <b><?php echo $TotalSecondPurchase ?></b> MMK</p>
	
	</td>
</tr>
<tr>
	<td colspan="4" align="right">

	<!---Print--->
	<script>var pfHeaderImgUrl = '';var pfHeaderTagline = 'Order%20Report';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
	<a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onClick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a>
	<!---Print--->
	
	</td>
</tr>
</table>

</fieldset>	

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>