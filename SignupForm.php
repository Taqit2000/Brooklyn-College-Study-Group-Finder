
<!DOCTYPE html>
<html>
 
<head>
    <title>Signup Message </title>
    <link rel="stylesheet" type="text/css" href="HomeCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 
<body>
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
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "studyfinder";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);


            $firstName = $_POST['FirstName'];
            $lastName = $_POST['LastName'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phoneNo=$_POST['phone'];
            $gender=$_POST['gender'];
            $course=$_POST['courses'];


            // generating an Id for the userInfo 
                  $prefix = "SF";
                  $unique_id = $prefix . uniqid();

                  // Checking if id is already in the database
                  $id_exists = true; 
                  while ($id_exists) 
                  {
                      $check_query = "SELECT id FROM userinfo WHERE id = '$unique_id'";
                      $result = $conn->query($check_query);

                      if ($result->num_rows === 0) 
                      {
                          // The ID is not in the database, break the loop
                          $id_exists = false;
                      }
                      else 
                      {
                          // Generate a new unique ID and continue the loop
                          $unique_id = $prefix . uniqid();
                      }
                  }



            // Check connection
            if ($conn->connect_error) 
            {
              die("Connection failed: " . $conn->connect_error);
            }

            // this part inserts values: 
            else
            {

              if ($_SERVER["REQUEST_METHOD"] === "POST") 
              {
                  $email = $_POST["email"];


                  // check if the email is bcmail
                  if (substr($email, -16) !== "@bcmail.cuny.edu")
                  {
                      echo "Email must be your BC Email.";
                      echo '<p>Click here to signup: <a href="HomePage.html">Sign Up</a>.</p>';
                  } 

                

                  else 
                  {
                      $sql = "INSERT INTO userinfo  VALUES ('$firstName','$lastName','$email','$password','$phoneNo','$gender','$unique_id')";

                  
                          if ($conn->query($sql) ) 
                          {
                              echo   "Sign up successful" ;
                              
                              echo '<p>Your unique ID is: ' . $unique_id . '</p>';
                             echo '<p>Click here to login: <a href="login.html">Login</a>.</p>';
                          
                          }

                           else 
                           {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }




                            /// here it inserts in courses tables 




                          

                  }
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