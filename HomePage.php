<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- CSS coding -->
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
	font-family: "arial", sans-serif;
}
header
{
	background-color: lime;
	color: white;
	padding: 15px;
	margin: 10px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	border-radius: 30px;
	font-style: inherit;
	font-size: 1em;
}
header.headernavigation li
{
	padding: 8px;
	margin-bottom: 7px;
	background-color: white;
	float: left;
	color: #ffffff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
nav.navigationbar ul
{
	list-style: none;
	display: flex;
	position: relative;
	margin: 1em 2em;
	padding: 12px;
	text-align: center;
}
nav.navigationbar li
{
	font-size: 17.15px;
	padding: 15px;
	margin-bottom: 5px;
	background-color: white;
	float: right;
	color: #ffffff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
nav.navigationbar li:hover
{
	background-color: yellow;
}
nav.navigationbar li a
{
	text-decoration: none;
}
.navigationbar
{
	/*top: 100px;*/
	background-color: gold;
	height: 80px;
	position: relative	;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
	border-radius: 30px;
	z-index: 500;
	margin: 15px;
	float: center;
	position: relative;
	font-size: 1.2em;
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
}
/*nav.navigtionbar2 li a
{
	text-shadow: 0 2px 1px rgba(0,0,0,0.5);
	display: none;
	background-color: green;
	text-decoration: none;
	color: #f0f0f0;
	font-size: 1.6em;
	margin: 10px;
	line-height: 28px;
	color: black;
}*/
nav.navigationbar li:hover
{
	background-color: yellow;
}
.navigationbar2
{
	background-color: aqua;
	height: 60px;
	position: relative;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
	border-radius: 30px;
	z-index: 500;
	margin: 20px;
	float: center;
	position: relative;
	font-size: 1.5em;
}
aside
{
	background-color: aqua;
	padding: 50px;
	color: #ffffff;
	text-align: left;
	font-size: 14px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	font-weight: arial;
}
footer
{
	background-color: black;
	color: #ffffff;
	text-align: center;
	font-size: 12px;
	padding: 15px;
}
/*For mobile phones*/
[class*="col-"]
{
	width: 100%
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
.contents
{
	background-color: silver;
	overflow: hidden;
	float: right;
	display: block;
	color: blue;
	text-align: right;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
	position: right;
}
button.Searchbutton
{
    padding: 8px 29px;
    background: yellow;
    color: blue;
    font-weight: 500;
    border: none;
    font-size: 15px;
    letter-spacing: 1px;
    border-radius: 0px;
}
 /* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

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

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ff66ff;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;} 

 .collapsible {
  background-color: #ff66ff;
  color: black;
  cursor: pointer;
  padding: 10px;
  width: 10%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 10px;
  font-family: arial;
}

.active, .collapsible:hover {
  background-color: purple;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
/*.Collapsiblebar
{
	background-color: #66ffff;
	color: green;
	height: 100px;
	font-size: 1.4em;
	text-align: center;
  	margin-left: 10px;
  	opacity: 1;
    -webkit-transition: all 0.3s;
  	transition: all 0.3s;
}*/
.login
{
	font-size: 1em;
	text-align: center;
	margin-left: 10px;
	margin-bottom: 5px;
	color: purple;
}
.Welcome
{
	font-size: 1.5em;
	text-align: center;
	margin-left: 10px;
	margin-bottom: 5px;
	color: purple;
}
.Alert
{
	font-size: 1.5em;
	text-align: center;
	margin-left: 10px;
	margin-bottom: 5px;
	color: purple;
	background-color: red;
}
.Alert2
{
	font-size: 1.5em;
	text-align: center;
	margin-left: 10px;
	margin-bottom: 5px;
	color: purple;
	background-color: red;
}
.button {
  padding: 10px 15px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: orange;
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
img.image1
{
	position: relative; 
	width:400px;
	margin-left: 1000px;
	bottom: 75px;
}
article
{
	padding: 15px;
	color: yellow;
	text-align: left;
	font-size: 20px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	background-color: yellow;
	font-family: arial;
}
p {
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
article.article_animation
{
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
</style>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<!-- CSS coding -->
	<title>Welcome to our Website.</title>
</head>

<body>
<header class="headernavigation"><h1>KAUNG HTET KYAW TRADING AND DISTRIBUTION COMPANY</h1><img class="image1" src="Images/CompanyLogo.jpg">
 <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>


<section>
<nav class="navigationbar2">
<button class="button"><a href="#">LOGIN</a></button>   
	<button class="button"><a href="">REGISTER</a></button>
	<p class="login">DID NOT LOGGED IN OR REGISTERED? IF SO, LOGIN OR REGISTER HERE.  -></p>
	
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

	<nav class="navigationbar">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Import</a></li>
			 <div class="dropdown">
  			<li><a href="#">Product</a></li><br><br>
  			<div class="dropdown-content">
    		<a href="#">Medicine</a>
    		<a href="#">Oil</a>
    		<a href="#">Stationary Item</a>
    		<a href="#">Paper</a>
  			</div>
			</div> 
			<div class="dropdown">
  			<li><a href="#">Product Details</a></li><br><br>
  			<div class="dropdown-content">
    		<a href="#">Medicine</a>
    		<a href="#">Oil</a>
    		<a href="#">Stationary Item</a>
    		<a href="#">Paper</a>
  </div>
</div> 
			<li><a href="#">Cart</a></li>
			<li><a href="#">Purchase</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Feedback</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Frequent Asked Question and Answers</a></li><br>
	</ul>
	</nav>
<article><p class="Welcome">Welcome from our website. Which products do you want to buy?</p></article>
<h1 class="Alert">Alert! The Corona Virus has raging!!!<p>Now the corona virus is spread out through the countries all over the world.</p></h1>

<aside><p class="">dsffsfijdsfj</p></aside>
</section>
</body>
</html>