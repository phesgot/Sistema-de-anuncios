<html><head>
        <meta charset="utf-8">
        <title>DF Achei - Aqui você acha!</title>
        <link rel="shortcut icon" href="img\favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="css\css.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="navbar navbar-default navbar-fixed-top">
            <!-- Menu de navegação -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img height="40" alt="Brand" src="img\logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Início</a>
                        </li>
                        <li>
                            <a href="paginas/empresa.php">Empresa</a>
                        </li>
                        <li>
                            <a href="paginas/anuncie_login.php">Anuncie</a>
                        </li>
                        <li>
                            <a href="paginas/contato.php">Contato</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="paginas/cadastre.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a>
                        </li>
                        <li>
                            <a href="paginas/anuncie_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Fim do Menu de navegação-->
        <div id="slideshow" data-interval="5000" class="carousel slide" data-ride="carousel">
            <!--Início do carousel-->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img\a.png" style="width:100%;height:35%">
                </div>
                <div class="item">
                    <img src="img\b.png" style="width:100%;height:35%">
                </div>
            </div>
            <a class="left carousel-control" href="#slideshow" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#slideshow" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
        </div>
        <!--Fim do carousel-->
        <div class="navbar navbar-default navbar-static-top">
            <!-- inicio filtro de pesquisa-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barrafiltro">
                        <img src="img\iconefiltro.png" style="width:20px;height:20px">
                    </button>
                    <a class="navbar-brand" href="#"><img class="imgfiltresuapesquisa" alt="Brand" src="img\filtresuapesquisa.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="barrafiltro">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <form class="formpesquisa" id="formfiltro" >
                                <label id="labelfiltro">Bairro:</label>
                                <select id="selectfiltro" name="bairro" >
                                    <option value="">TODAS</option>
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
                                <label id="labelfiltro">Categoria:</label>
                                <select id="selectfiltro" name="categoria" >
                                    <option value="">TODAS</option>
                                    <option>Academias</option>
                                    <option>Acessórios Femininos</option>
                                    <option>Açougues</option>
                                    <option>Adestramento de cães</option>
                                    <option>Agência de Veículos</option>
                                    <option>Animação e Diversão</option>
                                    <option>Armarinhos</option>
                                    <option>Arquitetos</option>
                                    <option>Artes Marciais</option>
                                    <option>Artesanato</option>
                                    <option>Artigos Esportivos</option>
                                    <option>Auto Elétrica</option>
                                    <option>Auto Escola</option>
                                    <option>Autopeças</option>
                                    <option>Aviculturas e Rações</option>
                                    <option>Banca de Jornal</option>
                                    <option>Barbearias</option>
                                    <option>Bares e Lanchonetes</option>
                                    <option>Bazar &amp; Presentes</option>
                                    <option>Bicicletas e Peças</option>
                                    <option>Cabeleireiros</option>
                                    <option>Centro Automotivo</option>
                                    <option>Cestas / Comemoração</option>
                                    <option>Cestas Comemorativas</option>
                                    <option>CFTV, Cerca Elétrica e Alarmes</option>
                                    <option>Cinema</option>
                                    <option>Clínica do Trânsito (Detran-DF)</option>
                                    <option>Clínica Médica</option>
                                    <option>Colégios</option>
                                    <option>Conserto de Material Elétrico</option>
                                    <option>Copiadoras</option>
                                    <option>Creches</option>
                                    <option>Criatórios e Viveiros</option>
                                    <option>Cursos</option>
                                    <option>Depilação</option>
                                    <option>Dermatologia</option>
                                    <option>Distribuidor de Gás e Água</option>
                                    <option>Distribuidores de bebidas</option>
                                    <option>DJ e Jogos de Luzes</option>
                                    <option>Drogarias e Farmácias</option>
                                    <option>Eletrodomésticos</option>
                                    <option>Entulho</option>
                                    <option>Escolas de Idiomas</option>
                                    <option>Escolas e Art. Escolares</option>
                                    <option>Escritório de Contabilidade</option>
                                    <option>Esporte</option>
                                    <option>Estética</option>
                                    <option>Faculdades</option>
                                    <option>Fantasias</option>
                                    <option>Fast-food</option>
                                    <option>Festas e Eventos</option>
                                    <option>Financeiras</option>
                                    <option>Fisioterapia</option>
                                    <option>Floricultura</option>
                                    <option>Fornecedores e Atacadista</option>
                                    <option>Forros Gesso/PVC Outros</option>
                                    <option>Foto &amp; Filmagem</option>
                                    <option>Funerárias</option>
                                    <option>Ginecologia</option>
                                    <option>Guinchos</option>
                                    <option>Imóveis</option>
                                    <option>Informática</option>
                                    <option>Internet</option>
                                    <option>Laboratórios</option>
                                    <option>Lanternagem e Pintura</option>
                                    <option>Lavanderias</option>
                                    <option>Livrarias e Papelarias</option>
                                    <option>Madeireiras</option>
                                    <option>Mármore e Granito</option>
                                    <option>Materiais de Construção</option>
                                    <option>Material Elétrico e Hidráulico</option>
                                    <option>Mecânica</option>
                                    <option>Metais, Ferros e Armações</option>
                                    <option>Motéis</option>
									<option>Moto Boy</option>
                                    <option>Moto Taxi</option>
                                    <option>Móveis</option>
                                    <option>Nutrição Esportiva</option>
                                    <option>Odontologia</option>
                                    <option>Oficinas</option>
                                    <option>Óticas</option>
                                    <option>Padarias e Confeitarias</option>
                                    <option>Película</option>
                                    <option>Perfumaria</option>
                                    <option>Persianas</option>
                                    <option>Pet Shop e Veterinária</option>
                                    <option>Pilates</option>
                                    <option>Piscinas</option>
                                    <option>Pizzarias</option>
                                    <option>Pneus</option>
                                    <option>Podologia</option>
                                    <option>Polimento Automotivo</option>
                                    <option>Produtora</option>
                                    <option>Produtos de Beleza</option>
                                    <option>Produtos Naturais</option>
                                    <option>Psicologia</option>
                                    <option>Psiquiatria</option>
                                    <option>Publicidade e Propaganda</option>
                                    <option>Rádio Taxi</option>
                                    <option>Restaurante e Churrascaria</option>
                                    <option>Roupas e Calçados</option>
                                    <option>Serralheria</option>
                                    <option>Serviços</option>
                                    <option>Sex Shop</option>
                                    <option>Shopping</option>
                                    <option>Som Automotivo</option>
                                    <option>Supermercados</option>
                                    <option>Suplementos e Nutrição Esportiva</option>
                                    <option>Supletivo</option>
                                    <option>Tatuagens</option>
                                    <option>Telefonia Celular</option>
                                    <option>Telhados</option>
                                    <option>Tintas</option>
                                    <option>Transporte Escolar</option>
                                    <option>Troca de óleo</option>
                                    <option>Turismo</option>
                                    <option>Vídeo Locadora</option>
                                    <option>Vidraçarias</option>
                                </select>

                                <button type="submit" id="btnfiltrar" class="bntbf" name='pagina' value="filtrar">Filtrar</button>

							</form>
                            </li><li>
                    </li></ul>
                    <ul class="nav navbar-nav navbar-right" id="ullinha">
                        <li>
                            <form id="formbuscar" >
                                <input class="pesquisa" id="pesquisar" type="text" name="search" placeholder="Buscar..." required="required" >
								
								<button type="submit" id="btnfiltrar" class="bntbf" name='pagina' value="buscar">buscar</button>
								
							</form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--fim do filtro de pesquisa-->
            <div class="container">
                    <div class="col-md-12">

		 

