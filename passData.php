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
      $Guest = $_POST['Guest'];
      $Chair = $_POST['Chair'];
      $Table = $_POST['Table'];
      $Sound = $_POST['Sound'];
      $totpass = $_POST['totpass'];
      $totse= $_POST['totse'];
      $totth= $_POST['totth'];
      $totfo= $_POST['totfo'];
      $totfi= $_POST['totfi'];

$sql = "INSERT INTO Customerorder (Guest,chair,Tablet,Sound,menufirst,menusecond,menuthird,menufourh,menufifth)
VALUES ('$Guest','$Chair',' $Table','$Sound','$totpass','$totse','$totth','$totfo','$totfi')";

if ($conn->query($sql) === TRUE) {
  echo "Your requriments save!";
  header("Location: http://localhost/NewWeb/payment.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>