<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../Images/icon.png" >	
	<title>Kaung Htet Kyaw Trading and Distribution Company</title>
	<style type="text/css">
		*
{
	box-sizing: border-box;
}
section::after
{
	content: "";
	clear:both;
	display: table;
}
[class*="col-"]
{
	float: left;
	padding: 15px;
}
html
{
	font-family: Arial;
}
body
{
	background-color: white;
}
header
{
	background-color: lime; 
	color: darkgreen;
	height: 100px;
	font-size: 1.15em;
	text-align: left;
}
nav.links ul
{
	/*list-style-type: none;
	background-color: lightpink;
	height: 50px;
	width: 20%;
	margin-top: 10px;
	text-align: center;*/
	list-style-type: none;
	display: block;
	color:lightpink;
	float: left;
	position: relative;
	margin: 1em 2em;
	padding: 40px;
}
nav.links li
{
	padding: 8px;
	margin-bottom: 7px;
	background-color: blue;
	color: white;
	float: left;
	position: relative;
	box-shadow: 2px 3px 4px rgba(0,0,0,0.12) 2px 3px 4px rgba(0,0,0,0.24);
}
nav.links li a
{
	text-shadow: 0 2px 1px rgba(0,0,0,1);
	color: white;
}
nav.links li:hover
{
	background-color: blue;
	display: block;
	text-decoration: none;
	color: gold;
	font-size: 1.4em;
	margin: 0;
	line-height: 30px;
}
nav.links li:active a:hover,
nav.links li a:hover
{
	background-color: aqua;
}
.links
{
	background-color: aqua;
	height: 125px;
	position: absolute;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
	border-radius: 4px;
	z-index: 500;
	margin: 1em 0;
	float: center;
	position: relative;
	font-size: 1.2em;
}
div
{
	background-color: lightgreen;
	float: left;
	position: relative;
	font-size: 2em;
}
aside
{
	background-color: aqua;
	padding: 20px;
	color: #ffffff;
	/*text-align: left;*/
	font-size: 20px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,0.24);
	position: relative;
	width: 100%;
	height: 100%;
}
footer
{
	background-color: lightgreen;
	color: white;
	text-align: center;
	font-size: 20px;
	padding: 15px;
}
@media only screen and (min-width: 600px) {
	/*For Tablets*/
	.col-m-1{width: 8.33%;}
	.col-m-2{width: 16.66%;}
	.col-m-3{width: 25%;}
	.col-m-4{width: 33.33%;}
	.col-m-5{width: 41.66%;}
	.col-m-6{width: 50%;}
	.col-m-7{width: 58.33%;}
	.col-m-8{width: 66.66%;}
	.col-m-9{width: 75%;}
	.col-m-10{width: 83.33%;}
	.col-m-11{width: 91.66%;}
	.col-m-12{width: 100%;}
}
@media only screen and (min-width: 768px) {
	/*For desktop*/
	.col-1{width: 8.33%;}
	.col-2{width: 16.66%;}
	.col-3{width: 25%;}
	.col-4{width: 33.33%;}
	.col-5{width: 41.66%;}
	.col-6{width: 50%;}
	.col-7{width: 58.33%;}
	.col-8{width: 66.66%;}
	.col-9{width: 75%;}
	.col-10{width: 83.33%;}
	.col-11{width: 91.66%;}
	.col-12{width: 100%;}
}
@media only screen and (max-width: 600px)
{
	body{
		background-color: white;
	}
}
.Fun-childs
{
	float: right;
	position: relative;
	width: 400px;
}
.contents
{
	background-color: pink;
	overflow: hidden;
	float: center;
	display: block;
	color: blue;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
	position: absolute;
}
.child-painting
{
	float: right;
	position: relative;
	width: 400px;
}
.Dancing
{
	float: right;
	position: relative;
	width: 400px;
}
.after
{
	float: right;
	position: relative;
	width: 400px;
}
.training
{
	float: right;
	position: relative;
}
.Mardi
{
	color:red;
	animation-name: COVID-19;
	animation-duration: 2s;
	animation-timing-function: cubic-bezier(0.25,0.1,0.25,3.0);
	animation-delay: 0s;
	animation-iteration-count: 1;
	animation-direction: normal;
	animation-fill-mode: forwards;
	font-size: 1em;
}
@keyframes COVID-19 {
	0% {
		letter-spacing: 1.2em;
		color: white;
		position: center;
		text-align: center;
		background-color: red;
	}
	100%
	{
		letter-spacing: 0.1em;
		color: white;
	}
}
.facebook
{
	float: center;
	position: relative;
	width: 50px;
}
.instagram
{
	float: center
	position:relative;
	width: 50px;
}
.twitter
{
	float: center;
	position: relative;
	width: 50px;
}
.COVID-19
{
	font-size: 1.2em;
	height: 70px;
	background-color: red;
	color: blue;
}
.Body
{
	height: 70px;
	background-color: lightgreen;
	color: white;
}
.HomePage
{
	background-color: white;
	color: white;
}
.3Dpaint
{
	float: right;
	position: relative;
	width: 300px;
}
.3dpaint2
{
	float: left;
	position: relative;
	width: 300px;
}
nav.navigationbar2 ul
{
	bottom: 50px;
	list-style: none;
	display: block;
	position: relative;
	padding: 15px;
	text-align: right;
	float: left;
}
nav.navigationbar2 li
{
	padding: 10px;
	margin-top: 0px;
	background-color: pink;
	float: right;
	color: #ffffff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ff66ff;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;} 

.button {
  padding: 10px 15px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: green;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  position: right;
  float: right;
  margin-right: 15px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button a
{
	color: white;
	text-decoration: none;
}
	/*Button2*/
.button2 {
  padding: 10px 15px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  position: right;
  float: right;
  margin-left: 50px;
}

.button2:hover {background-color: #3e8e41}

.button2:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
.button2 a
{
	color: white;
	text-decoration: none;
}
       /* Button 2 ends*/
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: yellow;
  min-width: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
}
nav.navigationbar2 ul
{
	bottom: 50px;
	list-style: none;
	display: block;
	position: relative;
	padding: 15px;
	text-align: right;
	float: left;
}
nav.navigationbar2 li
{
	padding: 10px;
	margin-top: 0px;
	background-color: pink;
	float: right;
	color: #ffffff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.navigationbar2
{
	background-color: aqua;
	height: 60px;
	position: relative;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
	border-radius: 10px;
	z-index: 500;
	margin: 25px;
	float: center;
	position: relative;
	font-size: 1.3em;
}
	</style>
</head>
<body>
<header><h1>KAUNG HTET KYAW TRADING AND DISTRIBUTION COMPANY</h1></header>
<section>
<nav class="navigationbar2">
  <button class="button"><a href="SupplierRegister.php">REGISTER</a></button> 
  <button class="button"><a href="Supplier.php">LOGIN</a></button> 
	<p class="login">DID NOT LOGGED IN OR REGISTERED? IF SO, LOGIN OR REGISTER IN THERE (FOR SUPPLIER).  -></p>
	
			<!-- <ul><div class="dropdown">
	  			<li><a href="#">User</a></li><br><br>
	  			<div class="dropdown-content">
	    		<a href="#">Login</a>
	    		<a href="#">Register</a>
	    		</ul>
	    		<ul>
	    		<div class="dropdown">
	  			<li><a href="#">Supplier</a></li><br><br>
	  			<div class="dropdown-content">
	    		<a href="#">Login</a>
	    		<a href="#">Register</a>
	    		</ul>
	    		<ul>
	    		<div class="dropdown">
	  			<li><a href="#">Staff</a></li><br><br>
	  			<div class="dropdown-content">
	    		<a href="#">Login</a>
	    		<a href="#">Register</a>
	    		</ul> -->
	</nav>
</section>
<section>
	<nav class="links">
		<ul float="center" position="relative">
			<li><a href="SupplierUpdate.php">Profile Update</a></li>
			<li><a href="Purchase.php">Purchase</a></li>
			<li><a href="PurchaseUpdate.php">Purchase Update</a></li>
			<li><a href="PurchaseSearch.php">Purchase Search</a></li>
			<li><a href="PurchaseDetails.php">Purchase Details</a></li>
			<button class="button2"><a href="Supplier.php">Staff</a></button> 
		</ul>
	</nav>
	</section>

<div class="HomePage">
<aside align = "center">

<header class="COVID-19"><h1 class="COVID-19">ALERT!!! COVID-19 IS SPREAD THROUGHOUT THE WORLD.</h1></header>
<p class="Body">
	



	
