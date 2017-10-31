<?php
$note = $_GET["note"];
if ($note == 1 || $note == 2 || $note == 3) {
    echo "Ce travail est nul.";
} elseif ($note == 6 || $note == 7 || $note == 8 || $note == 9) {
    echo "Ce travail n'est pas terrible.";
} elseif ($note == 10) {
    echo "Tout juste!";
} elseif ($note == 11 || $note == 12 || $note == 13 || $note == 14) {
    echo "C'est pas mal.";
} elseif ($note == 15 || $note == 16 || $note == 17 || $note == 18) {
    echo "Bravo!";
} elseif ($note == 19 || $note == 20) {
    echo "Police! Arrêtez ce tricheur!";
}

?>

<html>
<head><title></title></head>
<body>
<form action="" method="get">Combien êtes-vous noté ?
<br/>
<input type="number" name="note">
</form>
</body>
</html>