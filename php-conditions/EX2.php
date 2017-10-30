<?php
$age = $_GET["age"];
if ($age < 12) {
    echo "Salut petit!";
} elseif ($age >= 12 && $age <= 18) {
    echo "Salut l'ado!";
} elseif ($age > 18 && $age <= 115) {
    echo "Salut l'adulte!";
} elseif ($age > 115) {
    echo "Wow! Toujours vivant?";
}
?>

<html>
<head><title></title></head>
<body>
<form action="" method="get">
<input type="number" name="age">
</form>
</body>
</html>