<?php
$nomeMedicamento   = "Mnhasjhd";
$preco             = "175";
$idTipoMedicamento = 6;
$quantidade        = 0;
$idFuncionario     = 8;

include_once 'fontes/conexao.php';

$sql = "insert into medicamento (nomeMedicamento,preco, idTipoMedicamento,quantidade, idFuncionario) 
values('".$nomeMedicamento."','".$preco."',".$idTipoMedicamento.",".$quantidade.",".$idFuncionario.")";

if (mysql_query($sql, $conn)) 
{
	echo " Gravado com seucesso";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>