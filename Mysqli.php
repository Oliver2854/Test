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
<form method="post" action="#">
<?=$id?>
<input name="nameid" type="text" value="<?=$name?>">
<input name="emailid" type="text" value="<?=$email?>">
<input name="gradeid" type="text" value="<?=$grade?>">
<input name="workshopid" type="text" value="<?=$workshop?>">
<input name="schoolid" type="text" value="<?=$school?>">
<?php } 
session_start();
$_SESSION['storage'] = $_POST;
?>
<input name="update" type="submit" id="update" value="Update">
</form>


<?php
if(isset($_POST['update']))
{
    
$link = mysqli_connect("localhost", "892847", "123456789", "892847");
 
// Check connection
if($link === false){
    die("Couldn't connect. " . mysqli_connect_error());
}
session_start();

$name = $_SESSION['storage']['nameid'];
$school = $_SESSION['school']['schoolid'];
$email = $_SESSION['email']['emailid'];
$grade = $_SESSION['grade']['gradeid'];
$workshop = $_SESSION['workshop']['grade'];
$id = $_SESSION['id'];


$sql = "UPDATE test SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop' WHERE id = '8'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. $name";
    print_r($_POST['nameid']);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
}
?>
</body>
</html>