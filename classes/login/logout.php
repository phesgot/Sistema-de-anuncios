<?php

session_start();

if ($_SESSION["logado"]) {
    
    $_SESSION["idCadastro"] = null;
    $_SESSION['empresa'] = null;
    $_SESSION['usuario'] = null;
    $_SESSION['logado'] = null;
}
         ?>
        <script>
            document.location.href = "../../paginas/anuncie_login.php?acao=logout";
        </script>  
        <?php 
?>