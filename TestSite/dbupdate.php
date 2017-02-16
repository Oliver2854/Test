<?php
$id = intval($_POST['id']);
$checkbox = intval($_POST['val']);

$link = mysqli_connect("localhost", "892847", "123456789", "892847");
mysqli_set_charset($link, "utf8");

$sql = "UPDATE test SET checkbox = '$checkbox' WHERE id = '11'";
if(mysqli_query($link, $sql)){
     echo "Updating...";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "Der er sket en fejl. Kontakt Oliver og copy/paste det ovenstÃ¥ende.";
}

?>