<?php
$counter = 0;
$target = 120;
while ($counter < $target) {
    $counter = $counter + 1;
    echo $counter;
}
echo "</br>";
for ($counter = 1; $counter <= 120; $counter = $counter + 1) {
    echo $counter;
}
echo "</br>";
$classMates = array("Omar", "Mutwakil", "Weichuan");
foreach ($classMates as $classMate) {
    echo $classMate;
}
echo "</br>";
$countries = array("Belgique", "France", "Italie", "Allemagne", "Hollande", "Suisse", "Espagne", "Chypre", "Estonie");
$countriesISO = array('BE' => "Belgique", 'FR' => "France", 'IT' => "Italie", 'DE' => "Allemagne", 'NL' => "Hollande", 'CH' => "Suisse", 'ES' => "Espagne", 'CYP' => "Chypre", 'EST' => "Estonie");
?>
<html><head>
</head>
<body>
<select>
    <?php
    foreach ($countries as $country) {
        echo '<option value="'.$country.'">'.$country.'</option>';
    }
    ?>
</select> 
<select>
    <?php
    foreach ($countriesISO as $ISO => $country) {
        echo '<option value="'.$ISO.'">'.$country.'</option>';
    }
    ?>
</select> 
</body>
</html>
