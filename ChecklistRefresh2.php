<?php
require 'connect.php';



$oldChecked = $_POST['oldData'];

while ($oldChecked == $newChecked) {
$db->set_charset("utf8");
$result = $db->query("SELECT * FROM test ORDER BY name ASC") or die ($db->error);

while($row = mysqli_fetch_array($result)) {

$id = $row['id'];
$name = $row['name'];
$school = $row['school'];
$email = $row['email'];
$grade = $row['grade'];
$workshop = $row['workshop'];
$checkbox = $row['checkbox'];
$comments = $row['comments'];

$newChecked[$id] = $checkbox;
}
}
if ($oldChecked == $newChecked) {
$comparison = array_diff($newChecked, $oldChecked);
print_r($comparison);
}
/* do {
$db->set_charset("utf8");
$result = $db->query("SELECT * FROM test ORDER BY name ASC") or die ($db->error);
} while($old == $result)
if ($old != $result)
while($row = mysqli_fetch_array($old)) {

$oldId = $row['id'];
$oldName = $row['name'];
$oldSchool = $row['school'];
$oldEmail = $row['email'];
$oldGrade = $row['grade'];
$oldWorkshop = $row['workshop'];
$oldCheckbox = $row['checkbox'];
$oldComments = $row['comments'];

while (oldId != $newId) {
while($row = mysqli_fetch_array($old)) {
$newId = $row['id'];
$newName = $row['name'];
$newSchool = $row['school'];
$newEmail = $row['email'];
$newGrade = $row['grade'];
$newWorkshop = $row['workshop'];
$newCheckbox = $row['checkbox'];
$newComments = $row['comments'];
}
}
if (oldCheckbox != newCheckbox) {
echo $newCheckbox


}
*/

mysqli_close($db);

?>
