<?php
		
	require_once("classes/DAO/listarDao.php");
	
	$listarDao = new ListarDao();
?>
	
<div class="section">
	<div class="container">
		<div class="row">
     
			<div class="col-md-12">
				<hr class="listarTraco">
			</div>
			
<?php
	$i=0;
	foreach($listarDao->retornarInformacoes() as $consulta ){
?>
				
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
			<div class="col-md-12">
				<hr class="listarTraco">
			</div>

<?php
	$i++;
	if($i == 8){
	break;
	}
	}
?> 
			  
          
		</div>
	</div>
</div>