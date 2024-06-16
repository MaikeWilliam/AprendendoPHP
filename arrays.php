<?php 

$linguagens = ["PHP", "C#", "Java"];

$linguagens[] = "Python";

// echo $linguagens[3];

//Versão mais antiga de sintaxe para array

echo "<br>";

$linguagens2 = array("PHP", "C#","Java");

// echo $linguagens[1];

//Valor da chave de cada item do array

// $curso = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curos de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true
];

$curso["pre-requisito"] = "logica de programacao";

// var_dump($curso);

$numeros = [
    [1,2,3,4],
    [5,6,7,8,9],
    [10,[11,12,13]]
];

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
    ]
];

$cursos["php"]["pre-requisito"] = "logica de programacao";

echo $cursos["php"]["pre-requisito"];

