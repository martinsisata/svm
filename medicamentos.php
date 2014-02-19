<meta charset="utf-8">
<?php
error_reporting(0);
include_once 'fontes/conexao.php';
	 $sql = "SELECT * FROM getMedicamentos WHERE nome like '".$_GET['busca']."%'"; 

$result = mysql_query($sql,$conn);

$conteudo="";
?>  

           <tr class="tableHeader">
                                <td>
                                    NOME DO PRODUTO
                                </td>
                                <td>
                                    PREÇO
                                </td>
                                <td>
                                    TIPO
                                </td>
                                <td>
                                    QUANTIDADE
                                </td>
                                <td>
                                    AC&Ccedil;&Atilde;O
                                </td>
                            </tr>

<?php

while ($linha=mysql_fetch_array($result)) 

	$conteudo .= 	"<tr class='tableRowBrancoBrilho'>
						<td>". $linha['nome'] ."</td>
						<td>". $linha['preco'] ."</td>
						<td>". $linha['tipo']."</td>
						<td>". $linha['qtd'] ."</td>
<td><a href='nova-venda.php' class='bntVermelhoSmall'style='color:#fff'><labe>Vender</labe></a></td>

                        "
                        ?>
					</tr>
					 <?php
					"";


echo $conteudo;
?>
