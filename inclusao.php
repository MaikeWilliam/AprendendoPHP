<?php 

echo "Inicio do arquivo inclusao<br>";

include "variaveis.php";

echo "<br>estou mostrando a variavel nome no arquivo inclusao.php: $nome<br>";

include_once "funcoes.php";

echo "estou chamando a funcao somar no arquivo inclusao.php: " . somar(10,20);

echo "<br>Fim do arquivo inclusao";

//require e require_once "nome_do_arquivo", caso não tenha o arquivo ele para a execução
