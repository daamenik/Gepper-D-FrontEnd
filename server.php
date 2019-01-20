<?php
$showNumber = $_REQUEST["showNumber"];

$servername = "cse.unl.edu";
$username = "dgiandinoto";
$password = "dbdbdb";
$dbname = "dgiandinoto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Clues WHERE show_number =" . $showNumber;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $jsonArray = [];
    while($row = $result->fetch_assoc()) {
        $jsonArray[] = $row;
    }
    $jsonArray = json_encode($jsonArray);
    $conn->close();
    echo $jsonArray;
} else {
    $conn->close();
    echo "no results";
}
?>
