<?php
$json = '[{"nome":"Glaucio","idade":20},{"nome":"Jo\u00e3o","idade":25}]';
$data = json_decode($json, true);
var_dump($data);
?>