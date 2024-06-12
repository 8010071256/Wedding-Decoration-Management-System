<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ganeshdecoration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $firstname= $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $state = $_POST['state'];
      $message = $_POST['message'];
     
$sql = "INSERT INTO customercontact (Cname,Clastname,state,message)
VALUES ('$firstname','$lastname','$state','$message')";

if ($conn->query($sql) === TRUE) {
  echo "Thank You!";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>