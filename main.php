<?php

$valor = intval(fgets(STDIN));

echo $valor . "\n";

$cedulas = array(100, 50, 20, 10, 5, 2, 1);

foreach ($cedulas as $cedula) {
    $quantidade = intdiv($valor, $cedula);
    echo $quantidade . " nota(s) de R$ " . number_format($cedula, 2, ",", ".") . "\n";
    $valor = $valor % $cedula;
}

?>
