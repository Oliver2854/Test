<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<script  type="text/javascript">
  function store(){
     var inputEmail= document.getElementById("mysqlid");
     localStorage.setItem("mysqlid", inputEmail.value);
     var inputEmail= document.getElementById("nameid");
     localStorage.setItem("nameid", inputEmail.value);
     var inputEmail= document.getElementById("emailid");
     localStorage.setItem("emailid", inputEmail.value);
     var inputEmail= document.getElementById("gradeid");
     localStorage.setItem("gradeid", inputEmail.value);
     var inputEmail= document.getElementById("workshopid");
     localStorage.setItem("workshopid", inputEmail.value);
     var inputEmail= document.getElementById("schoolid");
     localStorage.setItem("schoolid", inputEmail.value);
    }
</script>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "892847", "123456789", "892847");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['nameid']);
$school = mysqli_real_escape_string($link, $_POST['schoolid']);
$email = mysqli_real_escape_string($link, $_POST['emailid']);
$grade = mysqli_real_escape_string($link, $_POST['gradeid']);
$workshop = mysqli_real_escape_string($link, $_POST['workshopid']);
$id = mysqli_real_escape_string($link, $_POST['mysqlid']);


// attempt insert query execution
$sql = "UPDATE test SET name = '$name', email = '$email', school = '$school', grade = '$grade', workshop = '$workshop' WHERE id = '$id'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. <br/><a href='try.php'><input name='Button' type='button' value='Back'/></a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
</body>

</html>
