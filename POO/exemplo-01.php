<?php 

class Pessoa {

	public $nome; //atributo

	public function falar () { // Método
		return "O meu nome é: " . $this->nome;
	} // Fim do método
}

$glaucio = new Pessoa();

$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>