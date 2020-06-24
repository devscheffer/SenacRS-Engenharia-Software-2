<?php
	include_once __DIR__.'\objPedido.php';
	include_once __DIR__.'\..\..\PDOFactory.php';

	class PedidoDAO
	{
		public function insert(pedido $pedido)
		{
			$qInsert = "INSERT INTO 
			pedido(
				idcliente
				,dataentrega
				,valorservico
				,valorsinal
				,altura
				,largura
				,frase
				,idcorplaca
				,idcorfrase
			)
			VALUES (
				:idcliente
				,:dataentrega
				,:valorservico
				,:valorsinal
				,:altura
				,:largura
				,:frase
				,:idcorplaca
				,:idcorfrase
			)";

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qInsert);

			$comando->bindParam(":idcliente",$pedido->idcliente);
			$comando->bindParam(":dataentrega",$pedido->dataentrega);
			$comando->bindParam(":valorservico",$pedido->valorservico);
			$comando->bindParam(":valorsinal",$pedido->valorsinal);
			$comando->bindParam(":altura",$pedido->altura);
			$comando->bindParam(":largura",$pedido->largura);
			$comando->bindParam(":frase",$pedido->frase);
			$comando->bindParam(":idcorplaca",$pedido->idcorplaca);
			$comando->bindParam(":idcorfrase",$pedido->idcorfrase);


			$comando->execute();
			$pedido->idpedido = $pdo->lastInsertId();
			return $pedido;
		}

		public function delete($idpedido)
		{
			$qDelete = "DELETE from 
			pedido 
			WHERE idpedido=:idpedido";            
			$pedido = $this->SearchByidpedido($idpedido);

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qDelete);

			$comando->bindParam(":idpedido",$idpedido);

			$comando->execute();
			return $pedido;
		}

		public function update(pedido $pedido)
		{
			$qUpdate = "UPDATE 
			pedido 
			SET 
				idcliente=:idcliente
				,dataentrega=:dataentrega
				,valorservico=:valorservico
				,valorsinal=:valorsinal
				,altura=:altura
				,largura=:largura
				,frase=:frase
				,idcorplaca=:idcorplaca
				,idcorfrase=:idcorfrase

				WHERE idpedido=:idpedido";

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qUpdate);

			$comando->bindParam(":idpedido",$pedido->idpedido);
			$comando->bindParam(":idcliente",$pedido->idcliente);
			$comando->bindParam(":dataentrega",$pedido->dataentrega);
			$comando->bindParam(":valorservico",$pedido->valorservico);
			$comando->bindParam(":valorsinal",$pedido->valorsinal);
			$comando->bindParam(":altura",$pedido->altura);
			$comando->bindParam(":largura",$pedido->largura);
			$comando->bindParam(":frase",$pedido->frase);
			$comando->bindParam(":idcorplaca",$pedido->idcorplaca);
			$comando->bindParam(":idcorfrase",$pedido->idcorfrase);


			$comando->execute();    
			return($pedido);    
		}

		public function list()
		{
			$query = 'SELECT * FROM pedido';
			
			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($query);
			$comando->execute();
			$pedidos=array();	
			$arrpedido = [];
			while($row = $comando->fetch(PDO::FETCH_OBJ)){

				$arrpedido[] = new pedido(
					$row->idpedido
					,$row->idcliente
					,$row->dataentrega
					,$row->valorservico
					,$row->valorsinal
					,$row->altura
					,$row->largura
					,$row->frase
					,$row->idcorplaca
					,$row->idcorfrase
				);
			}
			return $arrpedido;
		}

		public function SearchByidpedido($idpedido)
		{

			 $query = 'SELECT * FROM pedido WHERE idpedido=:idpedido';

			$pdo = PDOFactory::getConexao(); 
			$comando = $pdo->prepare($query);
			
			$comando->bindParam (':idpedido', $idpedido);
			
			$comando->execute();
			$result = $comando->fetch(PDO::FETCH_OBJ);
			
			return new pedido(
				$result->idpedido
				,$result->idcliente
				,$result->dataentrega
				,$result->valorservico
				,$result->valorsinal
				,$result->altura
				,$result->largura
				,$result->frase
				,$result->idcorplaca
				,$result->idcorfrase
			);           
		}
		
		public function ordersByDate($date){
			$query = "SELECT * FROM pedido WHERE dataentrega = :dataentrega";
			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($query);
			$comando->bindParam("dataentrega", $date);
			$comando->execute();
			$result = [];
			while ($row = $comando->fetch(PDO::FETCH_OBJ)){
				$result[] = new Pedido(
					$row->idpedido
					,$row->idcliente
					,$row->dataentrega
					,$row->valorservico
					,$row->valorsinal
					,$row->altura
					,$row->largura
					,$row->frase
					,$row->idcorplaca
					,$row->idcorfrase
				);
			}
			return $result;
		}
	}
