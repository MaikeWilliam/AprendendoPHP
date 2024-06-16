<?php 

// error_reporting(E_ALL);

//Notice
//$valor1 = 10;
//echo $valor;

//Warning
// $numero = NAO_EXISTE;

//Fatal
// function somar($valor1, $valor2){
//     return $valor1+$valor2;
// }

// function somar($valor1, $valor2){
//     return $valor1+$valor2;
// }

//Parse
// echo "asdasas"

// echo "Chegou ao fim do programa";

//Tratando erros

error_reporting(E_ALL);

$divisor = 0;

try {
    if($divisor === 0){
        throw new Exception("Não é possível dividir por 0, defina um valor maior que 0", 1);
    }
    $valor = 100 / $divisor;
    echo $valor;
} catch (Exception $e) {
    echo $e->getMessage();
}
