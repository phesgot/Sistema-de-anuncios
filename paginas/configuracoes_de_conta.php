<?php
	require_once("../classes/DAO/CadastroDao.php");
	require_once("../classes/DAO/AnuncioDao.php");
	require_once("../classes/entidade/Cadastro.php");
			
	$cadastroDao = new CadastroDao();
	$anuncioDao = new AnuncioDao();
	$cadastro = new Cadastro();
			
	foreach($cadastroDao->retornarCadastro($_SESSION['idCadastro']) as $editar){
			
?>
	<!--inicio do form editar cadastro-->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
					<h3>>>Editar Conta</h3>
					
						<form role="form" id="cadastro" method="post"  name="formCadastro" enctype="multipart/form-data" >
							<div class="form-group" >
								<label class="control-label">*Responsável</label>
									<input class="form-control" type="text" placeholder="Nome Completo" required="required" name="txtResponsavel" value="<?=$editar["responsavel"];?>" >
							</div>
							
							<div class="form-group" >
								<label class="control-label">*Empresa</label>
									<input class="form-control" type="text" placeholder="Nome Empresa" required="required" name="txtEmpresa" value="<?=$editar["empresa"];?>">
							</div>
							
							<div class="form-group" >
								<label class="control-label" for="exampleInputEmail1">*E-mail</label>
									<input class="form-control" id="exampleInputEmail1" placeholder="nome@domínio.com" name="txtEmail"  type="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?=$editar["email"];?>">
							</div>
							
							<div class="form-group" >
								<label class="control-label">*Telefone 1</label>
									<input class="form-control" type="text" placeholder="(00) 0000-0000" required="required"  name="txtTelefone1" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" value="<?=$editar["telefone1"];?>">
							</div>
							
							<div class="form-group" >
								<label class="control-label">Telefone 2</label>
									<input class="form-control" type="text" placeholder="(00) 0000-0000" maxlength="15" name="txtTelefone2" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" value="<?=$editar["telefone2"];?>">
							</div>
							
							<div class="form-group" >
								<label class="control-label">*CEP</label>
									<input class="form-control" type="text" placeholder="00000-000" name="txtCep" required="required" pattern="\d{5}-?\d{3}" value="<?=$editar["cep"];?>">
							</div>
							
							<div class="form-group" >
								<label class="control-label">UF</label>
									<select class="form-control" name="txtUf">
										<option value="<?=$editar["uf"];?>"><?=$editar["uf"];?></option>
									</select>
							</div>
							
							<div class="form-group" >
								<label class="control-label">Cidade</label>
									<select class="form-control" name="txtCidade">
										<option value="<?=$editar["cidade"];?>"><?=$editar["cidade"];?></option>
									</select>
							</div>
							<div class="form-group" >
								<label class="control-label">*Bairro</label>
									<select class="form-control" required="required" name="txtBairro">
										<option value="<?=$editar["bairro"];?>"><?=$editar["bairro"];?></option>
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
									<input class="form-control" type="text" required="required" name="txtEndereco" value="<?=$editar["endereco"];?>">
							</div>
							<button type="submit" class="btn btn-default" name="btnAlterar">Alterar Cadastro</button>
						</form>
					</div>
<?php
	}
?>
						
<!--Form alterar senha-->					
					<div class="col-md-4">
						<form method="post">
							<h3>>>Alterar Senha</h3>
							<div class="form-group">
								<label class="control-label" for="exampleInputPassword1">*Senha Atual</label>
									<input class="form-control" id="exampleInputPassword1" placeholder="******" type="password" name="txtSenha" id="Senha" required="required" maxlength="20">
							</div>
							
							<div class="form-group">
								<label class="control-label" for="exampleInputPassword1">*Nova Senha</label>
									<input class="form-control" id="exampleInputPassword1" placeholder="******" type="password" name="txtSenha1" id="Senha1" required="required" maxlength="20">
							</div>
							
							<div class="form-group" >
								<label class="control-label" for="exampleInputPassword1">*Confirmar Senha</label>
									<input class="form-control" type="password" id="exampleInputPassword1" placeholder="******" name="txtSenha2" id="Senha2"  required="required" maxlength="20" >
							</div>
							
							<button type="submit" class="btn btn-default" name="btnEditarSenha">Alterar Senha</button>
						</form>
					</div>		

