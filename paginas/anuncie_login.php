<?php
require_once("../classes/DAO/CadastroDao.php");
$CadastroDao = new CadastroDao();
session_start();
if (isset($_SESSION['logado'])) {
    header('Location: ../paginas/painel.php?');
}
?>
<!--DOCTYPE HTML-->
<html lang="pt-br">
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
						<li>
							<a href="../index.php">Início</a>
						</li>
						<li>
							<a href="empresa.php">Empresa</a>
						</li>
						<li class="active">
							<a href="anuncie_login.php">Anuncie</a>
						</li>
						<li>
							<a href="contato.php">Contato</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cadastre.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
						<li class="active"><a href="anuncie_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--Fim do menu nvegação-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!--inicio form login-->
		<div class="section text-right">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<form class="form-horizontal text-left" role="form" method="post">
							<div class="form-group">
								<div class="col-sm-2">
									<label class="control-label">Usuário</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Usuário" required="required" maxlength="80" name="txtUsuario" >
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									<label for="inputPassword3" class="control-label">Senha</label>
								</div>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="senha" placeholder="******" required="required" maxlength="20" name="txtSenha">
								</div>
							</div>
							<font color="red"><p style="padding:10px;" id="resultado" align="left">&nbsp;</p></font>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default" name="logar">Logar</button>
									<a href="cadastre.php"><button type="button" class="btn btn-default">Cadastre-se</button></a>
								</div>
							</div>
						</form>
					</div>
					<!--Fim form login-->
					<!--Imagem do login-->
					<div class="col-md-8" float="right">
						<img src="..\img\banner.png" class="img-responsive">
					</div>
					<!--Fim-->
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

<?php
/*validando Usuario*/
if (isset($_POST['logar'])) {
    if ($CadastroDao->validarUsuario($_POST["txtUsuario"], $_POST["txtSenha"])) {

	
        $consulta = $CadastroDao->retornarInformacoes($_POST["txtUsuario"]);

        $_SESSION['idCadastro'] = $consulta['idCadastro'];
        $_SESSION['empresa'] = $consulta['empresa'];
        $_SESSION['usuario'] = $consulta['usuario'];
		$_SESSION['senha1'] = $consulta['senha1'];
        $_SESSION['logado'] = true;
        ?>
        <script>
            document.location.href = "painel.php";
        </script>  
        <?php
    } else {
        ?>
        <script>
            document.getElementById("resultado").innerHTML = "*Usuário ou senha inválido";
        </script>  
        <?php
    }
}

if (isset($_GET["acao"])) {

    $pagina = $_GET["acao"];

    switch ($pagina) {

        case "invalido":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Autenticação requerida.";
            </script>  
            <?php
            break;
        case "logout":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Você efetuou o Logout.";
            </script>  
            <?php
            break;
    }
}
?>



