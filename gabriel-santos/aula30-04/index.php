<?php

require_once('./class/aluno.php');

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
    $r = random_int(0, 255);
    $g = random_int(0, 255);
    $b = random_int(0, 255);
    echo "<p style=\"background-color:rgb($r,$g,$b);\">$teste1</p>";
};

$aluno1 = new Aluno('Gabriel', 17, "Rua Oscar Alho, 234", "Guanambi", "BA", "000.000.000-01");
$aluno2 = new Aluno('Bruno', 17, "Rua Oscar Alho, 600", "Montalvânia", "MG", "000.000.000-02");

$aluno1 -> getInfo();
echo "<br>";
$aluno2 -> getInfo();
