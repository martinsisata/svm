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
                    <h1>Nova venda</h1>
                    <br />
                    <br />
                    
                    <!--Formulario da nova venda-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <input type="text" name="q" value="" class="textBoxNormal" />
                                </td>
                                <td>
                                    <input type="submit" name="bntSubmitNovoProduto" value="Pesquisar" class="bntAzul" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    
                    <!--
                        A tabela abaixo so aparece depois
                        do usuario clicar em submit
                    -->
                    
                        <table class="table centralizarDiv">
                            <tr>
                                <td style="padding:6px 0px 24px 0px; color:#fff">
                                    Resultados da pesquisa:
                                </td>
                            </tr>
                            <!--Cabecalho da listagem-->
                            <tr class="tableHeader">
                                <td>
                                    NOME DO PRODUTO
                                </td>
                                <td>
                                    QUANTIDADE
                                </td>
                                <td>
                                    TIPO
                                </td>
                                <td>
                                    PRE&Ccedil;O
                                </td>
                                <td>
                                    AC&Ccedil;&Atilde;O
                                </td>
                            </tr>
                            <br />
                            <br />
                            
                            <!--Estilo dinamico para as linhas das tabelas-->
                            <?php
                                for($i=0; $i<=20; $i++){
                                    $n = $i%2;
                                    if($n == 1){
                                        $estilo = 'tableRowBrancoBrilho';
                                    }
                                    else{
                                        $estilo = 'tableRowBrancoFosco';
                                    }
                            ?>
                            
                            <!--Conteudo-->
                            <tr class="<?php print $estilo?>">
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <a href="nova-venda.php" class="bntVermelhoSmall" style="color:#fff"><labe>Vender</labe></a>
                                </td>
                            </tr>
                            
                            <tr class="<?php print $estilo?>">
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <a href="nova-venda.php" class="bntVermelhoSmall" style="color:#fff"><labe>Vender</labe></a>
                                </td>
                            </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
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

