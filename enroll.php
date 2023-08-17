




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
//session_start();





if ($_SERVER["REQUEST_METHOD"] === "POST")

{
    // User is logged in, process course enrollment
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "studyfinder";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $unique_id = $_POST["Id"];
    $course = $_POST["course"];
    $pass= $_POST["password"];




    // Insert enrollment data into the course table
        if($course == "Data Structures")
      {
         $sql= "INSERT INTO DataStructures  VALUES ('$unique_id','$course','5')";
         
                                 
      }
                          
      elseif($course == "Algorithms")
        {
           $sql= "INSERT INTO Algorithms  VALUES ('$unique_id','$course','6')";
            
         }
            
        else
          {
           $sql= "INSERT INTO WebDesign  VALUES ('$unique_id','$course','7')";
            
           }

                        //  else 
                         //  {
                         //   echo "Error: " . $InsertCourse . "<br>" . $conn->error;
                         // }

    

              // check if id is available in the database
       $stmt = $conn->prepare("SELECT * FROM userinfo WHERE Id = ? AND Password = ?");
        $stmt->bind_param("ss", $unique_id, $pass); // "s" indicates a string parameter
        $stmt->execute();

        // check password 
      //  $stmt2 = $conn->prepare("SELECT `Passoword` FROM `userinfo` WHERE  Password = ?");
       // $stmt2->bind_param("s", $pass); 
       // $stmt2->execute();

        // Get the result
        $result = $stmt->get_result();
        //$result2= $stmt2->get_result();

        // Check if a matching ID was found
        if (  ($result->num_rows === 1 ) ) //&& ($result2->num_rows> 0) )
        {
            // Matching ID found, proceed with enrollment or other actions
            // ...

              if ($conn->query($sql) === true) 
             {

                 echo "You are enrolled in the  $course study group";
                 
                  echo '<p>Click here to go to homepage: <a href="HomePage.html">Home Page</a>.</p>';
            }

                 else 
                    {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $stmt->close();
                   // $stmt2->close();
                    $conn->close();

        } 


        else 
        {
            echo "No matching ID found" ;
            // ...
        }

} 



else 
{
    //User is not logged in, prompt them to log in
    //echo "Please log in to enroll in a course.";
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