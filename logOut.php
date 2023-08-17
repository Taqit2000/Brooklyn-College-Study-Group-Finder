<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Study Group Finder </title>
	<link rel="stylesheet" type="text/css" href="HomeCSS.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="Home.js"></script>
</head>

<body >

<div id="header"> 
<img  id="headerImage" src="BrooklynCollege.PNG">
<h1  id="headerTitle" > Study Group Finder </h1> 

</div>


<div id="navbar">
  <a class="HomePage.html" href="javascript:void(0)">Home</a>
  <a href="AboutUs.html">About Us</a>
  <a href="Contact.html">Contact</a>
  
</div>


<?php

session_start();
session_unset();
session_destroy();
echo "Logged out" ;// Redirect to login page after logout
echo "<a href=\"HomePage.html\">Go to Home page</a>";

//echo "<a href="HomePage.html">Go to Home page</a>";
//header("Location: HomePage.html");
//exit();
?>





<footer id="footer">
  <p>Brooklyn College </p>
  <p>900 Bedford Avenue, Brooklyn, NY 11210 </p> <br> 
  <i  id="fa" class="fa">&#xf082;</i>
  <i id="fa" class="fa">&#xf16d;</i>
</footer>


</body>
</html>