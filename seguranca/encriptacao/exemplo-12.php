<?php 

$password = $argv[1];

if ( md5($password ) == '25d55ad283aa400af464c76d713c07ad' )
{
	echo "Correta";
} else{

	echo "Incorreta";
}

//12345678

?>