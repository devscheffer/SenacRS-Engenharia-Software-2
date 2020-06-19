<?php

include_once(__DIR__.'\objpedido.php');
include_once(__DIR__.'\DAOpedido.php');

class PedidoController {

	public function list($request, $response, $args){
		$dao= new PedidoDAO;    
		$pedido = $dao->list();
		return $response->withJSON($pedido);
	}

	public function insert($request, $response, $args) {
		$data = $request->getParsedBody();
		$pedido = new pedido(
			$data['idpedido']
			,$data['idcliente']
			,$data['dataentrega']
			,$data['valorservico']
			,$data['valorsinal']
			,$data['altura']
			,$data['largura']
			,$data['frase']
			,$data['idcorplaca']
			,$data['idcorfrase']
		);

		$dao = new PedidoDAO;
		$pedido = $dao->insert($pedido);

		return $response->withJson($pedido,201);

	}

	public function SearchByidpedido($request, $response, $args) {
		$idpedido = $args['idpedido'];
	
		$dao= new PedidoDAO;    
		$pedido = $dao->SearchByidpedido($idpedido);
		
		return $response->withJson($pedido);
	}
	
	public function update($request, $response, $args) {
		$idpedido = $args['idpedido'];
		$data = $request->getParsedBody();
		$pedido = new pedido(
			$data['idpedido']
			,$data['idcliente']
			,$data['dataentrega']
			,$data['valorservico']
			,$data['valorsinal']
			,$data['altura']
			,$data['largura']
			,$data['frase']
			,$data['idcorplaca']
			,$data['idcorfrase']
		);

		$dao = new PedidoDAO;
		$pedido = $dao->update($pedido);

		return $response->withJson($pedido);
	}
	
	public function delete($request, $response, $args) {
		$idpedido = $args['idpedido'];

		$dao = new PedidoDAO;
		$pedido = $dao->delete($idpedido);

		return $response->withJson($pedido);
	}
}
?>
