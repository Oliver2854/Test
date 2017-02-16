<?php
require 'connect.php';
session_start();
print_r($_SESSION['storage']);

while($row = mysqli_fetch_array($_SESSION['storage']))
            {
$name = $row['name'];
$school = $row['school'];
$email = $row['email'];
$grade = $row['grade'];
$workshop = $row['workshop'];
$id = $row['id'];
}

$sql = mysqli_query("UPDATE test SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop'");

$retval = mysqli_query( $db, $sql );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);

?>

