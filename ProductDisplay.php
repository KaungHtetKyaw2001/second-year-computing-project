<?php  
session_start();
include('connect.php');
include('CustomerHeaderAfterLogin.php');
?>
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Display</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
</head>
<body>
<form action="Product_Display.php" method="post">
<h2>
Welcome! 
<a href="CustomerUpdate.php?CustomerID=<?php echo $_SESSION['CustomerID'] ?>">
	<img src="<?php echo $_SESSION['CustomerImage'] ?>" width="100px" height="100px"/>
	<b><?php echo $_SESSION['CustomerName'] ?></b> 	
</a>
</h2>
<table width="100%">
<tr>
	<td align="right">
	<input type="text" name="txtData" placeholder="Search your product" />
	<input type="submit" name="btnSearch" value="Search Now">
	</td>
</tr>
</table>

<hr/>

<table align="center" cellpadding="8px" cellspacing="8px">
<?php  

if(isset($_POST['btnSearch'])) 
{
	$txtData=$_POST['txtData'];

	$ProductSelect1="SELECT * FROM Product
			 WHERE ProductName LIKE '%$txtData%'
			 OR Price='$txtData'
			 ";
	$Product_Query1=mysqli_query($connect,$Product_Select1);
	$Product_Count1=mysqli_num_rows($Product_Query1);

	for($i=0;$i<$count1;$i+=4) 
	{ 
		$Product_Select2="SELECT * FROM Product
				WHERE ProductName LIKE '%$txtData%'
				OR Price='$txtData'
				LIMIT $i,4";
		$Product_Query2=mysqli_query($connection,$Product_Select2);
		$Product_Count2=mysqli_num_rows($Product_Query2);	

		echo "<tr>";
		for ($x=0;$x<$Product_Count2;$x++) 
		{ 
			$Number_Of_Rows=mysqli_fetch_array($Product_Query1);

			$ProductID=$Number_Of_Rows['ProductID'];
			$ProductName=$Number_Of_Rows['ProductName'];
			$Brand=$Number_Of_Rows['Brand'];
			$Price=$row['Price'];
			$ProductImage1=$row['ProductImage1'];

			// list($Imagewidth,$Imageheight)=getimagesize($ProductImage1);
			// $width=$Imagewidth/2.5;
			// $height=$Imageheight/2.5;
		?>
			<td>
				<tr>
				<img src="<?php echo $ProductImage1 ?>" width="480px" height="250px" />
				</tr>
			</td>
			<td>
				<table>
					<tr>
						<hr/>
				<b><?php echo $ProductName ?></b>
				<hr/>
				<b><?php echo $Brand ?>  MMK</b>
				<hr/>
				<b><?php echo $Price ?>  MMK</b>
				
					</tr>
				</table>
				<hr/>
				<button><a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>">Details</a></button>
				
			</td>
		<?php
		}
		echo "</tr>";
	}

}
else
{
	$query1="SELECT * FROM Product";
	$result1=mysqli_query($connect,$query1);
	$count1=mysqli_num_rows($result1);

	for($i=0;$i<$count1;$i+=4) 
	{ 
		$query2="SELECT * FROM Product
				 LIMIT $i,4";
		$result2=mysqli_query($connect,$query2);
		$count2=mysqli_num_rows($result2);	

		echo "<tr>";
		for ($x=0;$x<$count2;$x++) 
		{ 
			$row=mysqli_fetch_array($result1);

			$ProductID=$row['ProductID'];
			$ProductName=$row['ProductName'];
			$Brand=$row['Brand'];
			$Price=$row['Price'];
			$ProductImage1=$row['ProductImage1'];

			// list($width,$height)=getimagesize($ProductImage1);
			// $width=$width/2.5;
			// $height=$height/2.5;
		?>
			<td>
				<img src="<?php echo $ProductImage1 ?>" width="480px" height="250px" />
			</td>
			<td>
				<table>
					<tr>
						<hr/>

				<b>Product Name: <?php echo $ProductName ?></b>
				<hr/>
				<b>Brand: <?php echo $Brand ?>  </b>
				<hr/>
				<b>Price: <?php echo $Price ?>  MMK</b>
				
					</tr>

				</table>
				<hr/>
				<button><a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>">Details</a></button>
			</td>
		<?php
		}
		echo "</tr>";
	}
}

?>
</table>

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>