<!--Form excluir conta-->
					<div class="col-md-4">
						<form method="post">
							<h3>>>Excluir Conta</h3>
							<div class="form-group">
								<label class="control-label" for="exampleInputPassword1">*Senha</label>
									<input class="form-control" id="exampleInputPassword1" placeholder="******" type="password" name="txtSenha1" id="Senha3" required="required" maxlength="20">
							</div>
							
							<div class="form-group" >
								<label class="control-label" for="exampleInputPassword1">*Confirmar Senha</label>
									<input class="form-control" type="password" id="exampleInputPassword1" placeholder="******" name="txtSenha2" id="Senha4"  required="required" maxlength="20" >
							</div>
							
							<button type="submit" class="btn btn-default" name="btnExcluirConta">Excluir conta</button>
						</form>
					</div>							
				</div>
			</div>
		</div>
	</div>					
<?php
/*Código alterar cdastro*/
	if (isset($_POST['btnAlterar'])) {
					
		$idCadastro = $_SESSION['idCadastro'];
		$responsavel = ($_POST['txtResponsavel']);
		$empresa = ($_POST['txtEmpresa']);
		$email = ($_POST['txtEmail']);
		$telefone1 = ($_POST['txtTelefone1']);
		$telefone2 = ($_POST['txtTelefone2']);
		$cep = ($_POST['txtCep']);
		$uf = ($_POST['txtUf']);
		$cidade = ($_POST['txtCidade']);
		$bairro = ($_POST['txtBairro']);
		$endereco = ($_POST['txtEndereco']);
				
		if ($cadastroDao->alterarAnuncio($responsavel, $empresa, $email, $telefone1, $telefone2, $cep, 
													$uf, $cidade, $bairro, $endereco, $idCadastro)) {

		} 
			?>
				<script type="text/javascript">
					alert("Cadastro alterado com sucesso!");
					window.location = '?pagina=editarconta';
				</script>
			<?php	
	} 
				
/*Código alterar Senha*/				
	if (isset($_POST['btnEditarSenha'])) {
					
		$senha1 = (md5($_POST['txtSenha1']));
		$senha2 = (md5($_POST['txtSenha2']));
		$idCadastro = $_SESSION['idCadastro'];
		
		if($senha1 == $senha2){
						
			$cadastroDao->alterarSenha($senha1, $senha2, $idCadastro);
				?>
					<script type="text/javascript">
						alert("Senha alterada com sucesso!");
						window.location = '?pagina=editarconta';
					</script>
				<?php

		}else{
				?>
					<script type="text/javascript">
						alert("Erro: Verifique se digitou a senha atual corretamente e se a Senha e Confirma Senha são iguais!");
						window.location = '?pagina=editarconta';
					</script>
				<?php
			}		
		}
				
/*Código Excluir conta*/				
	if (isset($_POST['btnExcluirConta'])) {
					
		$senha3 = (md5($_POST['txtSenha1']));
		$senha4 = (md5($_POST['txtSenha2']));
		$senhaatual = $_SESSION['senha1'];
		$idCadastro = $_SESSION['idCadastro'];
					
		if($senha3 == $senha4 && $senha4 == $senhaatual){
						
			$anuncioDao->ecluirGaleria($idCadastro);
			$anuncioDao->ecluirAnuncio($idCadastro);
			$cadastroDao->ecluirConta($idCadastro);

			?>
				<script type="text/javascript">
					alert("Cadastro excluído com sucesso!");
					window.location = "../paginas/anuncie_login.php";
				</script>
			<?php

		}else{
				?>
					<script type="text/javascript">
						alert("Erro: Não foi possível deletar sua conta! Verifique se inseriu as informações corretas.");
						window.location = '?pagina=editarconta';
					</script>
				<?php
			}		
		}
?>