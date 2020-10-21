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
		<link href="..\css\css.css" rel="stylesheet" type="text/css"
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
						<li>
							<a href="contato.php">Contato</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="cadastre.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
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
		<!--conexao-->
		<?php
			require_once("../classes/DAO/CadastroDao.php");
			require_once("../classes/entidade/Cadastro.php");
			
			$cadastroDao = new CadastroDao();
			$cadastro = new Cadastro();
		?>
		<!--inicio do cadastro-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<form role="form" id="cadastro" method="post"  name="formCadastro" enctype="multipart/form-data" >
						<div class="form-group" >
							<label class="control-label">*Responsável</label>
							<input class="form-control" type="text" placeholder="Nome Completo" required="required" name="txtResponsavel" >
						</div>
						<div class="form-group" >
							<label class="control-label">CPF</label>
							<input class="form-control" type="text" placeholder="000.000.000-00" name="txtCpf"  pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
						</div>
						<div class="form-group" >
							<label class="control-label">*Empresa</label>
							<input class="form-control" type="text" placeholder="Nome Empresa" required="required" name="txtEmpresa" >
						</div>
						<div class="form-group" >
							<label class="control-label">*CNPJ</label>
							<input class="form-control" type="text" placeholder="00.000.000/0000-00" required="required" name="txtCnpj" >
						</div>
						<div class="form-group" >
							<label class="control-label" for="exampleInputEmail1">*E-mail</label>
							<input class="form-control" id="exampleInputEmail1" placeholder="nome@domínio.com" name="txtEmail"  type="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
						</div>
						</div>
						<div class="col-md-4">
						<div class="form-group" >
							<label class="control-label">*Usuário</label>
							<input class="form-control" type="text" required="required" maxlength="80" placeholder="Usuário" name="txtUsuario" >
						</div>
						<div class="form-group">
							<label class="control-label" for="exampleInputPassword1">*Senha</label>
							<input class="form-control" id="exampleInputPassword1" placeholder="******" type="password" name="txtSenha1" id="Senha1" required="required" maxlength="20">
						</div>
						<div class="form-group" >
							<label class="control-label" for="exampleInputPassword1">*Confirmar Senha</label>
							<input class="form-control" type="password" id="exampleInputPassword1" placeholder="******" name="txtSenha2" id="Senha2"  required="required" maxlength="20" >
						</div>
						<div class="form-group" >
							<label class="control-label">*Telefone 1</label>
							<input class="form-control" type="text" placeholder="(00) 0000-0000" required="required"  name="txtTelefone1" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$">
						</div>
						<div class="form-group" >
							<label class="control-label">Telefone 2</label>
							<input class="form-control" type="text" placeholder="(00) 0000-0000" maxlength="15" name="txtTelefone2" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$">
						</div>
						</div>
						<div class="col-md-4">
						<div class="form-group" >
							<label class="control-label">*CEP</label>
							<input class="form-control" type="text" placeholder="00000-000" name="txtCep" required="required" pattern="\d{5}-?\d{3}">
						</div>
						<div class="form-group" >
							<label class="control-label">UF</label>
							<select class="form-control" name="txtUf">
								<option value="DF">DF</option>
							</select>
						</div>
						<div class="form-group" >
							<label class="control-label">Cidade</label>
							<select class="form-control" name="txtCidade">
								<option value="Brasília">Brasília</option>
							</select>
						</div>
						<div class="form-group" >
							<label class="control-label">*Bairro</label>
							<select class="form-control" required="required" name="txtBairro">
								  <option value="">SELECIONE</option>
								  <option>ÁGUAS CLARAS</option>
								  <option>BRASILIA/PLANO PILOTO</option>
								  <option>BRAZLÂNDIA</option>
								  <option>CANDANGOLÂNDIA</option>
								  <option>CEILÂNDIA</option>
								  <option>CRUZEIRO</option>
								  <option>FERCAL</option>
								  <option>GAMA</option>
								  <option>GUARÁ</option>
								  <option>ITAPOÃ</option>
								  <option>JARDIM BOTÂNICO</option>
								  <option>LAGO NORTE</option>
								  <option>LAGO SUL</option>
								  <option>NÚCLEO BANDEIRANTE</option>
								  <option>PARANOÁ</option>
								  <option>PARK WAY</option>
								  <option>PLANALTINA</option>
								  <option>RECANTO DAS EMAS</option>
								  <option>RIACHO FUNDO</option>
								  <option>RIACHO FUNDO II</option>
								  <option>SAMAMBAIA</option>
								  <option>SANTA MARIA</option>
								  <option>SÃO SEBASTIÃO</option>
								  <option>SCIA (SETOR COMPLEMENTAR DE INDÚSTRIA E ABASTECIMENTO)</option>
								  <option>SIA (SETOR DE INDÚSTRIA E ABASTECIMENTO)</option>
								  <option>SOBRADINHO</option>
								  <option>SOBRADINHO II</option>
								  <option>SUDOESTE/OCTAGONAL</option>
								  <option>TAGUATINGA</option>
								  <option>VARJÃO</option>
								  <option>VICENTE PIRES</option>
							</select>
						</div>
						<div class="form-group" >
							<label class="control-label">*Endereço</label>
							<input class="form-control" type="text" required="required" name="txtEndereco">
						</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="ckTermo" id="ckTermo" value="1" required="required">Eu li e concordo com os termos de uso abaixo.
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-default" name="btnCadastrar">Finalizar Cadastro</button>
						</form>
					</div>
					</div>
					</br>
					<div id="termolateral">
						<p>
							Uma pessoa gosta do país em que vive e não há nada a fazer. Parece-me assim essencial que o
							país se submeta a segunda volta contra o doutor Mário Soares e que o Professor Doutor Aníbal 
							Cavaco Silva ganhe. Assim como na direita há demasiado medo da segunda volta, na esquerda existem 
							demasiadas esperanças. O risco de Mário Soares ganhar é muito menos grave que a falta de clivagem e 
							definição do país com que inevitavelmente vamos ainda chegar à primeria das voltas, onde só os extremos 
							beneficiam. Por essa altura Jerónimo Sousa, Francisco Louçã e Manuel Alegre ainda parecerão 
							candidatos decentes, as três pessoas que congregam sozinhos os piores traços da nação 
							(ainda assim com aspectos adoráveis, pricipalmente se andamos a ler Goethe). Bem sei que 
							muitos dos que apoiam o doutor Mário Soares nutrem pelo nosso Professor e pelo que ele 
							representa a mesma aversão que aqui deixo contra aquele triunvirato da esquerda. Há que, 
							no entanto, ser altivo quando a isso. Parece-me que falamos de reinos diferentes. A reacção 
							de muita da esquerda contra o Professor não é da mesma natureza que a da direita e da parte 
							sã do PS contra aquele tipo de esquerda: no primeiro caso falamos de um deslocamento cultural, 
							quase de nascimento, de uma incompreensão fundamental de vida, das vidas, dos custos e do valor 
							a atribuir a quem apenas quer ser mais rico que o vizinho, e, muito derivado disso, do lugar e 
							da forma mais inteligente de utilizar em beneficio de todos a inevitabilidade humana de coisas 
							como a inveja, o egoísmo, a ganância, a ambição, finalmente, do sentido a dar à Justiça 
							(assim com letra grande para dar ares) neste caldeirão todo; importa aclarar tudo isto o 
							mais possivel, para que racionalmente nos incompatibilizemos cada vez mais e melhor. No 
							segundo caso, penso que se fala do simples, inescapável e transversal bom senso: Jerónimo 
							é soviético e comunista – os “trabalhadores” para ele são um electrodoméstico das suas 
							ideias do mundo e da sua demagogia - , Louçã fala de fora do poder e do eufemismo "esquerda moderna", e,
							ou abandonaria metade do que diz (que não é muito), ou cairia vítima em três tempos do que há anos 
							vem dizendo (é, nitidamente, um guterres extremado e ainda mais moralista – como inevitavelmente são 
							todos os ateus -, mas cada vez menos extremado, ou, pelo menos, mais escondido, mais esquivo).
							Manuel Alegre, bem, Manuel Alegre suga-me as palavras. Provavelmente aqui no espaço ninguém 
							concordará comigo, mas o caminho prudente e avisado para Portugal é o da separação das águas 
							do interior do Bloco Central. Só assim nas contas finais ninguém sairá fundamentalmente derrotado, 
							que não há necessidade disso.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--Fim do cadastro-->
