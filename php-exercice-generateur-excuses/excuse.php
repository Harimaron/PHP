<?php
$child = $_GET["child"];
$teacher = $_GET["teacher"];
$absence = $_GET["absence"];
$sentence = "Monsieur/Madame ".$teacher.", ".$child." ne pourra se présenter en cours aujourd'hui, ";
if ($absence == "illness") {
    $sentence .= "pour cause de maladie.";
}
if ($absence == "death") {
    $sentence .= "à cause du décès de son animal de compagnie.";
}
if ($absence == "extra") {
    $sentence .= "pour raisons d'activité extra-scolaire.";
}
if ($absence == "other") {
    $sentence .= "pour raisons personnelles.";
}
echo $sentence;
?>


<html>
<head><title></title></head>
<body>
<form action="" method="get">
Nom de l'enfant
</br>
<input type="" name="child" value="">
</br>
Nom de l'institutrice
</br>
<input type="" name="teacher" value="">
<br/>
Raison de l'absence
<br/>
<input type="radio" name="absence" value="illness">
Maladie
</br>
<input type="radio" name="absence" value="death">
Décès de l'animal de compagnie
</br>
<input type="radio" name="absence" value="extra">
Activité extra-scolaire importante
</br>
<input type="radio" name="absence" value="other">
Autre
</br>
<input type="submit" value="generate">
</form>
</body>
</html> 