<?php
		
	require_once("classes/DAO/listarDao.php");
	
	$listarDao = new ListarDao();
 

?>

 
<?php		 

				if (isset($_GET['pagina'])){
					$pagina = $_GET['pagina'];
					
	
					switch ($pagina){
						case "viewAnuncio";
							include_once("paginas/viewAnuncio.php");
							break;
/****************************FILTRO DE PESQUISA******************************************************/							
						case "buscar";
							$info = ($_GET['search']);
							$i=0;
							foreach($listarDao->retornarInformacoes1($info) as $consulta ){
?>
								<div class="col-md-12">
									<hr class="listarTraco">
								</div>	
								<div class="col-md-4" >
									<a href='?pagina=viewAnuncio&cod=<?=$consulta["idAnuncio"];?>'>
									<img <img title="visualizar anuncio!" src="imgUser/<?=$consulta["imagen"];?> " class="img-responsive">
									</a>
								</div>
									
								<div class="col-md-6">
									<a href='?pagina=viewAnuncio&cod=<?=$consulta["idAnuncio"];?>'>
									<h3><?=$consulta["empresa"];?></h3>
									</a>
									</br>	
									<pre id="preList">Endereço(s):</br><?=$consulta["endereco"];?></pre>
									<pre id="preList">Telefone(s):</br><?=$consulta["telefone"];?></pre>
									<pre id="preList">Quem Somos:</br><?=$consulta["quemSomos"];?></pre>
								</div>
<?php
							$i++;
							}
							if($i == 0){
?>
							<h3>Nenhum resultado encontrado!</h3>
<?php
							}
						
							break;
						
						case "filtrar";
							$info1 = ($_GET['bairro']);
							$info2 = ($_GET['categoria']);
							$i=0;
							foreach($listarDao->retornarInformacoes2($info1, $info2) as $consulta ){
?>
								<div class="col-md-12">
									<hr class="listarTraco">
								</div>	
								<div class="col-md-4" >
									<a href='?pagina=viewAnuncio&cod=<?=$consulta["idAnuncio"];?>'>
									<img <img title="visualizar anuncio!" src="imgUser/<?=$consulta["imagen"];?> " class="img-responsive">
									</a>
								</div>
									
								<div class="col-md-6">
									<a href='?pagina=viewAnuncio&cod=<?=$consulta["idAnuncio"];?>'>
									<h3><?=$consulta["empresa"];?></h3>
									</a>
									</br>	
									<pre id="preList">Endereço(s):</br><?=$consulta["endereco"];?></pre>
									<pre id="preList">Telefone(s):</br><?=$consulta["telefone"];?></pre>
									<pre id="preList">Quem Somos:</br><?=$consulta["quemSomos"];?></pre>
								</div>

<?php
							$i++;
							}
							if($i == 0){
?>
							<h3>Nenhum resultado encontrado!</h3>
<?php
							}
							break;
/****************************FIM FILTRO DE PESQUISA******************************************************/	
					}
				}else{
						include_once("paginas/listarEmpresa.php");
					}	
?>		
			</div>
        </div>
    <div class="section">
      <div class="container">
        <div class="row" align="right">
		 © Todos os direitos reservados - 2016
        </div>
      </div>
    </div>
    

</body></html>