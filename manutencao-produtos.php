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
                    <h1>Manuten&ccedil;&atilde;o de produtos</h1>
                    <br />
                    <br />
                    
                    <!--Formulario de pesquisa-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <!--Primeiro filtro-->
                                <td>
                                    <select class="comboBoxNormal">
                                        <option>
                                            Todos do filtro1
                                        </option>
                                        <option>
                                            Filtro 1-1
                                        </option>
                                        <option>
                                            Filtro 1-2
                                        </option>
                                    </select>
                                </td>
                                
                                <!--Segundo filtro-->
                                <td>
                                    <select class="comboBoxNormal">
                                        <option>
                                            Todos do filtro2
                                        </option>
                                        <option>
                                            filtro 1-2
                                        </option>
                                        <option>
                                            Tipo2 2-3
                                        </option>
                                    </select>
                                </td>
                                
                                <!--Terceiro filtro-->
                                <td>
                                    <input type="date" name="" value="" placeholder="Apartir de..." class="textBoxSmall" />
                                </td>
                                
                                <td>
                                    <input type="submit" name="bntSubmitNovoProduto" value="Pesquisar" class="bntVermelho" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
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
                                    <a href="editar-produto.php">Editar</a> | <a href="apagar-produto.php">Apagar</a>
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
                                    <a href="editar-produto.php">Editar</a> | <a href="apagar-produto.php">Apagar</a>
                                </td>
                            </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
                        <br />
                        <br />
                        <div class="caixa">
                            <div class="caixa">
                                <a href="#" class="bntAzul"><label>Baixar PDF</label></a>
                            </div>
                            <div class="caixa">
                                <a href="#" class="bntVermelho"><labe>Imprimir</labe></a>
                            </div>
                        </div>
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