<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
session_start();
$checknum = 1123581321;
if ($_SESSION['login_check'] != $checknum) {
header("Location: repsintra.php");
}
?>
<link href="../intra.css" rel="stylesheet" />

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Repræsentant intra</title>
</head>

<body>
<h1>Repræsentant intra</h1>

<a href="logout.php" id="exit">Log af</a>

<?php
require 'connect.php';

$id = $_SESSION['login_id'];

$result = $db->query("SELECT * FROM Repser WHERE id = $id ORDER BY name ASC") or die ($db->error);

while($row = mysqli_fetch_array($result))
            {

$name = $row['name'];
$school = $row['school'];
$email = $row['email'];
$grade = $row['grade'];
$phone = $row['phone'];
$title = $row['title'];
$hidephone = $row['hidephone'];
$description = $row['description'];
$profile = $row['pb'];
$id = $row['id'];
}
?>

<div id="form">
<p>Kære med-repser<br>Dette er muligvis den grimmeste side jeg nogensinde har lavet.<br>
Det skal blive til vores interne side en dag, og jeg lover at den bliver pænere til den tid.
<br>Lige for nu har den kun ét formål, og det er at samle data, så hvis du gidder at udfylde nedestående felter bliver jeg meget glad.
<br>Har du flere svar sepereres de med komma</p>
<form name="web_form" id="web_form" method="post" action="process-reps.php" enctype="multipart/form-data">
        <p><label>Fulde navn: </label><br/><input required="required" type="text" name="name" id="name" value="<?=$name?>" /></p>
        <p><label>Arbejdstitel: </label><br><input type="text" name="title" id="title" value="<?=$title?>" /></p>
        <p><label>Email (@overskolestaevnet.dk): </label><br><input required="required" type="text" name="email" id="email" value="<?=$email?>" /></p>
        <p><label>Tlf.: </label><br><input required="required" type="text" name="phone" id="phone" value="<?=$phone?>" /></p>
        <p><label>Skole: </label><br><select required="required" name="school" id="school" >
           <option disabled selected value> -- Vælg skole -- </option>
           <option value="Vidar Skolen">Vidar Skolen</option>
           <option value="Sydskolen">Sydskolen</option>
           <option value="Kristofferskolen">Kristofferskolen</option>
           <option value="Michaelskolen">Michaelskolen</option>
           <option value="Rudolf Steiner Skolen i Vordingborg">Vordingborg</option>
           <option value="Rudolf Steiner Skolen i Odense">Odense</option>
           <option value="Rudolf Steiner Skolen i København">Københavnerskolen</option>
           <option value="Rudolf Steiner Skolen i Aalborg">Aalborg</option>
           <option value="Rudolf Steiner Skolen i Vejle">Vejle</option>
           <option value="Rudolf Steiner Skolen i Skanderborg">Skanderborg</option>
        </select></p>
        <p><label>Klasse: </label><br><select required="required" name="grade" id="grade">
           <option disabled selected value> -- Vælg klassetrin -- </option>
           <option value="8. Klasse">8. Klasse</option>
           <option value="9. Klasse">9. Klasse</option>
           <option value="1. VG">1. VG</option>
           <option value="2. VG">2. VG</option>
           <option value="3. VG">3. VG</option>
        </select></p>
        <p><label>Profilbillede: </label><br><input required="required" type="file" name="fileToUpload" id="fileToUpload"/></p>
        <p><label>Lidt om dig selv: </label><br><textarea required="required" name="story" rows="5" cols="64"><?=$description?></textarea></p>
        <input type="submit" name="Submit" value="Submit"/>
</form>
</div>

</body>

</html>
