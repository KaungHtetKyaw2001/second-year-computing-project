<?php  
function AddProduct($PurchaseID,$Price,$PurchaseQuantity)
{
	include('connect.php');
	
	$query="SELECT * FROM Purchase WHERE PurchaseID='$PurchaseID' ";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	$rows=mysqli_fetch_array($result);

	if ($count < 1) 
	{
		echo "<p>No Product Information Found!</p>";
		exit();
	}

	if ($PurchaseQuantity < 1) 
	{
		echo "<p>Please enter correct quantity to purchase.</p>";
		exit();
	}

	if(isset($_SESSION['PurchaseFunctions'])) 
	{
		$index=IndexOf($ProductID);

		if($index == -1) 
		{
			$size=count($_SESSION['PurchaseFunctions']);

			$_SESSION['PurchaseFunctions'][$size]['PurchaseID']=$PurchaseID;
			$_SESSION['PurchaseFunctions'][$size]['Price']=$Price;
			$_SESSION['PurchaseFunctions'][$size]['PurchaseQuantity']=$PurchaseQuantity;

		}
		else
		{
			$_SESSION['PurchaseFunctions'][$index]['PurchaseQuantity']+=$PurchaseQuantity;
		}
	}
	else
	{
		//Condition 1

		$_SESSION['PurchaseFunctions']=array();

		$_SESSION['PurchaseFunctions'][0]['PurchaseID']=$PurchaseID;
		$_SESSION['PurchaseFunctions'][0]['Price']=$Price;
		$_SESSION['PurchaseFunctions'][0]['PurchaseQuantity']=$PurchaseQuantity;
	}

	echo "<script>window.location='Purchase.php'</script>";
}
function TotalPurchaseAmount()
{
	$TotalAmount=0;

	$size=count($_SESSION['PurchaseFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$Price=$_SESSION['PurchaseFunctions'][$i]['PaymentAmount'];
		$PurchaseQuantity=$_SESSION['PurchaseFunctions'][$i]['Quantity'];

		$TotalAmount+=($Price * $PurchaseQuantity);
	}
	return $TotalAmount;
}
function TotalQuantity()
{
	$TotalQuantity=0;

	$size=count($_SESSION['PurchaseFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$PurchaseQuantity=$_SESSION['PurchaseFunctions'][$i]['Quantity'];

		$TotalQuantity+=$PurchaseQuantity;
	}
	return $TotalQuantity;
}

function FirstandSecondPayments()
{
	$FirstAmount=0;
	$SecondAmount=0;

	$size=count($_SESSION['PurchaseFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$ResultAmount= TotalAmount()/2;
		$FirstAmount=$ResultAmount;
		$SecondAmount=$ResultAmount;
	}
	return $FirstAmount;
	return $SecondAmount;
}


?>