<?php
$moi = [
	'naissance'	=> 1995 , 
	'prenom' 		=> 'Gaëtan' ,
	'nom' 	  		=> 'Ribonnet' ,
    'hobbies' 	=> array('Procrastiner', 'Dormir', 'Cuisiner'),
    'frere' => $frere,
];
$frere = array(
	'naissance'	=> 1992 , 
	'prenom' 		=> 'Nicolas' ,
	'nom' 	  		=> 'Ribonnet' ,
	'hobbies' 	=> array('Programmer', 'Sport', 'Jouer')
);

echo '<pre>';
print_r($moi);
echo '</pre>'
?>