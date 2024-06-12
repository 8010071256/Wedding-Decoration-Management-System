<!DOCTYPE html>
<html>
<body>

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
}

$sql = "SELECT * FROM passanger";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<br> GET AMOUNT: ". $row["amountget"]. " - NAME: ". $row["custname"]. " - ADDRESS " . $row["custaddress"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>