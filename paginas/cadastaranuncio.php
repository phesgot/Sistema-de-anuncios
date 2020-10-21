<script>
/*Criando botão add+*/
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
		?>
<br>
<!--Formulario Cadastrar Anuncio - Inicio-->
<div class="col-md-6">
	<h3>&gt;&gt;Cadastrar Anúncio</h3>
	<form role="form" method="post" enctype="multipart/form-data">
	    
		<div class="form-group">
			<label class="control-label">Imagem de Capa</label>
				<p class="text-primary">**Para uma melhor vizualização insira uma imagem com resolução de 1000px X 200px</p>
			<input class="form-control" type="file" name="imagenCapa" multiple>
		</div>

		<div class="form-group">
			<label class="control-label">*Nome da Empresa</label>
			<input class="form-control" type="text" name="empresa" required="required">		
		</div>
	
		<div class="form-group">
			<label class="control-label">*Categoria</label>
				<select class="form-control" name="categoria" required="required">
					<option value="">SELECIONE</option>
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
			<button type="button" class="btn btn-default" onclick="Add(2)">Add + Categorias</button>
	</br>
	<div id=2 style="display: none;">	
		<div class="form-group">
			<label class="control-label">Categoria Adicional 1</label>
				<select class="form-control" name="categoria1">
					<option value="">SELECIONE</option>
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
					<option value="">SELECIONE</option>
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
					<option value="">SELECIONE</option>
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
				<option>Brasília</option>
			</select>
    </div>
	
    <div class="form-group">
        <label class="control-label">*Bairro</label>
			<select class="form-control" name="bairro" required="required">
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
    <p class="text-primary">*Adicione mais de um bairro caso sua empresa exista em mais de uma localidade.</p>
	<button type="button" class="btn btn-default" onclick="Add(1)">Add + Bairros</button>
	</br>
	</br>

	<div id=1 style="display: none;">	
		<div class="form-group">
			<label class="control-label">Bairro Adicional 1</label>
				<select class="form-control" name="bairro1">
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
		
        <div class="form-group">
            <label class="control-label">Bairro Adicional 2</label>
				<select class="form-control" name="bairro2">
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
		
        <div class="form-group">
            <label class="control-label">Bairro Adicional 3</label>
				<select class="form-control" name="bairro3">
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
		
        <p class="text-primary">*</p>
	</div>
    <div class="form-group">
        <label class="control-label">*UF</label>
			<select class="form-control" name="uf" required="required">
                <option>DF</option>
            </select>
    </div>
		
    <div class="form-group">
        <label class="control-label">*Endereço</label>
            <textarea class="form-control" name="endereco" required="required"></textarea>
    </div>
		
		
		
</div>		
<div class="col-md-6">
		
	<h3>&gt;&gt;Informações</h3>
		
	<div class="form-group">
		<label class="control-label">*Horario de funcionamento</label>
            <textarea class="form-control" name="horFuncion" required="required"></textarea>
    </div>
		
	<div class="form-group">
		<label class="control-label">Quem Somos</label>
            <textarea class="form-control" name="qSomos"></textarea>
	</div>
		
	<div class="form-group">
		<label class="control-label">Informações Adicionais</label>
            <textarea class="form-control" name="informacoesAdicionais"></textarea>
	</div>
		
	<h3>&gt;&gt;Contato</h3>
		
	<div class="form-group">
		<label class="control-label">*Telefones</label>
            <textarea class="form-control" name="telefone" required="required"></textarea>
	</div>
		
	<div class="form-group">
		<label class="control-label">E-mail</label>
            <textarea class="form-control" name="email"></textarea>
	</div>
		
	<div class="form-group">
		<label class="control-label">site</label>
            <textarea class="form-control" name="site"></textarea>
	</div>
		
	<div class="form-group">
		<label class="control-label">URL: Video do Youtube</label>
            <input class="form-control" name="url"></input>
	</div>
		

	<button  type="submit" class="btn btn-default" name="salvar">Salvar</button>
</div>

<?php
/*Codigo cadstrar anuncio*/
		
if (isset($_POST['salvar'])) {
				
	$pesquisa = $anuncioDao->existeAnuncio($_SESSION['idCadastro']);

	if($pesquisa == 1){
		?>
			<script type="text/javascript">
				alert("Você já possui um anuncio cadastrado!");
			</script>
		<?php
	}else{				
	$imagen = $upLoad->upLoadFile($_FILES['imagenCapa'], "../imgUser/", ".jpg");
							
		$cadastroAnun->setImagen($imagen);
		$cadastroAnun->setEmpresa($_POST['empresa']);
		$cadastroAnun->setCidade($_POST['cidade']);
		$cadastroAnun->setUf($_POST['uf']);
		$cadastroAnun->setBairro($_POST['bairro']);
		$cadastroAnun->setBairro1($_POST['bairro1']);
		$cadastroAnun->setBairro2($_POST['bairro2']);
		$cadastroAnun->setBairro3($_POST['bairro3']);
		$cadastroAnun->setEndereco($_POST['endereco']);
		$cadastroAnun->setHorarioDeFuncionamento($_POST['horFuncion']);
		$cadastroAnun->setQuemSomos($_POST['qSomos']);
		$cadastroAnun->setInformacoesAdicionais($_POST['informacoesAdicionais']);
		$cadastroAnun->setTelefone($_POST['telefone']);
		$cadastroAnun->setEmail($_POST['email']);
		$cadastroAnun->setSite($_POST['site']);
		$cadastroAnun->setCategoria($_POST['categoria']);
		$cadastroAnun->setCategoria1($_POST['categoria1']);
		$cadastroAnun->setCategoria2($_POST['categoria2']);
		$cadastroAnun->setCategoria3($_POST['categoria3']);
		$cadastroAnun->setUrl($_POST['url']);
		$cadastroAnun->setIdUsuario($_SESSION['idCadastro']);
				

	if ($anuncioDao->cadastrarAnuncio($cadastroAnun)) {
		?>
			<script type="text/javascript">
				alert("Anúncio cadastrado com sucesso!");
			</script>
		<?php
		} else {
			?>
				<script type="text/javascript">
					alert("Erro ao cadastrar anúncio!");
				</script>
			<?php
		}
	}
				
} 
			
?>