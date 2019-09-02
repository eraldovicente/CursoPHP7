<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("UPDATE tb_usuarios deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "jose";
	$password = "12345asdf";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alterado OK!";

?>