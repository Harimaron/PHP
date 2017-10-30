<?php
$talig = $_GET["talig"];
$age = $_GET["age"];
$gender = $_GET["gender"];
if ($age < 12) {
    if($talig == "oui"){
        if($gender == "homme") echo "Hello boy!";
        else echo "Hello Girl!";  
    }
    else {
        if($gender == "homme") echo "Salut petit!";
        else echo "Salut petite!"; 
    }
} elseif ($age >= 12 && $age <= 18) {
    if($talig == "oui"){
        if($gender == "homme") echo "Hello Teenage boy!";
        else echo "Hello Teenage girl!";  
    }
    else {
        if($gender == "homme") echo "Salut l'adolescent!";
        else echo "Salut l'adolescente!"; 
    }
} elseif ($age > 18 && $age <= 115) {
    if($talig == "oui"){
        if($gender == "homme") echo "Hello Sir!";
        else echo "Hello Lady!";  
    }
    else {
        if($gender == "homme") echo "Salut l'adulte!";
        else echo "Salut l'adulte!"; 
    }
} elseif ($age > 115) {
    if($talig == "oui"){
        if($gender == "homme") echo "Wow! Still alive, old man?";
        else echo "Wow! Still alive, old lady?";  
    }
    else {
        if($gender == "homme") echo "Wow! Toujours vivant?";
        else echo "Wow! Toujours vivante?"; 
    }
}
?>


<html>
<head><title></title></head>
<body>
<form action="" method="get">
<input type="number" name="age">
<input type="radio" name="gender" value="homme">
homme
<input type="radio" name="gender" value="femme">
femme
<br/>
Spreek-je engels?
<br/>
<input type="radio" name="talig" value="oui">
oui
<input type="radio" name="talig" value="non">
non
</form>
</body>
</html>