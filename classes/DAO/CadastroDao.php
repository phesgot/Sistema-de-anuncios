<?php

	require_once("../classes/Conexao.php");
	
	class CadastroDao {
		
		   function __construct() {
				$this->con = new Conexao();
				$this->pdo = $this->con->Connect();
			}
		
		public function cadastrarEmpresa(cadastro $entCadastro){
			try{
				$stmt = $this->pdo->prepare("insert INTO cadastro"
									. "(responsavel, cpf, empresa, cnpj, email, usuario, senha1, senha2, telefone1, telefone2, cep, uf, cidade, bairro, endereco)"
									. "VALUES "
									. "(:responsavel, :cpf, :empresa, :cnpj, :email, :usuario, :senha1, :senha2, :telefone1, :telefone2, :cep, :uf, :cidade, :bairro, :endereco)");
														
				$param = array(
					":responsavel" => $entCadastro->getResponsavel(),
					":cpf" => $entCadastro->getCpf(),
					":empresa" => $entCadastro->getEmpresa(),
					":cnpj" => $entCadastro->getCnpj(),
					":email" => $entCadastro->getEmail(),
					":usuario" => $entCadastro->getUsuario(),
					":senha1" => $entCadastro->getSenha1(),
					":senha2" => $entCadastro->getSenha2(),
					":telefone1" => $entCadastro->getTelefone1(),
					":telefone2" => $entCadastro->getTelefone2(),
					":cep" => $entCadastro ->getCep(),
					":uf" => $entCadastro ->getUf(),
					":cidade" => $entCadastro ->getCidade(),
					":bairro" => $entCadastro ->getBairro(),
					":endereco" => $entCadastro ->getEndereco()
				);
            
				return $stmt->execute($param);	
			
			} catch (PDOException $ex){
				echo "ERRO 01: {$ex->getMessage()}";
			}
		}
		
		    public function consultarIdPorUsuario($usuario) {
				try {
					$stmt = $this->pdo->prepare("SELECT idCadastro FROM cadastro WHERE usuario = :usuario");

					$param = array(":usuario" => $usuario);

					$stmt->execute($param);

				if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['idCadasto'];
					} else {
						return "";
					}
				} catch (Exception $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}

			public function validarUsuario($usuario, $senha1) {
				try {
					$stmt = $this->pdo->prepare("SELECT usuario, senha1 FROM cadastro WHERE usuario = :usuario and senha1 = :senha1");
					$param = array(
						":usuario" => $usuario,
						"senha1" => md5($senha1)
					);

					$stmt->execute($param);

					if ($stmt->rowCount() > 0) {
						return true;
					} else {
						return false;
					}
				} catch (PDOException $ex) {
					echo "ERRO 03: {$ex->getMessage()}";
				}
			}

			public function retornarInformacoes($usuario) {
				try {

					$stmt = $this->pdo->prepare("SELECT idCadastro, empresa, email, usuario, senha1, responsavel FROM cadastro WHERE usuario = :usuario");

					$param = array(":usuario" => $usuario);

					$stmt->execute($param);
					
					return $stmt->fetch(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 04: {$ex->getMessage()}";
				}
			}
			
			public function existeCnpj ($cnpj){

					$query = $this->pdo->prepare("SELECT * FROM cadastro WHERE cnpj = '$cnpj'");
	
					$query->execute();					
					
					if ($query->rowCount() >= 1){
						return true;
					}else{
						return false;
					}

			}
			
			public function existeUsuario ($usuario){

					$query = $this->pdo->prepare("SELECT * FROM cadastro WHERE usuario = '$usuario'");
	
					$query->execute();					
					
					if ($query->rowCount() >= 1){
						return true;
					}else{
						return false;
					}

			}
			
			public function existeEmail ($email){

					$query = $this->pdo->prepare("SELECT * FROM cadastro WHERE email = '$email'");
	
					$query->execute();					
					
					if ($query->rowCount() >= 1){
						return true;
					}else{
						return false;
					}

			}
			
			public function retornarCadastro($idCadastro) {
				try {
					
					$stmt = $this->pdo->prepare("SELECT responsavel, empresa, email, senha1, telefone1, telefone2, cep, 
						uf, cidade, bairro, endereco FROM cadastro WHERE idCadastro = '$idCadastro'");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 05: {$ex->getMessage()}";
				}
			}
			
			public function alterarAnuncio($responsavel, $empresa, $email, $telefone1, $telefone2, $cep, 
											$uf, $cidade, $bairro, $endereco, $idCadastro ){
						
					$stmt = $this->pdo->query("UPDATE cadastro SET  responsavel = '$responsavel', empresa = '$empresa',
												email = '$email', telefone1 = '$telefone1', telefone2 = '$telefone2', cep = '$cep', 
												uf = '$uf', cidade = '$cidade', bairro = '$bairro',
												endereco = '$endereco' WHERE idCadastro = '$idCadastro'");
					$stmt->execute();						
							
					}

			public function alterarSenha($senha1, $senha2, $idCadastro ){
						
					$stmt = $this->pdo->query("UPDATE cadastro SET  senha1 = '$senha1', senha2 = '$senha2'
												WHERE idCadastro = '$idCadastro'");
					$stmt->execute();						
							
					}
					
			public function ecluirConta($idCadastro){
						
				$stmt = $this->pdo->query(" DELETE FROM cadastro WHERE idCadastro = '$idCadastro'");
				$stmt->execute();						
							
			}
			
			
			
	}

?>