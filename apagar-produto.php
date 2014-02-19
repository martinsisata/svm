<?php include_once 'validarsessao.php';?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            <?php
                //Barra topo do sistema
                require_once('template/topo.inc');
                
                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //Barra de menus
                require_once('template/barra-menus.inc');
            ?>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Tem certesa que quer apagar...</h1>
                    <br />
                    <br />
                    
                    <!--Formulario da nova venda-->
                    <form name="formNovaVenda" method="get" action="#">
                        <div class="tableRowBrancoBrilho">
                            <input type="hidden" name="nomeProduto" value="<?php $_REQUEST[$nomeProduto] ?>" />
                            <input type="hidden" name="nomeProduto" value="<?php $_REQUEST[$idProduto] ?>" />
                            <label style="color:#c45454; padding:20px">
                                Nome do produto
                            </label>
                        </div>
                        <br />
                        
                        <br />
                        <br />
                        <a href="listagem-produtos.php" class="bntAzul"><label>Cancelar</label></a>
                        <input type="submit" name="bntSubmit" value="Apagar" class="bntVermelho" />
                    </form>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>

            <?php
                //Rodape do sistema
                require_once('template/footer.inc');
            ?>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>