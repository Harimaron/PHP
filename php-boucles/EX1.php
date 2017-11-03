<?php
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

foreach ($pronoms_personnels as $index => $n){
    echo $pronoms_personnels;

if($pronoms_personnels == 'Je' ){
    echo "Je code.";
}
elseif($pronoms_personnels == 'Tu' ){
    echo "Tu codes.";
}
elseif($pronoms_personnels == 'Il' ){
    echo "Il code.";
}
elseif($pronoms_personnels == 'Nous' ){
    echo "Nous codons.";
}
elseif($pronoms_personnels == 'Vous' ){
    echo "Vous codez.";
}
elseif($pronoms_personnels == 'Elles/Ils' ){
    echo "Ils codent.";
}
}

?>



<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

$phone_numbers["Eric"] = "415-874-7659";

print_r($phone_numbers);
?>