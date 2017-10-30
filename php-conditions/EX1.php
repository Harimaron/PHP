
<?php
$now = intval((new DateTime())->format('H'));
if($now >= 5 && $now <= 9 ){
    echo "Bonjour!";
}
elseif($now > 9 && $now <= 12){
    echo "Bonne journée!";
}
elseif($now > 12 && $now <= 16){
    echo "Bon après-midi!";
}
elseif($now > 16 && $now <= 21){
    echo "Bonne soirée!";
}
elseif($now > 21 && $now < 5){
    echo "Bonne nuit!";
}
?>

