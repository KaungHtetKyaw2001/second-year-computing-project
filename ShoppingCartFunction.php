<?php 

function AddProductToShoppingCart($ProductID,$Quantity)
{
	include('connect.php');
	$Select = "SELECT * FROM Product WHERE ProductID='$ProductID'";
	$Select_Query = mysqli_query($connect,$Select);
	$Select_Count = mysqli_num_rows($Select_Query);
	$Select_Rows  = mysqli_fetch_array($Select_Query);

	if ($Select_Count<1) 
	{
		echo "<p> No product Data found!</p>";
		exit();
	}
	if ($Quantity <1) 
	{
	    echo "<p>Please enter your quantity.</p>";
	    exit();	
	}
	if (isset($_SESSION['ShoppingCartFunctions'])) 
	{
		$Index = IndexOf($ProductID);
		if ($Index == -1) 
		{
			$size = count($_SESSION['ShoppingCartFunctions']);
			$_SESSION['ShoppingCartFunctions'][$size]['ProductID']=$ProductID;
			$_SESSION['ShoppingCartFunctions'][$size]['Quantity']=$Quantity;

			$_SESSION['ShoppingCartFunctions'][$size]['ProductName']=$Select_Rows['ProductName'];
			$_SESSION['ShoppingCartFunctions'][$size]['Brand']=$Select_Rows['Brand'];
			$_SESSION['ShoppingCartFunctions'][$size]['Price']=$Select_Rows['Price'];
			$_SESSION['ShoppingCartFunctions'][$size]['ProductImage1']=$Select_Rows['ProductImage1'];
		}
		else
		{
			$_SESSION['ShoppingCartFunctions'][$Index]['Quantity']+=$Quantity;
		}
	}
	else
	{
		$_SESSION['ShoppingCartFunctions']=Array();
		$_SESSION['ShoppingCartFunctions'][0]['ProductID']=$ProductID;
		$_SESSION['ShoppingCartFunctions'][0]['ProductName']=$Select_Rows['ProductName'];
		$_SESSION['ShoppingCartFunctions'][0]['Brand']=$Select_Rows['Brand'];
		$_SESSION['ShoppingCartFunctions'][0]['Quantity']=$Quantity;
		$_SESSION['ShoppingCartFunctions'][0]['Price']=$Select_Rows['Price'];
		$_SESSION['ShoppingCartFunctions'][0]['ProductImage1']=$Select_Rows['ProductImage1'];
	}
	echo "<script>window.location='ShoppingCartFunctions.php</script>";
}

function RemoveProduct($ProductID)
{
	$Index = IndexOf($ProductID);
	unset($_SESSION['ShoppingCartFunctions'][$Index]);
	$_SESSION['ShoppingCartFunctions']=array_values($_SESSION['ShoppingCartFunctions']);
	echo "<script>window.location='ShoppingCart.php'";
}

function ClearAll()
{
	unset($_SESSION['ShoppingCartFunctions']);
	echo "<script>window.location='ShoppingCart.php</sctipt>";
}

function TotalAmount()
{
	$TotalAmount=0;
	$size=count($_SESSION['ShoppingCartFunctions']);
	for ($i=0; $i <$size ; $i++) 
	{ 
		$Price=$_SESSION['ShoppingCartFunctions'][$i]['Price'];
		$Quantity=$_SESSION['ShoppingCartFunctions'][$i]['Quantity'];
		$TotalAmount+=($Price*$Quantity);
	}
	return $TotalAmount;
}

function TotalQuantity()
{
	$TotalQuantity=0;
	$size=count($_SESSION['ShoppingCartFunctions']);
	for ($i=0; $i <$size ; $i++) 
	{ 
		$Quantity=$_SESSION['ShoppingCartFunctions'][$i]['Quantity'];
		$TotalQuantity+=$Quantity;
	}
	return $TotalQuantity;
}

function TaxAmount()
{
	$TaxAmount=0;
	$TaxAmount=TotalAmount() * 0.05;
	return $TaxAmount;
}

function DepositFinalAmount()
{
	$TotalAmount=TotalAmount();
	$ResultAmount=TotalAmount()/2;
	$FirstAmount=$ResultAmount;
	$SecondAmount=$ResultAmount;
}

function IndexOf($ProductID)
{
	if (!isset($_SESSION['ShoppingCartFunctions'])) 
	{
		return -1;
	}
	$size = count($_SESSION['ShoppingCartFunctions']);
	if ($size<1) 
	{
		return -1;
	}
	for ($i=0; $i <$size ; $i++) 
	{ 
		if ($ProductID == $_SESSION['ShoppingCartFunctions'][$i]['ProductID']) 
		{
			return $i;
		}
	}
	return -1;
}
 ?>
