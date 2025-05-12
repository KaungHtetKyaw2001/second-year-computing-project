<?php 
session_start();
include ('connect.php');
include('AutoID_Functions.php');
include('StaffHeaderAfterLogin.php');
if (isset($_POST['btnRegister'])) 
{
	$ImportCompanyID = $_POST['txtImportCompanyID'];
	$ImportCompanyName = $_POST['txtImportCompanyName'];
    $ImportProductName=$_POST['txtImportProductName'];
    $ImportProductType=$_POST['txtImportProductType'];
    $ImportDate=$_POST['txtImportDate'];
    $Quantity=$_POST['txtQuantity'];
    $Description=$_POST['txtDescription'];

	$Insert_ImportCompany= "INSERT INTO `importcompany`(`ImportID`, `ImportCompanyName`, `ImportName`, `ImportType`, `ImportDate`, `Quantity`, `Description`) VALUES ('$ImportCompanyID','$ImportCompanyName','$ImportProductName','$ImportProductType','$ImportDate','$Quantity','$Description')";
	$Insert_ImportDetails= "INSERT INTO `importdetails`(`ImportID`) VALUES(`$ImportCompanyID`)";
	$Insert_Query = mysqli_query($connect,$Insert_ImportCompany);
	$Insert_Query = mysqli_query($connect,$Insert_ImportDetails);
	if ($Insert_Query) 
	{
		echo "<script>window.alert('Import Company Registration completed.')</script>";
		echo "<script>window.location='ImportCompany.php'</script>";
	}
	else
	{
		echo "<p>Import Company Registration Failed!" . mysqli_error($connect). "</p>";
		echo "<script>window.location='ImportCompany.php'</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Import Company</title>

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

<form action="ImportCompany.php" method="Post">
	<fieldset>
		<legend>Import Company</legend>
		<h1 align="center">Import Company Form</h1>
		<table align="center">
			<tr>
					<td>Import Company ID</td>
					<td>
						<input type="text" name="txtImportCompanyID" value="<?php echo AutoID('importcompany','ImportID','IC-',6) ?>" readonly>
					</td>
			</tr>

			<tr>
					<td>Import Company Name</td>
					<td>
						<input type="text" name="txtImportCompanyName" placeholder="Import Company Name" required>
					</td>
			</tr>
			<tr>
					<td>Import Product Name</td>
					<td>
						<input type="text" name="txtImportProductName" placeholder="Import Product Name" required>
					</td>
			</tr>
			<tr>
					<td>Import Product Type</td>
					<td>
						<input type="text" name="txtImportProductType" placeholder="Import Product Type" required>
					</td>
			</tr>
			<tr>
					<td>Import Date</td>
					<td>
						<input type="Date" name="txtImportDate" placeholder="Import Date" required>
					</td>
			</tr>
			<tr>
					<td>Quantity</td>
					<td>
						<input type="text" name="txtQuantity" placeholder="Amount of Imported Product" required>
					</td>
			</tr>
			<tr>
					<td>Description</td>
					<td>
						<textarea name="txtDescription"></textarea>
					</td>
			</tr>
			<td>
					<input type="Submit" name="btnRegister" value="Register">
					<input type="Reset" value="Clear">
				</td>
		</table>
	</fieldset>

<fieldset>
		<legend>Import Companies List:</legend>
	<table id="tableid" class="display" align="center">
		<thead>
			<tr>
	<th>ImportCompanyID</th>
	<th>ImportCompanyName</th>
	<th>ImportProductName</th>
	<th>ImportProductType</th>
	<th>ImportDate</th>
	<th>Quantity</th>
	<th>Description</th>
		   </tr>	
		</thead>
		<tbody>
<?php  
	
	$Select_ImportCompany="SELECT * FROM ImportCompany";
	$ImportCompany_Query=mysqli_query($connect,$Select_ImportCompany);
	$ImportCompany_Count=mysqli_num_rows($ImportCompany_Query);

	for($i=0;$i<$ImportCompany_Count;$i++) 
	{ 
		$rows=mysqli_fetch_array($ImportCompany_Query);
		$ImportID=$rows['ImportID'];

		echo "<tr>";
			echo "<td>$ImportID</td>";
			echo "<td>" . $rows['ImportCompanyName'] . "</td>";
			echo "<td>" . $rows['ImportName'] . "</td>";
			echo "<td>" . $rows['ImportType'] . "</td>";
			echo "<td>" . $rows['ImportDate'] . "</td>";
			echo "<td>" . $rows['Quantity'] . "</td>";
			echo "<td>" . $rows['Description'] . "</td>";
			echo "<td>
				  </td>";
		echo "</tr>";
	}

?>
	</tbody>
	</table>
</fieldset>
</body>
</html>
<?php 
include('footer.php');
 ?>