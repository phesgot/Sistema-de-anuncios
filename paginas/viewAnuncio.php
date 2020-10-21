<head>
		<link href="css\galeria.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">
			$('.carousel').carousel({
			interval: false
			});
		</script>
</head>
<?php

	error_reporting(0);
	ini_set(“display_errors”, 0 );
		
	require_once("classes/DAO/listarDao.php");
			
	$listarDao = new ListarDao();
					
	$view = $listarDao->viewAnuncio($_GET['cod']);
?>		
<div class="row">
	<div class="col-md-12">
        <img height="200px" width="100%" src="imgUser/<?=$view["imagen"];?>">
	</div>
</div>
<!--info-->		
<div class="col-md-5">
	<h1><?=$view["empresa"];?></h1>
	<p id="listview" class="text-justify">Endereço(s):</br><?=$view["endereco"];?></pre>
	<p id="listview" class="text-justify">Horario de Funcionamento:</br><?=$view["horarioDeFuncionamento"];?></pre>
	<p id="listview" class="text-justify">Quem Somos:</br><?=$view["quemSomos"];?></pre>
	<p id="listview" class="text-justify">Informações Adicionais:</br><?=$view["informacoesAdicionais"];?></pre>
	<p id="listview" class="text-justify">Telefone(s):</br><?=$view["telefone"];?></pre>
	<p id="listview" class="text-justify">E-mail:</br><?=$view["email"];?></pre>
	<p id="listview" class="text-justify">Site:</br><?=$view["site"];?></pre>
</div>
<!--video-->		
<div class="col-md-7" id="video">
	<div class="embed-responsive embed-responsive-16by9" id="slide1">
		<iframe class="embed-responsive-item" src="<?=$view["url"];?>" allowfullscreen=""></iframe>
	</div>
</div>

<div>
	</br></br>
</div>

<?php
	$i = 0;
	$lista = array();
	foreach($listarDao->retornarGaleria($_GET['cod']) as $imagem){
		$lista[$i] = $imagem["imagem"];
		$i++;
	}
?>	
<!--galeria-->			
<div class="col-md-12" align="center" id="slide">
	<div class="carousel slide article-slide" id="article-photo-carousel">
		<div class="carousel-inner cont-slider">
						
			<?php
				if($lista[0] != null){
			?>
			<div class="item active" >
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[0];?>">
			</div>
			<?php
				}
			?>
			<?php
				if($lista[1] != null){
			?>
			<div class="item " >
				<img  id="img" alt="" title="" src="imgGaleria/<?=$lista[1];?>">
			</div>
			<?php
				}
			?>				
			<?php
				if($lista[2] != null){
			?>
			<div class="item" >
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[2];?>">
			</div>
			<?php
				}
			?>	
			<?php
				if($lista[3] != null){
			?>
			<div class="item">
				<img  id="img" alt="" title="" src="imgGaleria/<?=$lista[3];?>">
			</div>
			<?php
				}
			?>		
			<?php
				if($lista[4] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[4];?>">
			</div>
			<?php
				}
			?>	
			<?php
				if($lista[5] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[5];?>">
			</div>
			<?php
				}
			?>
			<?php
				if($lista[6] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[6];?>">
			</div>
			<?php
				}
			?>
			<?php
				if($lista[7] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[7];?>">
			</div>
			<?php
				}
			?>						
			<?php
				if($lista[8] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[8];?>">
			</div>
			<?php
				}
			?>			
			<?php
				if($lista[9] != null){
			?>
			<div class="item">
				<img id="img" alt="" title="" src="imgGaleria/<?=$lista[9];?>">
			</div>
			<?php
				}
			?>			

			</div>
				</br></br></br></br>
				
				<ol class="carousel-indicators">	  
					<?php
						if($lista[0] != null){
					?>
					<li class="active" data-slide-to="0" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[0];?>" >
					</li>
					<?php
						}
					?>							
					<?php
						if($lista[1] != null){
					?>
					<li class="active" data-slide-to="1" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[1];?>" >
					</li>
					<?php
						}
					?>	
					<?php
						if($lista[2] != null){
					?>
					<li class="active" data-slide-to="2" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[2];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[3] != null){
					?>
					<li class="active" data-slide-to="3" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[3];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[4] != null){
					?>
					<li class="active" data-slide-to="4" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[4];?>">
					</li>
					<?php
						}
					?>						
					<?php
						if($lista[5] != null){
					?>
					<li class="active" data-slide-to="5" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[5];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[6] != null){
					?>
					<li class="active" data-slide-to="6" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[6];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[7] != null){
					?>
					<li class="active" data-slide-to="7" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[7];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[8] != null){
					?>
					<li class="active" data-slide-to="8" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[8];?>">
					</li>
					<?php
						}
					?>
					<?php
						if($lista[9] != null){
					?>
					<li class="active" data-slide-to="9" data-target="#article-photo-carousel">
						<img alt="" src="imgGaleria/<?=$lista[9];?>">
					</li>
					<?php
						}
					?>
				</ol>
				
			</div>
</div>




			