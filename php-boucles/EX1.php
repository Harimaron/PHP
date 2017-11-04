<?php
$pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

foreach ($pronoms_personnels as $n){

if($n == 'Je' ){
    echo "Je code.";
}
elseif($n == 'Tu' ){
    echo "Tu codes.";
}
elseif($n == 'Il' ){
    echo "Il code.";
}
elseif($n == 'Nous' ){
    echo "Nous codons.";
}
elseif($n == 'Vous' ){
    echo "Vous codez.";
}
elseif($n == 'Elles/Ils' ){
    echo "Ils codent.";
}
}

?>

