
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
    $Fname = $_POST['Fname'];
      $Mname = $_POST['Mname'];
      $Lname = $_POST['Lname'];
      $Aname = $_POST['Aname'];
      $mnumber = $_POST['mnumber'];
      $fav_g = $_POST['fav_g'];
      $startdate = $_POST['startdate'];
      $appt = $_POST['appt'];


$sql = "INSERT INTO customerregister (Fname,Mname,Lname,Aname,Mnumber,Gender,startdate,time)
VALUES ('$Fname','$Mname','$Lname','$Aname','$mnumber','$fav_g','$startdate','$appt')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 header("Location: http://localhost/NewWeb/passanger.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>