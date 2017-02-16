<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

$dbhost = 'localhost';
$dbuser = '892847';
$dbpass = '123456789';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('892847');

$query = "SELECT * FROM test";
$result = mysql_query($query) or die(mysql_error());

?>


<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php 

while($row = mysql_fetch_array($result))
            {

$name = $row['name'];
$school = $row['school'];
$email = $row['email'];
$grade = $row['grade'];
$workshop = $row['workshop'];
$id = $row['id'];
?>


<td width="100"></td>
<td><?=$id?></td>
</tr>
<tr>
<td width="100">Navn</td>
<td><input name="nameid" type="text" value="<?=$name?>"></td>
</tr>
<tr>
<td width="100">Email</td>
<td><input name="emailid" type="text" value="<?=$email?>"></td>
</tr>
<tr>
<td width="100">Grade</td>
<td><input name="gradeid" type="text" value="<?=$grade?>"></td>
</tr>
<tr>
<td width="100">Workshop</td>
<td><input name="workshopid" type="text" value="<?=$workshop?>"></td>
</tr>
<tr>
<td width="100">Skole</td>
<td><input name="schoolid" type="text" value="<?=$school?>"></td>
</tr>
<?php } ?>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>



<?php

if(isset($_POST['update']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$school = $_POST['school'];
$id = $_POST['id'];
$grade = $_POST['grade'];
$workshop = $_POST['workshop'];

$sql = mysql_query("UPDATE 'test' SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop' WHERE id = '$id'");

$retval = mysql_query( $conn, $sql );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}


?>
</body>

</html>
