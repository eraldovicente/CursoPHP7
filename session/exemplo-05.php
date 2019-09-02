<?php
require_once "exemplo-03.php";

session_regenerate_id();
echo session_id();
echo '<br>';

var_dump($_SESSION);
?>