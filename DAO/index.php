<?php

require_once("config.php");


 // $sql = new Sql();
 // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 // echo json_encode($usuarios);


//Carrega um usuário 
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("ro");
// echo json_encode($search);

// echo "<br/>";

//Carrega um usuário usando login e senha
// $usuario = new Usuario();
// $usuario->login("root", "abracadabra");

// echo $usuario;

// Criando um novo usuario
// $aluno = new Usuario("aluno", "@lun0");

// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@luno");

// $aluno->insert();

// echo $aluno;

// Alterar um usuario
// $usuario = new Usuario();

// $usuario->loadById(8);
// $usuario->update("professor", "1233432sdasd");

// echo $usuario;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
?>