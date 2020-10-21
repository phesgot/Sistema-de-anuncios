<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: ../paginas/anuncie_login.php?acao=invalido');
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>DF Achei - Aqui você acha!</title>
		<link rel="shortcut icon" href="..\img\favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href="..\css\css.css" rel="stylesheet" type="text/css">
		<link href="..\css\galeria.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">
			$('.carousel').carousel({
			interval: false
			});
		</script>
	</head>
	<body>
<!-- Menu de navegação -->
		<div class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="../index.php"><img height="40" alt="Brand" src="..\img\logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-ex-collapse">
			  <ul class="nav navbar-nav navbar-left">
						  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opções <i class="ars et-down fa fa-gear fa-lg fa-spin pull-left"></i></a>
				  <ul class="dropdown-menu" role="menu">
				   <li>
					  <a href='?pagina=iniciopainel'>Inicio do Painel</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href='?pagina=cadastraranuncio'>Cadastrar Anúncio</a>
					</li>
					 <li>
					  <a href='?pagina=editaranuncio'>Editar Anúncio</a>
					</li>
					<li>
					  <a href='?pagina=galeria'>Galeria</a>
					</li>
					<li>
					  <a href='?pagina=view'>Vizualizar Anúncio</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href='?pagina=editarconta'>Editar Conta</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href="..\classes\login\logout.php">Sair</a>
					</li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li class="active">
				  <a href="..\classes\login\logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
<!--Fim do menu nvegação-->

		
			<div class="section">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
<!--Inserir pagina-->
			  <?php
				if (isset($_GET['pagina'])){
					$pagina = $_GET['pagina'];
					switch ($pagina){
						case "iniciopainel";
							include_once("../paginas/iniciopainel.php");
							break;
							
						case "cadastraranuncio";
							include_once("../paginas/cadastaranuncio.php");
							break;
							
						case "editaranuncio";
							include_once("../paginas/editar_anuncio.php");
							break;

						case "galeria";
							include_once("../paginas/galeria.php");
							break;
							
						case "view";
							include_once("../paginas/view.php");
							break;
					
						case "editarconta";
							include_once("../paginas/configuracoes_de_conta.php");
							break;
							
					}
					
				}else{
					include_once("../paginas/iniciopainel.php");
				}
			  ?>
			  
			   </div>
		  </div>
		</div>
		</div>
	<!--Rodapé-->
		<div class="section">
		  <div class="container">
			<div class="row" align="right">
			 © Todos os direitos reservados - 2016
			</div>
		  </div>
		</div>
	</body>
</html>