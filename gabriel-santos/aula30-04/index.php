<?php

$var = array("opa", 2, 3, 4);

foreach ($var as $teste) {

    echo "$teste <br>";
};
$var2 = array(0 => 5, 6 => 8, 9 => 15);

echo "<br>";

$var2[6] = "20";
echo "$var2[6]<br>";

$var2[1] = "salve";
print_r($var2);

foreach ($var2 as $teste1) {
    $rgb1 = random_int(0, 255);
    $rgb2 = random_int(0, 255);
    $rgb3 = random_int(0, 255);
    echo "<p style=\"background-color:rgb($rgb1,$rgb2,$rgb3);\">$teste1</p>";
};


$dados = array(
    "Fábio" => 30, "Um Lugar", "Gbi", "BA", 001,
    "Gabriel" => 17, "Um Lugar", "Gbi", "BA", 002
);

echo "<pre>";
var_dump($dados);
echo "</pre>";
