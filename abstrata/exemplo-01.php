<?php

interface Veiculo 
{

	public function acelerar($acelerar);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
	public function acelerar($acelerar)
	{
		echo "O veículo acelerou até " . $acelerar . "<br/>";
	}

	public function frenar($velocidade)
	{
		echo "O veículo frenou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha " . $marcha;
	}
}

class DelRey extends Automovel
{
	public function empurrar()
	{

	}
}


$carro = new DelRey();
$carro->acelerar(200);








