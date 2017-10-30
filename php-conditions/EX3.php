<?php
$age = $_GET["age"];
$gender = $_GET["gender"];
if ($age < 12) {
    if($gender == "homme") echo "Salut petit!";
    else echo "Salut petite!";  
} elseif ($age >= 12 && $age <= 18) {
    if($gender == "homme") echo "Salut l'adolescent!";
    else echo "Salut l'adolescente!";
} elseif ($age > 18 && $age <= 115) {
    if($gender == "homme") echo "Salut l'adulte!";
    else echo "Salut l'adulte!";
} elseif ($age > 115) {
    if($gender == "homme") echo "Wow! T'es toujours vivant?!";
    else echo "Wow! T'es toujours vivante?!";
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
</form>
</body>
</html>