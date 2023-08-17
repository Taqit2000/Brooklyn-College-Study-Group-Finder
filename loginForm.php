<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Confirmation </title>
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

<br>

<center> 


<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studyfinder";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}




// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $username = $_POST["Id"];
    $password = $_POST["password"];

    // Check user credentials
    $sql = "SELECT * FROM userinfo WHERE Id = '$username' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) 
    {


      // session_start();
      // $_SESSION["username"] = $username;
            $user = $result->fetch_assoc();
       // $_SESSION["loggedin"] = true;
       // $_SESSION["username"] = $user["Id"];
        echo   "Login successful !!!"  ;

          echo "<p>User Information:</p>";
           echo "<p>Email: " . $user["Password"] . "</p>";
        echo "<p>ID: " . $user["Id"] . "</p>";
        echo "<p>First Name: " . $user["First Name"] . "</p>";
        echo "<p>Last Name: " . $user["Last Name"] . "</p>";
        echo "<p>Phone No: " . $user["Phone No"] . "</p>";
        echo "<p>Email: " . $user["Email"] . "</p>";

      
        // Retrieve course enrollment information
        $courseTables = ['datastructures', 'algorithms', 'webdesign'];
     
         /*
        echo "<p>Enrolled Courses:</p>";
        foreach ($courseTables as $courseTable) {
            $courseSql = "SELECT * FROM $courseTable WHERE Id= '$username'";
            $courseResult = $conn->query($courseSql);
    

            if ($courseResult->num_rows>0) {
                while ($courseRow = $courseResult->fetch_assoc()) {
                  //  echo "<p>Course: $courseTable "</p>";
                    echo "<p>Course: " . $courseTable . "</p>";
                }
            }

                else {
                echo  "No courses Enrolled yet";
          }
            */

          echo "<p>Enrolled Courses:</p>";
foreach ($courseTables as $courseTable)
{
    $courseSql = "SELECT * FROM $courseTable WHERE Id = '$username'";
    $courseResult = $conn->query($courseSql);

    if ($courseResult->num_rows > 0) 
    {
        //echo "<p>Course: $courseTable</p>";
        while ($courseRow = $courseResult->fetch_assoc()) 
        {
            // Retrieve and display the course name from the respective course table
            $courseName = $courseRow["Course"];
            echo "<p>$courseName</p>";
        }
    } 
    else 
    {
       // echo "<p>Not enrolled in $courseTable</p>";
    }
}




        echo '<a href="logOut.php">Log Out here</a>';
       //header("Location: contact.html"); // Redirect to welcome page
    }


     else
      {
        echo "Invalid login credentials";
      }
}

$conn->close();
?>

</center>


<footer id="footer">
  <p>Brooklyn College </p>
  <p>900 Bedford Avenue, Brooklyn, NY 11210 </p> <br> 
  <i  id="fa" class="fa">&#xf082;</i>
  <i id="fa" class="fa">&#xf16d;</i>
</footer>


</body>
</html>