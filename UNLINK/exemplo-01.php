<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//apaga o arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";
?>