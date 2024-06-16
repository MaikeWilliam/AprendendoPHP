<?php 

//SOMA DE INTEIROS

// function somarElementos($a, $b){
//     return  $a + $b;
// }

// echo "A soma de a e b eh: " . somarElementos(5, 7);

//CÁLCULO DE PORCENTAGEM

// function calculaPorcetagem($parcial, $total){
//     return ($parcial / $total)*100;
// }

// $parcial = 150;
// $total = 500;

// echo "valor parcial eh: $parcial e o valor total eh: $total". PHP_EOL;
// echo "A porcentagem de $parcial em realacao a $total eh: " . calculaPorcetagem($parcial, $total) . "%";

//CALCULANDO PERCENTUAL DE DESCONTO

// function calculaDesconto($precoOriginal, $precoDesconto){
//     return ($precoOriginal - $precoDesconto);
// }

// $precoOriginal = 100;
// $precoDesconto = 15;

// echo "O percentual de desconto aplicaado eh: " . calculaDesconto($precoOriginal, $precoDesconto) . "%";

//CÁLCULO CONDICIONAL

function calculoCondicional($numero1, $numero2){
    if ($numero2 == 0){
        echo "Impossivel realaizar a operacao, pois o segundo número é zero";
    }else{
        if ($numero1 > $numero2){
            $resultado = $numero1 - $numero2;
            echo "A diferença entre: $numero1 e $numero2 eh: $resultado";
        }
        if ($numero1 < $numero2){
            $resultado = $numero1 + $numero2;
            echo "A soma entre: $numero1 e $numero2 eh: $resultado";
        }
        if ($numero1 == $numero2){
            $resultado = $numero1 * $numero2;
            echo "O produto entre: $numero1 e $numero2 eh: $resultado";
        }
    }
}

calculoCondicional(8,4);



