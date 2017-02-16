<!DOCTYPE html>
<html>
<body>

<?php
//formålet er at opdatere en side med det nyeste data fra databasen uden at genindlæse hele siden. Det gøres ved hjælp af AJAX som du ikke kender til.
//For ikke at rode mig ud i en kompliceret forklaring, kan vi sige at AJAX kun reagerer på det php'en sender ud.
//Dvs. at vi skal have den her fil til at echo rettelserne, men jeg vil ikke bare tage hele den nye array
//jeg vil kun opdatere de specifikke steder.
$newChecked=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"); //I den rigtige kommer den her array fra databasen
$oldChecked=array("a"=>"red","b"=>"black","c"=>"yellow"); //I den rigtige kommer den her fra den forrige side.

if ($newChecked != $oldChecked) {
$result=key(array_diff($newChecked, $oldChecked)); //giv mig "key" af det sted hvor de to ikke stemmer
print_r($result); //print en linje af hvad der skal rettes
$a2=array(array_diff($newChecked, $oldChecked) => $newChecked[key(array_diff($newChecked, $oldChecked))]); //definer en array med den "key" der skal rettes, og den "value" der skal ændres
array_splice($oldChecked,0,1,$a2); //brug splice til at erstatte den gamle "value" med det ovenstående
} //og så starter vi forfra til de er ens
print_r($result);
?>

</body>
</html>