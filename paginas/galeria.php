<?php

	error_reporting(0);
	ini_set(“display_errors”, 0 );
		
	require_once("../classes/DAO/AnuncioDao.php");
	require_once("../classes/upLoad.php");
	require_once("../classes/entidade/addGaleria.php");
	
	$anuncioDao = new AnuncioDao();
	$upLoad = new UpLoad();
	$addGaleria = new AddGaleria();
?>


<!--Formulario adicionar imagens-->
<form role="form" method="post" enctype="multipart/form-data">
	<div class="col-md-12">
		<div class="col-md-4">
			<div class="form-group">
				<h1 class="text-left">>>Galeria</h1>
				<input class="form-control" type="file" name="galeria" multiple>
				</br>
				<button  type="submit" class="btn btn-default" name="adicionar">Add Fotos</button>
			</div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-4">
			<div class="form-group">
				</br></br>
				<h5>Digite o numero da foto para Excluir:<h5>
				<input type="text" name="id"></input>
				</br></br>
				<button  type="submit" class="btn btn-default" name="excluir">Ecluir foto</button>
			</div>
		</div>
	</div>		

<!--Form mostrar imagens-->	
	<div class="col-md-12" >
<?php
foreach($anuncioDao->retornarAnuncio($_SESSION['idCadastro']) as $info){}

foreach($anuncioDao->retornarGaleria($info['idAnuncio']) as $imagem){
?>	

			
			
			<div class="col-md-6" id="galeria" >
				<img class="galeria" src="../imgGaleria/<?=$imagem["imagem"];?>" >
				<input type="hidden" value='<?=$imagem["idGaleria"];?>' ><?=$imagem["idGaleria"];?></input>
			</div>
			


		
</form>
<?php
	}
?>
	</div>


<?php
/*Código php adicionar imagens*/
	if (isset($_POST['adicionar'])) {
						
		$pesquisa = $anuncioDao->existeGaleria($_SESSION['idCadastro']);
				
		if($pesquisa >= 10){
			?>
				<script type="text/javascript">
					alert("Você já possui o numero maximo de uploads permitido!");
				</script>
			<?php
		}else{
				$imagem = $upLoad->upLoadFile($_FILES['galeria'], "../imgGaleria/", ".jpg");
							
				if($imagem != null){
					$addGaleria->setGaleria($imagem);
					$addGaleria->setIdUsuariofk($_SESSION['idCadastro']);
					$addGaleria->setIdAnunciofk($info['idAnuncio']);
				
					if ($anuncioDao->adicionarGaleria($addGaleria)) {
						?>
							<script type="text/javascript">
								window.location = '?pagina=galeria';
							</script>
						<?php
					}else{
							?>
								<script type="text/javascript">
									alert("Erro: Para fazer upLoad de fotos é preciso cadastar anuncio!");
									window.location = '?pagina=iniciopainel';
								</script>
							<?php
						}
				}
			}
		}
		
/*Excluir imagem*/		
		if (isset($_POST['excluir'])) {
					
			$idCadastro = $_SESSION['idCadastro'];
			$idGaleria = ($_POST['id']);
						
			foreach($anuncioDao->excluirFotoVerifica($idGaleria) as $idUsuario){}
			$idUsuariofk = $idUsuario['idUsuariofk'];
	
			if ($idCadastro == $idUsuariofk){
			$anuncioDao->excluirFoto($idGaleria);

			?>
				<script type="text/javascript">
					alert("Foto Excluida!");
					window.location = '?pagina=galeria';
				</script>
			<?php
							
			}else{
					?>
						<script type="text/javascript">
							alert("Erro ao excluir foto!");
							window.location = '?pagina=galeria';
						</script>
					<?php
				}
				
		}
				
				
?>