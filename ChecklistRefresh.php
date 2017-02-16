<?php
require 'connect.php';



$fetchedId = $_POST['id'];

$db->set_charset("utf8");
$result = $db->query("SELECT * FROM test WHERE id = '$fetchedId'") or die ($db->error);

while($row = mysqli_fetch_array($result))
            {

$name = $row['name'];
$checkbox = $row['checkbox'];
$id = $row['id'];
$email = $row['email'];
}
mysqli_close($db);

echo '<div id="';
echo $id;
echo '" class="check-list">
<h1>';
echo $name;
echo '</h1>
<p>Email: <a href="mailto: ';
echo $email;
echo '">';
echo $email;
echo '</a></p>
<input id="';
echo $id;
echo '" name="';
echo $id;
echo '" type="checkbox"';
if ($checkbox > 0) {
echo 'checked="checked"';
}
echo 'onclick="check(this.id)"/>
<div id="txtHint"><p>';
echo $checkbox;
echo '</p></div>
<input id="';
echo $id;
echo '" name="';
echo $id;
echo '" type="button" value="button" onclick="refresh(this.id)"
</div>';

?>
