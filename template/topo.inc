<!--Topo principal-->
    <header id="topo">
    <!--Nome do usuario Logado-->
<?php

if (isset($_SESSION["nome"])) {?>
	    <p>

        Olá <?php $nome = $_SESSION["nome"]; echo $nome; ?> | <strong><a href="sair.php">Sair</a></strong>
      </p>
    <?php
}else{
?>
           <p><strong>Olá Seja Bem vindo ao Sistema de Venda de Medicamento - FLORA & FILHOS</strong></h1></p>

<?php
}
  ?>
    
    </header>