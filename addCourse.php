
<?php
    session_start();

    // If user is not logged in, redirect to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: login.html");
        exit; // Make sure to exit after sending the header
    }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Final Broject </title>
	<link rel="stylesheet" type="text/css" href="HomeCSS.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="Home.js"></script>


</head>

<body >

<div id="header"> 
<img  id="headerImage" src="BrooklynCollege.PNG">

</div>

<div id="navbar">
  <a class="HomePage.html" href="javascript:void(0)">Home</a>
  <a href="AboutUs.html">About Us</a>
  <a href="Contact.html">Contact</a>
 
</div>


<?php
    session_start();
    
    // if user logged in then, will show the form: 
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        
        echo '<form action="enroll.php" method="post">';
        echo '<label for="course">Select a course:</label>';
        echo '<select name="course" id="course">';
        echo '    <option value="Data Structures">Data Structures</option>';
        echo '    <option value="Algorithms">Algorithms</option>';
        echo '    <option value="WebDesign">Web Design</option>';
        echo '</select>';
        echo '<input type="submit" value="Enroll">';
        echo '</form>';
    }



// if not logged then asked to log in 
     else
     {
        // User is not logged in, prompt them to log in
        echo '<p>Please <a href="login.html">log in</a> to enroll in a course.</p>';
        
    }
    ?>

























<footer id="footer">
  <p>Brooklyn College </p>
  <p>900 Bedford Avenue, Brooklyn, NY 11210 </p> <br> 
  <i  id="fa" class="fa">&#xf082;</i>
  <i id="fa" class="fa">&#xf16d;</i>
</footer>


</body>
</html>