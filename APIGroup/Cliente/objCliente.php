<?php
class Cliente 
{
	public $idcliente;
	public $nome;
	public $telefone;

	function __construct(
		$idcliente
		,$nome
		,$telefone
		
	)
	{
		$this->idcliente = $idcliente;
		$this->nome = $nome;
		$this->telefone = $telefone;
		
		
	}
}
?>