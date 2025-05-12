<?php  
session_start(); //Session Declare
include('connect.php');
include('SupplierHeaderAfterLogin.php');
// include('AutoID_Functions.php');

if(isset($_POST['btnSearch'])) 
{
	$SearchType=$_POST['rdoSearchType'];

	if ($SearchType == 1) 
	{
		$cboPurchaseID=$_POST['cboPurchaseID'];

		$Searchquery="SELECT * FROM purchase
			WHERE PurchaseID='$cboPurchaseID'";
		$result=mysqli_query($connect,$Searchquery);
		$size=mysqli_num_rows($result);
	}
	elseif ($SearchType == 2) 
	{
		$From=date('Y-m-d',strtotime($_POST['txtFromDate']));
		$To=date('Y-m-d',strtotime($_POST['txtToDate']));

		$Searchquery="SELECT * FROM purchase
			WHERE PurchaseDate BETWEEN '$From' AND '$To'";
		$result=mysqli_query($connect,$Searchquery);
		$size=mysqli_num_rows($result);
	}
}
elseif (isset($_POST['btnShowall'])) 
{
	$Searchquery="SELECT * FROM purchase
			";
	$result=mysqli_query($connect,$Searchquery);
	$size=mysqli_num_rows($result);
}
else
{
	$today=date('Y-m-d');

	$Searchquery="SELECT * FROM purchase
			WHERE PurchaseDate='$today'
			";
	$result=mysqli_query($connect,$Searchquery);
	$size=mysqli_num_rows($result);
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Purchase Search and Report</title>

<script type="text/javascript" src="DatePicker/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="DatePicker/datepicker.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>
<body>
<script>
	$(document).ready( function (){
		$('#tableid').DataTable();
	} );
</script>

<form action='PurchaseSearch.php' method="post">
	<fieldset>
		<legend>Purchase Search and Report</legend>
		<table width="100%">
			<tr>
		<td>
		<input type="radio" name="rdoSearchType" value="1" checked />Search by PurchaseID <br/>
		<select name="cboPurchaseID">
			<option>-Select Purchase ID-</option>
			<?php 
			$Purchase_query="SELECT * FROM purchase";
			$result2=mysqli_query($connect,$Purchase_query);
			$count=mysqli_num_rows($result2);

			for($i=0;$i<$count;$i++) 
			{ 
				$rows1=mysqli_fetch_array($result2);
				$PurchaseID=$rows1['PurchaseID'];

				echo "<option value='$PurchaseID'> $PurchaseID</option>";
			}
			?>
		</select>
		</td>

		<td>
		<input type="radio" name="rdoSearchType" value="2" />Search by Date <br/>
		From <input type="text" name="txtFromDate" value="<?php echo date('Y-m-d') ?>" onClick="showCalender(calender,this)" />
		To <input type="text" name="txtToDate" value="<?php echo date('Y-m-d') ?>" onClick="showCalender(calender,this)" />

		</td>
		



		<td>
			<br/>
			<input type="submit" name="btnSearch" value="Search Now" />
			<input type="submit" name="btnShowall" value="Show All" />
			<input type="reset"  value="Cancel" />
		</td>
		</table>

		<hr/>


<?php  

if($size < 1) 
{
	echo "<p>No Purchase Record Found...</p>";
}
else
{
?>
	
	<table id="tableid" class="display">
	<thead>
	<tr>
		<th>No</th>
		<th>PurchaseID</th>
		<th>PurchaseDate</th>
		<th>Purchase</th>
		<th>Purchase Amount</th>
		<th>First Purchase</th>
		<th>Second Purchase</th>
		<th>Description</th>
		<th>SupplierID</th>
	</tr>	
	</thead>
	<tbody>
	<?php
	
	for($i=0;$i<$size;$i++) 
	{ 
		$rows2=mysqli_fetch_array($result);
		$PurchaseID=$rows2['PurchaseID'];

		echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>$PurchaseID</td>";
			echo "<td>" . $rows2['PurchaseDate'] . "</td>";
			echo "<td>" . $rows2['Purchase'] . "</td>";
			echo "<td>" . $rows2['Quantity'] . "</td>";
			echo "<td>" . $rows2['Purchase_Amount'] . "</td>";
			echo "<td>" . $rows2['First_Purchase'] . "</td>";
			echo "<td>" . $rows2['Second_Purchase'] . "</td>";
			echo "<td>" . $rows2['Description'] . "</td>";
			echo "<td>" . $rows2['SupplierID'] . "</td>";
			echo "<td>
				  <a href='PurchaseUpdate.php?PurchaseID=$PurchaseID'>Update</a> |
				  <a href='PurchaseDetails.php?PurchaseID=$PurchaseID'>Details</a> 
				  </td>";
		echo "</tr>";
	}
	?>
</tbody>
</table>	
<?php
}
?>

	</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>