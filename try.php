<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
require 'connect.php';


$result = $db->query("SELECT * FROM test") or die ($db->error);

while($row = mysqli_fetch_array($result))
            {

$name = $row['name'];
$school = $row['school'];
$email = $row['email'];
$grade = $row['grade'];
$workshop = $row['workshop'];
$id = $row['id'];
?>
<form method="post" action="try2.php">
<input name="mysqlid" type="hidden" value="<?=$id?>"/>
<br/>
<label id="Label">Navn</label><br/><input name="nameid" type="text" value="<?=$name?>"/><br/>
<label id="Label1">Email</label><br/><input name="emailid" type="text" value="<?=$email?>"/><br/>
<label id="Label1">Klasse</label><br/><input name="gradeid" type="text" value="<?=$grade?>"/><br/>
<label id="Label1">Workshop</label><br/><input name="workshopid" type="text" value="<?=$workshop?>"/><br/>
<label id="Label1">Skole</label><br/><input name="schoolid" type="text" value="<?=$school?>"/>
<br/><input name="update" type="submit" id="update" onclick="store()" value="Update"/>
</form>
<br/>
<br/>
<?php } ?>


<script>
if (localStorage.getItem("username") === null) {
}
else {
var storedValue = localStorage.getItem("mysqlid");
var storedValue = localStorage.getItem("nameid");
var storedValue = localStorage.getItem("emailid");
var storedValue = localStorage.getItem("gradeid");
var storedValue = localStorage.getItem("workshopid");
var storedValue = localStorage.getItem("schoolid");
}
</script>

</body>

</html>
