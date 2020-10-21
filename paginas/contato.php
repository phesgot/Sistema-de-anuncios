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
						<li>
							<a href="anuncie_login.php">Anuncie</a>
						</li>
						<li class="active">
							<a href="contato.php">Contato</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cadastre.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
						<li><a href="anuncie_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>					
				</div>
			</div>
		</div>
	<!--Fim do menu navegação-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<hr>
					</div>
				</div>
			</div>
		</div>
		<p class="lead text-center">Telefone: TIM (61) 8314-8324</p>
		
		<!--Formulario de contato-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form role="form" id="formulario" method="post" action="../classes/processaContato.php"> 
							<div class="form-group" id="insertnome">
								<label class="control-label">Nome Completo</label>
								<input class="form-control" placeholder="Nome Completo" type="text" required="required" name="nome">
							</div>
							<div class="form-group" id="telefone">
								<label class="control-label">Telefone</label>
								<input class="form-control" type="text" placeholder="(xx) xxxx-xxxx" name="telefone" required="required" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$">
							</div>
							<div class="form-group" id="insertemail">
								<label class="control-label" for="exampleInputEmail1">E-mail</label>
								<input class="form-control" placeholder="nome@domínio.com" type="email" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							</div>
							<div class="form-group" id="assunto">
								<label class="control-label">Assunto</label>
								<input class="form-control" name="assunto" type="text" placeholder="Assunto..."  required="required" maxlength="15" >
							</div>
							<div class="form-group" id="Mensagem">
								<label class="control-label">Mensagem</label>
								<textarea class="form-control" placeholder="Digite uma mensagem..." name="menssagem" required="required"></textarea>
							</div>
							<button type="submit" name="btnContato" class="btn btn-default">Enviar</button>
							<button type="reset" class="btn btn-default">Limpar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--Fim do formulario contato-->
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