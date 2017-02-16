<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "892847", "123456789", "892847");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$checkbox = mysqli_real_escape_string($link, $_POST['checkbocid']);
$id = mysqli_real_escape_string($link, $_POST['mysqlid']);


// attempt insert query execution
$sql = "UPDATE test SET checkbox = '$checkbox' WHERE id = '$id'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. <br/><a href='try.php'><input name='Button' type='button' value='Back'/></a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
</body>

</html>
