<?php

//Use PDO ou classe MySQLi e faça o bind dos parâmetros

$id = (isset($_GET["id"]))?$_GET["id"]:1;


//addslashes
if (!is_numeric($id) || strlen($id) > 5)
{
    exit("Pegamos você");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) 
{
    //var_dump($resultado);
    echo $resultado->deslogin . "<br>";
}

// ?id=1 OR 1 = 1 --
?>