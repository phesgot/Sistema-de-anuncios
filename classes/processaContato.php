<?php
	
	$para = "contato@dfachei.pe.hu";
	$assunto = "Contato pelo DF Achei";
	
	$nome= $_REQUEST['nome'];
	$telefone= $_REQUEST['telefone'];
	$email= $_REQUEST['email'];
	$assun= $_REQUEST['assunto'];
	$menssagem= $_REQUEST['menssagem'];
	
			$corpo= "<Strong> Menssagem de contato</Strong><br><br>";
			$corpo.= "<br><Strong> Nome: </Strong> $nome";
			$corpo.= "<br><Strong> Telefone: </Strong> $telefone";
			$corpo.= "<br><Strong> E-mail: </Strong> $email";
			$corpo.= "<br><Strong> Assunto: </Strong> $assun";
			$corpo.= "<Strong> Menssagem: </Strong> $menssagem";
			
			$header= "Content-type: text/html; charset= utf-8\n";
			$header.= "From: $email Reply_to $email\n";
			
	@mail($para, $assunto, $corpo, $header);
	
	
	?>
		<script type="text/javascript">
			alert("Mensagem enviada com sucesso, agradecemos seu contato!");
			
			window.location = "../paginas/contato.php";
		</script>
	<?php
	
	
?>