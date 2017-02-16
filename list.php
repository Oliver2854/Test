<?php
$servername = "localhost";
$username = "892847";
$password = "123456789";
$dbname = "892847";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, school, email, grade, workshop, idk FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Navn: " . $row["name"]. "Skole " . $row["school"]. "Email " . $row["email"]. "Klasse " . $row["grade"]. "Workshop " . $row["workshop"]. "I dont know " . $row["idk"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
