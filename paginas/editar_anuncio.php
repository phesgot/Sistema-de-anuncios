<script>
<!--Código botão add+-->
function Add(mostrar){

 var display = document.getElementById(mostrar).style.display;
 if(display == 'none') document.getElementById(mostrar).style.display = 'block';
 else
document.getElementById(mostrar).style.display = 'none';

}

</script>
<!--conexao-->
<?php
		
	require_once("../classes/DAO/AnuncioDao.php");
	require_once("../classes/entidade/cadastroAnun.php");
	require_once("../classes/upLoad.php");
			
	$anuncioDao = new AnuncioDao();
	$cadastroAnun = new CadastroAnun();
	$upLoad = new UpLoad();
				
	if($anuncioDao->existeAnuncio($_SESSION['idCadastro']) == false ){
		?>
			<script type="text/javascript">
				alert("Você ainda não possui anúncio cadastrado!");
				window.location = '?pagina=iniciopainel';
			</script>
		<?php							
	}
			
	foreach($anuncioDao->retornarAnuncio($_SESSION['idCadastro']) as $editar){
?>
<!--form editar anuncio-->			
<br>
	<div class="col-md-6">
		<h3>&gt;&gt;Editar Anúncio</h3>
		<form role="form" method="post" enctype="multipart/form-data">
	    
			<div class="form-group">
				<label class="control-label">Imagem de Capa</label>
					<p class="text-primary">*Para uma melhor vizualização insira uma imagem com resolução de 1000px X 200px</p>
					<input class="form-control" type="file" name="imagemCapa" value=""></input>
			</div>
	

			<div class="form-group">
				<label class="control-label">*Nome da Empresa</label>
					<input class="form-control" type="text" name="empresa" required="required" value="<?=$editar["empresa"];?>">		
			</div>
	
			<div class="form-group">
				<label class="control-label">*Categoria</label>
					<select class="form-control" name="categoria" required="required">
						<option value="<?=$editar["categoria"];?>"><?=$editar["categoria"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
			</div>
	

		<p class="text-primary">*Adicione mais de uma categoria se nescessario.</p>
			<button type="button" class="btn btn-default" onclick="Add(2)">Add/Editar + Categorias</button>
		</br>
		<div id=2 style="display: none;">	
			<div class="form-group">
				<label class="control-label">Categoria Adicional 1</label>
					<select class="form-control" name="categoria1">
						<option value="<?=$editar["categoria1"];?>"><?=$editar["categoria1"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
			</div>
		
			<div class="form-group">
				<label class="control-label">Categoria Adicional 2</label>
					<select class="form-control" name="categoria2">
						<option value="<?=$editar["categoria2"];?>"><?=$editar["categoria2"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
			</div>
		
			<div class="form-group">
				<label class="control-label">Categoria Adicional 3</label>
					<select class="form-control" name="categoria3">
						<option value="<?=$editar["categoria3"];?>"><?=$editar["categoria3"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
			</div>
		
			<p class="text-primary">*</p>
		</div>
	
	
	
		<h3>&gt;&gt;Localidade</h3>
	
		<div class="form-group">
			<label class="control-label">*Cidade</label>
				<select class="form-control" name="cidade" required="required">
					<option value="<?=$editar["cidade"];?>"><?=$editar["cidade"];?></option>
				</select>
		</div>
	
		<div class="form-group">
			<label class="control-label">*Bairro</label>
				<select class="form-control" name="bairro" required="required">
					<option value="<?=$editar["bairro"];?>"><?=$editar["bairro"];?></option>
					<option value="">""DEIXAR EM BRANCO""</option>
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
		<p class="text-primary">*Adicione mais de um bairro caso sua empresa exista em mais de uma localidade.</p>
		<button type="button" class="btn btn-default" onclick="Add(1)">Add/Editar + Bairros</button>
		</br>
		</br>

		<div id=1 style="display: none;">	
			<div class="form-group">
				<label class="control-label">Bairro Adicional 1</label>
					<select class="form-control" name="bairro1">
						<option value="<?=$editar["bairro1"];?>"><?=$editar["bairro1"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
		
			<div class="form-group">
				<label class="control-label">Bairro Adicional 2</label>
					<select class="form-control" name="bairro2">
						<option value="<?=$editar["bairro2"];?>"><?=$editar["bairro2"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
		
			<div class="form-group">
				<label class="control-label">Bairro Adicional 3</label>
					<select class="form-control" name="bairro3">
						<option value="<?=$editar["bairro3"];?>"><?=$editar["bairro3"];?></option>
						<option value="">""DEIXAR EM BRANCO""</option>
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
		
			<p class="text-primary">*</p>
		</div>
			<div class="form-group">
				<label class="control-label">*UF</label>
					<select class="form-control" name="uf" required="required">
						<option value="<?=$editar["uf"];?>"><?=$editar["uf"];?></option>
					</select>
			</div>
		
			<div class="form-group">
				<label class="control-label">*Endereço</label>
					<textarea class="form-control" name="endereco" required="required"><?=$editar["endereco"];?></textarea>
			</div>
	</div>		
	<div class="col-md-6">
		
        <h3>&gt;&gt;Informações</h3>
		
        <div class="form-group">
            <label class="control-label">*Horario de funcionamento</label>
				<textarea class="form-control" name="horFuncion" required="required"><?=$editar["horarioDeFuncionamento"];?></textarea>
        </div>
		
        <div class="form-group">
            <label class="control-label">Quem Somos</label>
				<textarea class="form-control" name="qSomos"><?=$editar["quemSomos"];?></textarea>
        </div>
		
        <div class="form-group">
            <label class="control-label">Informações Adicionais</label>
				<textarea class="form-control" name="informacoesAdicionais"><?=$editar["informacoesAdicionais"];?></textarea>
        </div>
		
        <h3>&gt;&gt;Contato</h3>
		
        <div class="form-group">
            <label class="control-label">*Telefones</label>
				<textarea class="form-control" name="telefone" required="required" ><?=$editar["telefone"];?></textarea>
        </div>
		
        <div class="form-group">
            <label class="control-label">E-mail</label>
				<textarea class="form-control" name="email" ><?=$editar["email"];?></textarea>
        </div>
		
        <div class="form-group">
            <label class="control-label">site</label>
				<textarea class="form-control" cols="15" wrap="off" name="site"><?=$editar["site"];?></textarea>
        </div>
		
        <div class="form-group">
            <label class="control-label">URL: Video do Youtube</label>
				<input class="form-control" name="url" value='<?=$editar["url"];?>'></input>
        </div>
		

		<button  type="submit" class="btn btn-default" name="salvar">Alterar Anuncio</button>
	</div>
</form>

<?php
	}
?>
				
<?php
/*Código editar anuncio*/				
	if (isset($_POST['salvar'])) {
				
		$idUsuario = $_SESSION['idCadastro'];
				
		$imagem = $upLoad->upLoadFile($_FILES['imagemCapa'], "../imgUser/", ".jpg");
					
		if ($imagem != null){
					
			$anuncioDao->alterarImagem($imagem, $idUsuario);
		}
					
		$empresa = ($_POST['empresa']);
		$cidade = ($_POST['cidade']);
		$uf = ($_POST['uf']);
		$bairro = ($_POST['bairro']);
		$bairro1 = ($_POST['bairro1']);
		$bairro2 = ($_POST['bairro2']);
		$bairro3 = ($_POST['bairro3']);
		$endereco = ($_POST['endereco']);
		$horFuncion = ($_POST['horFuncion']);
		$qSomos = ($_POST['qSomos']);
		$informacoesAdicionais = ($_POST['informacoesAdicionais']);
		$telefone = ($_POST['telefone']);
		$email = ($_POST['email']);
		$site = ($_POST['site']);
		$categoria = ($_POST['categoria']);
		$categoria1 = ($_POST['categoria1']);
		$categoria2 = ($_POST['categoria2']);
		$categoria3 = ($_POST['categoria3']);
		$url = ($_POST['url']);
				
		if ($anuncioDao->alterarAnuncio($empresa, $cidade, $uf, $bairro, $bairro1, $bairro2, $bairro3, $endereco, 
			$horFuncion, $qSomos, $informacoesAdicionais, $telefone, $email, $site, $categoria, $categoria1, $categoria2, $categoria3, $url, $idUsuario)) {
		} 
		?>
			<script type="text/javascript">
				alert("Anúncio alterado com suscesso!");
				window.location = '?pagina=editaranuncio';
			</script>
		<?php
	}
				
			 
			
?>