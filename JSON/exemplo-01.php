<?php

$pessoas = array();
array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 20,
));

array_push($pessoas, array(
	'nome' => "João",
	'idade' => 25,
));

echo json_encode($pessoas);
?>

