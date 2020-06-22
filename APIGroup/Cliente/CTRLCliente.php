<?php

include_once(__DIR__.'\objcliente.php');
include_once(__DIR__.'\DAOcliente.php');

class clienteController {

	public function list($request, $response, $args){
		$dao= new clienteDAO;    
		$cliente = $dao->list();
		return $response->withJSON($cliente);
	}

	public function insert($request, $response, $args) {
		$data = $request->getParsedBody();
		$cliente = new cliente(
			0,
			$data['nome'],
			$data['telefone']
		);

		$dao = new clienteDAO;
		$cliente = $dao->insert($cliente);

		return $response->withJson($cliente,201);

	}

	public function SearchByidcliente($request, $response, $args) {
		$idcliente = $args['idcliente'];
	
		$dao= new clienteDAO;    
		$cliente = $dao->SearchByidcliente($idcliente);
		
		return $response->withJson($cliente);
	}
	
	public function update($request, $response, $args) {
		$idcliente = $args['idcliente'];
		$data = $request->getParsedBody();
		$cliente = new cliente(
			$data['idcliente']
			,$data['nome']
			,$data['telefone']

		);

		$dao = new clienteDAO;
		$cliente = $dao->update($cliente);

		return $response->withJson($cliente);
	}
	
	public function delete($request, $response, $args) {
		$idcliente = $args['idcliente'];

		$dao = new clienteDAO;
		$cliente = $dao->delete($idcliente);

		return $response->withJson($cliente);
	}
}
?>
