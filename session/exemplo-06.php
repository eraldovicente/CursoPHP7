<?php
require 'exemplo-03.php';

echo session_save_path();
echo '<br>';
var_dump(session_status());
?>