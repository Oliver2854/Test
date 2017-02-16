<?php

$db_host = "localhost";
$db_username = "892847";
$db_pass = "123456789";
$db_name = "892847";

@mysql_connect ("$db_host", "$db_username", "$db_pass") or die ("Could not connect to MySQL");
@mysql_select_db ("$db_name") or die ("No database");

@sql = "INSERT INTO Members (check-in, check-out, school, email, grade, vegetarian, vegan, workshop, payed) VALUES ('{$mysqli->real_escape_string($_POST['check-in'])}', '{$mysqli->real_escape_string($_POST['check-out'])}', '{$mysqli->real_escape_string($_POST['school'])}', '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['grade'])}', '{$mysqli->real_escape_string($_POST['vegetarian'])}', '{$mysqli->real_escape_string($_POST['vegan'])}', '{$mysqli->real_escape_string($_POST['workshop'])}', '{$mysqli->real_escape_string($_POST['payed'])}') 
@insert = @mysqli->query($sql);

if ($insert) {
   echo 'Success'
}
else {
   echo 'Fail'
}
   

<form method="post" action="">
   <input name="name" type="text" />
   <select name="school">
		<option>Vidar</option>
   </select>
   <input name="email" type="text" />
   <input name="grade" type="text" />
   <input name="vegetarian" type="checkbox" />
   <input name="vegan" type="checkbox" />
   <input name="payed" type="checkbox" />
   <input name="workshop" type="text" />
   <input name="check-in" type="checkbox" />
   <input name="check-out" type="checkbox" />
   <input name="Submit" type="submit" value="submit" />
   
</form>

?>