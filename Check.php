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

while($row = mysqli_fetch_array($result)) {
$id = $row['id'];
$name = $row['name'];
$checkbox = $row['checkbox'];
?>
<form method="post" action="" name="<?=$id?>">
<label id="nameid"><?php print($name); ?></label>
<!-- <input id="checkboxid" name="checkboxid" type="checkbox" <?php if ($checkbox == '1') echo "checked='checked'"; ?> oncchange="GetData()"/> -->
<input name="checkboxid" type="text" value="<?=$checkbox?>" onclick="loadDoc('upd.php', blockUpd())"/>
</form>
<?php } ?>

<script>
var iden;
var checker;

function loadDoc(url, cfunc) {
  var xmlhttp;
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      cfunc(xmlhttp);
    }
  };
identifier = this.parentElement.id;
xmlhttp.open("POST", url, true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(identifier);
}
function blockUpd(xmlhttp){
   this.value = xmlhttp.responseText;
}
/* function GetData() {
    $.ajax({
    type: 'post',
    url: 'updating.php',
    data: {mysqlid: "mysqlid", checkboxid: "checkboxid"}
    });
      success: function( data ) {
            location.reload();
       }
} */
</script>

</body>

</html>
