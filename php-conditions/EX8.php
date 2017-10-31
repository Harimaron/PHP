<?php
$age = $_GET["age"];
$gender = $_GET["gender"];
if ($age >= 21 && $age <= 40) {
    if($gender == "femme") echo "Bonjour, bienvenue parmi nous!";
    if($gender == "homme") echo "Désolé, vous ne remplissez pas les critères de sélection.";
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