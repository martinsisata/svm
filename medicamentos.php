<meta charset="utf-8">
<?php
error_reporting(0);
include_once 'fontes/conexao.php';
	 $sql = "SELECT * FROM getMedicamentos WHERE nome like '".$_GET['busca']."%'"; 

$result = mysql_query($sql,$conn);

$conteudo="";
?>  

            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Quantidade</th>
            </tr> 
<?php
while ($linha=mysql_fetch_array($result)) 
{

	$conteudo .= 	"<tr>
						<td>". $linha['nome'] ."</td>
						<td>". $linha['preco'] ."</td>
						<td>". $linha['tipo']."</td>
						<td>". $linha['qtd'] ."</td>
					</tr>
					";
}

echo $conteudo;
?>
