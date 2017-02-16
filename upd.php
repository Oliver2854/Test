<?php
require 'connect.php';

$_REQUEST = $id;
$result = $db->query("SELECT checkbox FROM test WHERE id='$id'") or die ($db->error);

$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $id);
fclose($myfile);

while($row = mysqli_fetch_array($result))
{
$check = $row['checkbox'];

echo $check;
}
?>