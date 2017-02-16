<?php
require 'connect.php';



$id = $_POST['id'];

$db->set_charset("utf8");
$result = $db->query("SELECT * FROM test WHERE id = '11'") or die ($db->error);

while($row = mysqli_fetch_array($result))
            {

$name = $row['name'];
$checkbox = $row['checkbox'];
$id = $row['id'];
}


echo "$checkbox";
?>