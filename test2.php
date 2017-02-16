<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "892847", "123456789", "892847");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$school = mysqli_real_escape_string($link, $_POST['school']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$grade = mysqli_real_escape_string($link, $_POST['grade']);
$workshop = mysqli_real_escape_string($link, $_POST['workshop']);
$idk = mysqli_real_escape_string($link, $_POST['idk']);


// attempt insert query execution
$sql = "INSERT test SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>