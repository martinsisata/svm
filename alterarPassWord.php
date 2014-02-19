<?php include_once 'validarsessao.php';?>
<?php
$idFuncionario   = 10;
$senha 			 = "cambota2014";

include_once 'fontes/conexao.php';

$sql = "update funcionario set 
		senha = '".$senha."'
		where idFuncionario = '".$idFuncionario."'";

if (mysql_query($sql, $conn)) 
{
	echo "Actualizado";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>