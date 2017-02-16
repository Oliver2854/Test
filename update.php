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

$name = $_POST['name'];
$email = $_POST['email'];
$school = $_POST['school'];
$id = $_POST['id'];
$grade = $_POST['grade'];
$workshop = $_POST['workshop'];

$sql = mysql_query("UPDATE 'test' SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop' WHERE id = '$id'");


if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>