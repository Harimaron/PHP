<?php
$child = $_GET["child"];
$teacher = $_GET["teacher"];
    if ($age < 12) {
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
<input type="radio" name="child" value="oui">
Maladie
</br>
<input type="radio" name="child" value="non">
Décès de l'animal de compagnie
</br>
<input type="radio" name="child" value="non">
Activité extra-scolaire importante
</br>
<input type="radio" name="child" value="non">
Autre
</form>
</body>
</html> 