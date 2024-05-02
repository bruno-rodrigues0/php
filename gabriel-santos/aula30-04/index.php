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
    $r = random_int(0, 255);
    $g = random_int(0, 255);
    $b = random_int(0, 255);
    echo "<p style=\"background-color:rgb($r,$g,$b);\">$teste1</p>";
};

$aluno1["nome"] = "Gabriel";
$aluno1["idade"] = 17;
$aluno1["endereço"] = "Um Lugar";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "001";

$aluno2["nome"] = "Bruno";
$aluno2["idade"] = 17;
$aluno2["endereço"] = "Um Lugar";
$aluno2["cidade"] = "Montalvânia";
$aluno2["estado"] = "Minas Gerais";
$aluno2["cpf"] = "002";

$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "Um Lugar";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "003";

echo "Aluno 1: <br>";
foreach ($aluno1 as $x) {
    echo  key($aluno1) . ": $x  <br>";
    next($aluno1);
}
echo "<br>Aluno 2: <br>";
foreach ($aluno2 as $x) {
    echo  key($aluno2) . ": $x  <br>";
    next($aluno2);
}
echo "<br>Professor: <br>";
foreach ($professor as $x) {
    echo  key($professor) . ": $x  <br>";
    next($professor);
}