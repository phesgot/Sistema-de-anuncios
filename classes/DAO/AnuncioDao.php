			
<?php
	
	require_once("../classes/Conexao.php");
	



	class AnuncioDao { 
		
			 function __construct() {
				$this->con = new Conexao();
				$this->pdo = $this->con->Connect();
			}
			
			public function cadastrarAnuncio(cadastroAnun $entAnuncio){
				try{
					$stmt = $this->pdo->prepare("insert INTO anuncio"
										. "(imagen, empresa, cidade, uf, bairro, bairro1, bairro2, bairro3, endereco, horarioDeFuncionamento, quemSomos, informacoesAdicionais, telefone, email, site, categoria, categoria1, categoria2, categoria3, url, idUsuario)"
										. "VALUES "
										. "(:imagen, :empresa, :cidade, :uf, :bairro, :bairro1, :bairro2, :bairro3, :endereco, :horarioDeFuncionamento, :quemSomos, :informacoesAdicionais, :telefone, :email, :site, :categoria, :categoria1, :categoria2, :categoria3, :url, :idUsuario)");
															
					$parametro = array(
						":imagen" => $entAnuncio->getImagen(),
						":empresa" => $entAnuncio->getEmpresa(),
						":cidade" => $entAnuncio->getCidade(),
						":uf" => $entAnuncio->getUf(),
						":bairro" => $entAnuncio->getBairro(),
						":bairro1" => $entAnuncio->getBairro1(),
						":bairro2" => $entAnuncio->getBairro2(),
						":bairro3" => $entAnuncio->getBairro3(),
						":endereco" => $entAnuncio->getEndereco(),
						":horarioDeFuncionamento" => $entAnuncio->getHorarioDeFuncionamento(),
						":quemSomos" => $entAnuncio ->getQuemSomos(),
						":informacoesAdicionais" => $entAnuncio ->getInformacoesAdicionais(),
						":telefone" => $entAnuncio ->getTelefone(),
						":email" => $entAnuncio ->getEmail(),
						":site" => $entAnuncio ->getSite(),
						":categoria" => $entAnuncio->getCategoria(),
						":categoria1" => $entAnuncio->getCategoria1(),
						":categoria2" => $entAnuncio->getCategoria2(),
						":categoria3" => $entAnuncio->getCategoria3(),
						":url" => $entAnuncio->getUrl(),
						":idUsuario" => $entAnuncio ->getIdUsuario()
					);
				
					return $stmt->execute($parametro);	
				
				} catch (PDOException $ex){
					echo "ERRO 01: {$ex->getMessage()}";
				}
			}
			
			public function existeAnuncio ($idUsuario){

					$query = $this->pdo->prepare("SELECT * FROM anuncio WHERE idUsuario = '$idUsuario'");
	
					$query->execute();
	
					
					if ($query->rowCount() >= 1){
						return true;
					}else{
						return false;
					}

			}
			
			
			public function retornarAnuncio($idUsuario) {
				try {
					
					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, cidade, uf, bairro, bairro1, bairro2, bairro3, endereco, 
						horarioDeFuncionamento, quemSomos, informacoesAdicionais, telefone, email, site, categoria, categoria1, 
						categoria2, categoria3, url FROM anuncio WHERE idUsuario = '$idUsuario'");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}
			
					public function alterarAnuncio($empresa, $cidade, $uf, $bairro, $bairro1, $bairro2, $bairro3, $endereco, 
						$horFuncion, $qSomos, $informacoesAdicionais, $telefone, $email, $site, $categoria, $categoria1, $categoria2, $categoria3, $url, $idUsuario ){
						
					$stmt = $this->pdo->query("UPDATE anuncio SET  empresa = '$empresa', cidade = '$cidade', uf = '$uf', bairro = '$bairro',
												bairro1 = '$bairro1', bairro2 = '$bairro2', bairro3 = '$bairro3', endereco = '$endereco', 
												horarioDeFuncionamento = '$horFuncion', quemSomos = '$qSomos', informacoesAdicionais = '$informacoesAdicionais',
												telefone = '$telefone', email = '$email', site = '$site', categoria = '$categoria', categoria1 = '$categoria1',
												categoria2 = '$categoria2', categoria3 = '$categoria3', url = '$url' WHERE idUsuario = '$idUsuario'");
					$stmt->execute();						
							
					}
					
					public function alterarImagem($imagem, $idUsuario){
						
					$stmt = $this->pdo->query("UPDATE anuncio SET imagen = '$imagem' WHERE idUsuario = '$idUsuario'");
					$stmt->execute();						
							
					}
					
			public function adicionarGaleria (addGaleria $addGaleria){
				try{
					$stmt = $this->pdo->prepare("insert INTO galeria"
										. "(imagem, idAnunciofk, idUsuariofk)"
										. "VALUES "
										. "(:imagem, :idAnunciofk, :idUsuariofk)");
															
					$parametro = array(
						":imagem" => $addGaleria->getGaleria(),
						":idAnunciofk" => $addGaleria->getIdAnunciofk(),
						":idUsuariofk" => $addGaleria->getIdUsuariofk()
					);
				
					return $stmt->execute($parametro);	
				
				} catch (PDOException $ex){
					echo "ERRO: Para fazer upLoad de fotos é preciso cadastar anuncio!";
				}
			}
			
			public function existeGaleria ($idUsuario){

					$query = $this->pdo->prepare("SELECT * FROM galeria WHERE idUsuariofk = '$idUsuario'");
	
					$query->execute();					
					
					if ($query->rowCount() >= 10){
						return true;
					}else{
						return false;
					}

			}
			
			public function retornarGaleria($idAnuncio) {
				try {
					
					$stmt = $this->pdo->prepare("SELECT idGaleria, imagem FROM galeria WHERE idAnunciofk = '$idAnuncio'");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}
			
			public function ecluirGaleria($idCadastro){
						
				$stmt = $this->pdo->query("DELETE FROM galeria WHERE idUsuariofk = '$idCadastro'");
				$stmt->execute();						
							
			}
			
			public function excluirFoto($idGaleria){
						
				$stmt = $this->pdo->query("DELETE FROM galeria WHERE idGaleria = '$idGaleria'");
				$stmt->execute();						
							
			}
			
			public function ecluirAnuncio($idCadastro){
						
				$stmt = $this->pdo->query(" DELETE FROM anuncio WHERE idUsuario = '$idCadastro'");
				$stmt->execute();						
							
			}
			
			public function excluirFotoVerifica($idGaleria) {
				try {
					
					$stmt = $this->pdo->prepare("SELECT idUsuariofk FROM galeria WHERE idGaleria = '$idGaleria'");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}

			
	}
?>