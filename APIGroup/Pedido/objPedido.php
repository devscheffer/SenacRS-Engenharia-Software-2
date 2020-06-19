<?php
class Pedido 
{
    public $idpedido;
    public $idcliente;
    public $dataentrega;
	public $valorservico;
    public $valorsinal;
    public $altura;
    public $largura;
    public $frase;
    public $idcorplaca;
    public $idcorfrase;
	

    function __construct(
		 $idpedido
		,$idcliente
		,$dataentrega
		,$valorservico
		,$valorsinal
		,$altura
		,$largura
		,$frase
		,$idcorplaca
		,$idcorfrase
	)
    {
        $this->idpedido = $idpedido;
        $this->idcliente = $idcliente;
        $this->dataentrega = $dataentrega;
		$this->valorservico = $valorservico;
        $this->valorsinal = $valorsinal;
        $this->altura = $altura;
        $this->largura = $largura;
        $this->frase = $frase;
        $this->idcorplaca = $idcorplaca;
        $this->idcorfrase = $idcorfrase;
		
    }
}
?>