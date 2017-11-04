<?php
echo ucfirst("gaëtan");
echo "</br>";
echo date('Y');
echo "</br>";
echo date('d-m-Y H:i:s');
echo "</br>";
echo sum(2, 5);
echo "</br>";
echo sumPlus("salut", 5);
echo "</br>";














function sumPlus($a, $b){
    if(gettype($a) != "integer" || gettype($b) != "integer" ){
        return "ce n'est pas un chiffre";
    }
    return $a + $b;

}
function sum($a, $b){
    return $a + $b;
    
}

?>

