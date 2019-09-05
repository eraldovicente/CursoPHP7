<?php

$password = isset( $_GET['password'] ) ? $_GET['password'] : '';

$salt = '@34a$a)uI(8e&ad%Ssdf66%';

//if ($password == '12345678')
if (md5($salt . $password) == 'ee27bbdc50f3316e116636f6ac2e1311')
{
	echo 'Senha correta';
} else {

	echo "Senha incorreta";
}

?>