<?php

$db_host = "localhost";
$db_username = "892847";
$db_pass = "123456789";
$db_name = "892847";

@mysql_connect ("$db_host", "$db_username", "$db_pass") or die ("Could not connect to MySQL");
@mysql_select_db ("$db_name") or die ("No database");

$sql = "INSERT INTO Members (name, email) VALUES ('$_POST['name']', '$_POST['email']')"; 


if (!mysql_query($sql)) {
   
   die (Error: ' . mysql_error());
}
   
mysql close ();

?>