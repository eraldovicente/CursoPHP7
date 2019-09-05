<?php
session_start();

// $_SESSION['user'] = $_GET['name'];
// header('Location: sessions.php');

$name = isset($_GET['name']) ? $_GET['name'] : '';

if ( gettype($name) == 'array')
{
	die('Tentativa de injetar código');
}

$_SESSION['user'] = [ 'name' => $name];
header('Location: sessions.php');