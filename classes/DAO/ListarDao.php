			
<?php
	
	require_once("classes/Conexao.php");
	



	class ListarDao { 
		
			 function __construct() {
				$this->con = new Conexao();
				$this->pdo = $this->con->Connect();
			}
			
			
			public function retornarInformacoes() {
				try {

					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, endereco, telefone, quemSomos FROM anuncio order by rand()");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}
			
			public function viewAnuncio($idAnuncio) {
				try {
					
					$stmt = $this->pdo->prepare("SELECT imagen, empresa, cidade, uf, bairro, endereco, horarioDeFuncionamento, quemSomos, informacoesAdicionais, telefone, email, site, url FROM anuncio WHERE idAnuncio = :idAnuncio");
					
					$param = array( ":idAnuncio" => $idAnuncio);
					
					$stmt->execute($param);
					
					return $stmt->fetch(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
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
/***************************************************Retorno de informaçãoe ao filtro de pesquisa e buscador***************************************************/			
			
												/*****************Retorno buscador*****************/
			public function retornarInformacoes1($info) {
				try {

					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, endereco, telefone, quemSomos FROM anuncio WHERE empresa LIKE '$info%'");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
			}
												/***************Retorno filtro por bairro*****************/
			public function retornarInformacoes2($info1, $info2) {
				if($info2 == null){
				try {
				
					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, endereco, telefone, quemSomos 
												FROM anuncio 
												WHERE 
												bairro ='$info1' OR bairro1 ='$info1' OR bairro2 = '$info1' OR bairro3 = '$info1' ");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
				}
											/***************Retorno filtro por Categoria*****************/
				if($info1 == null){
				try {
				
					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, endereco, telefone, quemSomos 
												FROM anuncio 
												WHERE 
												categoria ='$info2' OR categoria1 ='$info2' OR categoria2 = '$info2' OR categoria3 = '$info2' ");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
				}
											/***************Retorno filtro por bairro e categoria*****************/
				if($info1 != null && $info2 != null){
				try {
				
					$stmt = $this->pdo->prepare("SELECT idAnuncio, imagen, empresa, endereco, telefone, quemSomos 
												FROM anuncio 
												WHERE
												(bairro = '$info1' OR bairro1 = '$info1' OR bairro2 = '$info1' OR bairro3 = '$info1')
												AND
												(categoria ='$info2' OR categoria1 ='$info2' OR categoria2 = '$info2' OR categoria3 = '$info2') ");
					$stmt->execute();
					
					return $stmt->fetchall(PDO::FETCH_ASSOC);
					
				} catch (PDOException $ex) {
					echo "ERRO 02: {$ex->getMessage()}";
				}
				}
			}
	}
?>