<?php
/*Código verifica e cadastra anunciante*/
	if (isset($_POST['btnCadastrar'])) {
	
		$cnpj = ($_POST['txtCnpj']);
		$usuario = ($_POST['txtUsuario']);
		$email = ($_POST['txtEmail']);
		$senha  = $_POST['txtSenha1'];
		$senhaConfirma  = $_POST['txtSenha2'];
				
		$confereCnpj = $cadastroDao->existeCnpj($cnpj);
		$confereUsuario = $cadastroDao->existeUsuario($usuario);
		$confereEmail = $cadastroDao->existeEmail($email);

		if($confereCnpj == 1){
			?>
				<script type="text/javascript">
					alert("ERRO: Já existe um cadastro com este CNPJ!");
				</script>
			<?php
		}
		if($confereUsuario == 1){
			?>
				<script type="text/javascript">
					alert("ERRO: Já existe um cadastro com este Usuário!");
				</script>
			<?php
		}
		if($confereEmail == 1){
			?>
				<script type="text/javascript">
					alert("ERRO: Já existe um cadastro com este E-mail!");
				</script>
			<?php
		}
		if ($senha != $senhaConfirma){
			?>
				<script type="text/javascript">
					alert("ERRO: As senhas não conferem!");
				</script>
			<?php
		}
	
		if ($senha == $senhaConfirma && $confereCnpj != 1 && $confereUsuario != 1 && $confereEmail != 1) {
		
			$cadastro->setResponsavel($_POST['txtResponsavel']);
			$cadastro->setCpf($_POST['txtCpf']);
			$cadastro->setEmpresa($_POST['txtEmpresa']);
			$cadastro->setCnpj($_POST['txtCnpj']);
			$cadastro->setEmail($_POST['txtEmail']);
			$cadastro->setUsuario($_POST['txtUsuario']);
			$cadastro->setSenha1(md5($_POST['txtSenha1']));
			$cadastro->setSenha2(md5($_POST['txtSenha2']));
			$cadastro->setTelefone1($_POST['txtTelefone1']);
			$cadastro->setTelefone2($_POST['txtTelefone2']);
			$cadastro->setCep($_POST['txtCep']);
			$cadastro->setUf($_POST['txtUf']);
			$cadastro->setCidade($_POST['txtCidade']);
			$cadastro->setBairro($_POST['txtBairro']);
			$cadastro->setEndereco($_POST['txtEndereco']);
				
				if ($cadastroDao->cadastrarEmpresa($cadastro)) {
					?>
						<script type="text/javascript">
							alert("Cadastrado com sucesso!");
						</script>
					<?php
				} else {
					?>
						<script type="text/javascript">
							alert("Erro ao cadastrar!");
						</script>
					<?php
				}
		} else {
			?>
				<script type="text/javascript">
					alert("ERRO");
				</script>
			<?php
		} 
	}
?>
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