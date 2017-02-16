<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>


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
        echo "id: " . $row['id']. " - Navn: " . $row['name']. "Skole " . $row['school']. "Email " . $row['email']. "Klasse " . $row['grade']. "Workshop " . $row['workshop']. "I dont know " . $row['idk']. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<textarea><?php echo $grade?></textarea>
</body>

</html>
