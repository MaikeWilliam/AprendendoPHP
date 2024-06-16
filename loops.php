<?php 

//Loop WHILE

// $i = 1;

// while ($i <= 10){
//     echo "executou {$i} <br>";

//     $i = $i + 1;
// }

// //Loop FOR

// for ($i = 0; $i < 20; $i=$i+2){
//     echo "executou {$i} <br>";
// }

// $numeros = [2,3,5,7,9,10];

// for ($i=0; $i < count($numeros); $i=$i+1) { 
//     echo $numeros[$i] . "<br>";
// }

//Loop FOREACH

// $numeros = [2,3,5,7,9,10];

// foreach ($numeros as $chave => $valor){
//     echo "chave: $chave - valor: $valor <br>";
// }

// foreach ($numeros as $valor) {
//     echo "valor: {$valor} <br>";
// }

$cursos = [
    "php" => [
        "nome_curso" => "Cursos de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
    ],
    "Java" => [
        "nome_curso" => "Cursos de Java Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => false
    ],
    "C#" => [
        "nome_curso" => "Cursos de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true
    ],
    "JavaScript" => [
        "nome_curso" => "Cursos de JavaScript Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => false
    ]
];

foreach($cursos as $curso){

    if ($curso['status'] == false){
        continue; //break;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versao da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horária: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br><br>";
}

