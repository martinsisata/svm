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
                    <h1>Cadastrar novo Funcion&aacute;rio</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label>Nome</label>
                                    <br />
                                    <input type="text" name="nomeFuncionario" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Sobre nome</label>
                                    <br />
                                    <input type="text" name="sobreNome" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Data de nascimento</label>
                                    <br />
                                    <input type="date" name="dataNascimento" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>B.I.</label>
                                    <br />
                                    <input type="text" name="numeroBI" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Telefone</label>
                                    <br />
                                    <input type="tel" name="numeroTel" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Morada</label>
                                    <br />
                                    <textarea class="textAreaNormal">
                                        
                                    </textarea>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Perfil</label>
                                    <br />
                                    <select class="comboBoxNormal">
                                        <option>
                                            Administrador
                                        </option>
                                        <option>
                                            Funcion&aacute;rio
                                        </option>
                                    </select>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br />
                                    <br />
                                    <center>
                                        <input type="submit" name="bntSubmit" value="Gravar" class="bntVermelho" />
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