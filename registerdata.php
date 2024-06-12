<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bustraval";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    
$sql = "INSERT INTO busreservation (Fname,Mname,Lname,Aname,Mnumber,Gender,source,destination,startdate,todate,time)
VALUES ('$Fname','$Mname','$Lname','$Aname','$Mnumber','$fav_g','$source','$destination','$startdate','$todate','$time')";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>