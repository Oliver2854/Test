<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
require 'connect.php';

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
?>
<div id="<?=$id?>" class="check-list"
<?php
if (strlen($name) < 1) {
?>
style="display:none"
<?php
}
?>
>
<h1><?=$name?></h1>
<p>Email: <a href="mailto:<?=$email?>"><?=$email?></a></p>
<input id="<?=$id?>" name="<?=$id?>" type="checkbox" <?php if ($checkbox > 0) { ?> checked="checked" <?php } ?> onclick="check(this.id)" onload="begin(this.id)"/>
<!-- <div style="background-color:fuchsia" id="<?=$id?>" onclick="check(1)"/> -->

<div id="txtHint"><p><?=$checkbox?></p></div>
<input id="<?=$id?>" name="<?=$id?>" type="button" value="button" onclick="refresh(this.list)"/>

</div>
<script>
var list["<?php echo json_encode($id); ?>"] = <?php echo json_encode($checkbox); ?>;
</script>
<?php
}
?>
<input type="button" value="Refresh" onclick="refresh()"/>
<p id="her">Her</p>
<script>
function begin() {
setInterval(function(){ refresh() }, 500);
}
function refresh() {
if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("her").innerHTML=this.responseText;
    }
  }
xmlhttp.open("POST", "ChecklistRefresh3.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("oldData="+list);
}
function check(str) {
if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      // document.getElementById("txtHint").innerHTML=this.responseText;
      location.reload();
    }
  }
xmlhttp.open("POST", "updateCheck.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("id="+str);
}
function changing (stuff) {
document.getElementById("txtHint").innerHTML = stuff;
}
</script>



</body>

</html>
