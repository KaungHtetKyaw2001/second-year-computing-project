<?php 
session_start();
include('CustomerHeaderAfterLogin.php');
include('connect.php');
if (isset($_POST['btnSearch'])) 
{
	$SearchType=$_POST['rdosearchType'];
	if ($SearchType==1) 
	{
		$cboOrderID=$_POST['cboOrderID'];
		$OrderSelect="SELECT o.*,c.CustomerID,c.CustomerName,p.*
					  FROM orders o, customer c, payment p
					  WHERE o.OrderID='$cboOrderID'
					  AND o.OrderID=p.OrderID
					  AND o.CustomerID=c.CustomerID";
		$ret=mysqli_query($connect,$OrderSelect);
		$count=mysqli_num_rows($ret);
	}
	else if ($SearchType==2) 
	{
		$From=date('Y-m-d',strtotime($_POST['txtFrom']));
		$To=date('Y-m-d',strtotime($_POST['txtTo']));
		$OrderSelect="SELECT o.*,c.CustomerID,c.CustomerName,p.*
					  FROM orders o, customer c, payment p
					  WHERE o.OrderDate BETWEEN '$From' AND '$To'
					  And o.OrderID=p.OrderID
					  AND o.CustomerID=c.CustomerID";
		$ret=mysqli_query($connect,$OrderSelect);
		$count=mysqli_num_rows($ret);
	}
	elseif ($SearchType == 3) 
	{
		$cboStatus=$_POST['cboStatus'];

		$query="SELECT o.*,c.CustomerID,c.CustomerName,p.* 
			FROM orders o, customer c, payment p
			WHERE o.Status='$cboStatus'
			AND o.OrderID=p.OrderID
			";
		$ret=mysqli_query($connect,$query);
		$count=mysqli_num_rows($ret);
	}
}
	else if (isset($_POST['btnShowAll'])) 
	{
		$OrderSelect="SELECT o.*,c.CustomerID,c.CustomerName,p.*
				      FROM orders o, customer c, payment p
				      WHERE o.CustomerID=c.CustomerID
				      And o.OrderID=p.OrderID";
		$ret=mysqli_query($connect,$OrderSelect);
		$count=mysqli_num_rows($ret);
	}
	else
	{
		$Today=date('Y-m-d');
		$OrderSelect="SELECT o.*,c.CustomerID,c.CustomerName,p.*
					  FROM orders o, customer c, payment p
					  WHERE o.OrderDate='$Today'
					  And o.OrderID=p.OrderID
					  AND o.CustomerID=c.CustomerID";
		$ret=mysqli_query($connect,$OrderSelect);
		$count=mysqli_num_rows($ret);
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Search</title>
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

<form action="OrderSearch.php" method="post">
	<fieldset>
		<legend>Search by Options:</legend>
		<table width="100%">
			<tr>
				<td>
					<input type="radio" name="rdosearchType" value="1" checked="">Search with OrderID <br>
					<select name="cboOrderID">
						<option>Order ID</option>
						<?php 
						$Order_Select="SELECT * FROM orders";
						$OrderQuery=mysqli_query($connect,$Order_Select);
						$OrderCount=mysqli_num_rows($OrderQuery);
						for ($i=0; $i <$OrderCount ; $i++) 
						{ 
							$Rows=mysqli_fetch_array($OrderQuery);
							$OrderID=$Rows['OrderID'];
							echo "<option value='$OrderID'> $OrderID </option>";
						}
						 ?>
					</select>
				</td>
				<td>
					<input type="radio" name="rdosearchType" value="2">Search with Date time <br>
					From <input type="text" name="txtFrom" value="<?php echo date('Y-m-d') ?>" onclick="ShowCalendar(calendar,this)">
					To <input type="text" name="txtTo" value="<?php echo date('Y-m-d')?>" onClick="ShowCalendar(calendar,<?php $this ?>)">
				</td>

				<td>
					<input type="radio" name="rdosearchType" value="3">Search with Status <br>
					<select name="cboStatus">
						<option>Status</option>
						<option>Pending</option>
						<option>Confirmed</option>
					</select>
				</td>

				<td>
					<br>
					<input type="submit" name="btnSearch" value="Search Now" />
			<input type="submit" name="btnShowall" value="Show All" />
			<input type="reset"  value="Cancel" />
				</td>
			</tr>
		</table>
	</fieldset>
<?php 
if ($count==0)
{
	echo ("No record found.");
	exit();
}
?>
<fieldset>
	<legend>Orders Results:</legend>
	<table id="tableid" class="display">
		<thead>
			<tr>
				<th>No</th>
				<th>Order ID</th>
				<th>Order Date</th>
				<th>Customer Name</th>
				<th>Total Amount</th>
				<th>Total Quantity</th>
				<th>Total Amount With Tax</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			for ($i=0; $i <$count ; $i++) 
			{ 
				$rows=mysqli_fetch_array($ret);
				$OrderID=$rows['OrderID'];

				echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			echo "<td>$OrderID</td>";
			echo "<td>" . $rows['OrderDate'] . "</td>";
			echo "<td>" . $rows['CustomerName'] . "</td>";
			echo "<td>" . $rows['Payment_Amount'] . "</td>";
			echo "<td>" . $rows['Quantity'] . "</td>";
			echo "<td>" . $rows['TotalAmount'] . "</td>";
			echo "<td>" . $rows['Status'] . "</td>";
			echo "<td>
				  <a href='OrderDetails.php?OrderID=$OrderID'>Details</a> |
				  <a href='OrderAccept.php?OrderID=$OrderID'>Accept</a> 
				  </td>";
		echo "</tr>";
			}
			 ?>
		</tbody>
	</table>
</fieldset>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>