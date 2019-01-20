<?php
$servername = "cse.unl.edu";
$username = "dgiandinoto";
$password = "dbdbdb";
$dbname = "dgiandinoto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$showNumber = 4680;

$sql = "SELECT * FROM Clues WHERE show_number =" . $showNumber;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["category"]. "\n";
    }
} else {
    echo "\n0 results";
}
$conn->close();
?>
