<?php
require_once "exemplo-03.php";
session_unset($_SESSION["nome"]);
echo $_SESSION["nome"];
?>