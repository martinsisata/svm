<?php include_once 'validarsessao.php';?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            
            <?php
                //topo do sistema
                require_once('template/topo.inc');

                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //barra de menus
                require_once('template/barra-menus.inc');
            ?>
    
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Alterar produto</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label>Nome do produto</label>
                                    <br />
                                    <input type="text" name="nomeProduto" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Preço (Só números)</label>
                                    <br />
                                    <input type="number" name="preco" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Tipo</label>
                                    <br />
                                    <select class="comboBoxNormal">
                                        <option>
                                            Analgésico
                                        </option>
                                        <option>
                                            Antí-inflamatórios
                                        </option>
                                        <option>
                                            ...
                                        </option>
                                    </select>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Quantidade (Só números)</label>
                                    <br />
                                    <input type="number" name="quantidade" value="" class="textBoxNormal" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br />
                                    <center>
                                        <a href="listagem-produtos.php" class="bntAzul"><label>Cancelar</label></a>
                                        <input type="submit" name="bntSubmit" value="Alterar" class="bntVermelho" />
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>
           
            
            <!--Espaçamento parao rodape-->
            <br />
            <br />
            <br />
            <!--Rodape padrao-->
            <footer id="rodape">
                <p>Todos direitos reservados.2014</p>
            </footer>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>