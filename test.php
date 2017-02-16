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

$sql = "INSERT INTO Members (check-in, check-out, school, email, grade, vegetarian, vegan, workshop, payed) VALUES ('$_POST['check-in']', '$_POST['check-out']', '$_POST['school']', '$_POST['email']', '$_POST['grade']', '$_POST['vegetarian']', '$_POST['vegan']', '$_POST['workshop']', '$_POST['payed']')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
