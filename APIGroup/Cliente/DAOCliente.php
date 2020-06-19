<?php
	include_once __DIR__.'\objcliente.php';
	include_once __DIR__.'\..\..\PDOFactory.php';

	class clienteDAO
	{
		public function insert(cliente $cliente)
		{
			$qInsert = "INSERT INTO 
			cliente(
				nome
				,telefone
			)
			VALUES (
				:nome
				,:telefone

			)";

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qInsert);

			$comando->bindParam(":nome",$cliente->nome);
			$comando->bindParam(":telefone",$cliente->telefone);


			$comando->execute();
			return $cliente;
		}

		public function delete($idcliente)
		{
			$qDelete = "DELETE from 
			cliente 
			WHERE idcliente=:idcliente";            
			$cliente = $this->SearchByidcliente($idcliente);

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qDelete);

			$comando->bindParam(":idcliente",$idcliente);

			$comando->execute();
			return $cliente;
		}

		public function update(cliente $cliente)
		{
			$qUpdate = "UPDATE 
			cliente 
			SET 
				nome=:nome
				,telefone=:telefone

				WHERE idcliente=:idcliente";

			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($qUpdate);

			$comando->bindParam(":idcliente",$cliente->idcliente);
			$comando->bindParam(":nome",$cliente->nome);
			$comando->bindParam(":telefone",$cliente->telefone);


			$comando->execute();    
			return($cliente);    
		}

		public function list()
		{
			$query = 'SELECT * FROM cliente';
			
			$pdo = PDOFactory::getConexao();
			$comando = $pdo->prepare($query);
			$comando->execute();
			$clientes=array();	
			while($row = $comando->fetch(PDO::FETCH_OBJ)){

				$arrcliente[] = new cliente(
					$row->idcliente
					,$row->nome
					,$row->telefone

				);
			}
			return $arrcliente;
		}

		public function SearchByidcliente($idcliente)
		{

			 $query = 'SELECT * FROM cliente WHERE idcliente=:idcliente';

			$pdo = PDOFactory::getConexao(); 
			$comando = $pdo->prepare($query);
			
			$comando->bindParam (':idcliente', $idcliente);
			
			$comando->execute();
			$result = $comando->fetch(PDO::FETCH_OBJ);
			
			return new cliente(
				$result->idcliente
				,$result->nome
				,$result->telefone

			);           
		}
	}
