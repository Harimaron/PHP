<?php
echo strrev("bonjour tout le monde comment ca va");
echo "</br>";
$chanson = "Bavas a ca ma sarpata a parda,</br>Ma la macha ma la macha</br>Bavas a ca ma sarpata a parda</br>Ma la macha a ravana.</br>";
echo $chanson;
$substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
foreach($substitutions as $xd){
    echo str_replace('a', $xd, $chanson);
}
?>
