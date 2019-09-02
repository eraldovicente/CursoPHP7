<?php

$qualASuaIdade = 15;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
	echo "criança";
} else if ($qualASuaIdade < $idadeMaior) {
	echo "adolecente";
} else if ($qualASuaIdade < $idadeMaior) {
	echo "adulto";
} else {
	echo "idoso";
}

echo ($qualASuaIdade < $idadeMaior) ? "Menor idade" : "Maior idade";
?>