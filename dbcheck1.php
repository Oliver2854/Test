<?php
require 'connect.php';



$fetchedId = $_POST['id'];

$db->set_charset("utf8");
$result = $db->query("SELECT * FROM test WHERE id = '1'") or die ($db->error);

while($row = mysqli_fetch_array($result))
            {

$name = $row['name'];
$checkbox1 = $row['checkbox'];
$id = $row['id'];
}
mysqli_close($db);


if ($checkbox1 < 1) {
$link = mysqli_connect('localhost', '1280511', '123456789', '1280511');
mysqli_set_charset($link, "utf8");

$sql = "UPDATE test SET checkbox = '1' WHERE id = '1'";
if(mysqli_query($link, $sql)){
     echo "Updating...";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "Der er sket en fejl. Kontakt Oliver og copy/paste det ovenstÃƒÂ¥ende.";
}
mysqli_close($link);
} else if ($checkbox1 = 1) {
$link = mysqli_connect('localhost', '1280511', '123456789', '1280511');
mysqli_set_charset($link, "utf8");

$sql = "UPDATE test SET checkbox = '0' WHERE id = '1'";
if(mysqli_query($link, $sql)){
     echo "Updating...";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "Der er sket en fejl. Kontakt Oliver og copy/paste det ovenstÃƒÂ¥ende.";
}
mysqli_close($link);
}

?>
