<?php
$nomeTipoMedicamento = "Comprimido";
$idFuncionario       = 8;

include_once 'fontes/conexao.php';

$sql = "insert into tipoMedicamento (nomeTipoMedicamento,idFuncionario) values('".$nomeTipoMedicamento."',".$idFuncionario.")";

if (mysql_query($sql, $conn)) 
{
	echo " Gravado com seucesso";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>