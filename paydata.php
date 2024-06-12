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
if(isset($_POST['save']))
{
    
      $firstname = $_POST['firstname'];
      $address = $_POST['address'];
      $amountpay = $_POST['amountpay'];
     
    


$sql = "INSERT INTO pay (custname,custaddress,amountget)
VALUES ('$firstname','$address','$amountpay')";

if ($conn->query($sql) === TRUE) {
  echo "Pay successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>