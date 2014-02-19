<?php include_once 'validarsessao.php';?>
<?php

$idMedicamento     = 4;
$quantidade        = 21;

include_once 'fontes/conexao.php';
//Buscar a quantidade exixte
$buscarQuantidade = "select quantidade from medicamento where idMedicamento=".$idMedicamento."";
$result = mysql_query($buscarQuantidade,$conn);
$row    = mysql_fetch_array($result);
$qtdExistente = $row ['quantidade'];
//Adicionar na quantidade existe 
$qtdActualizada = $qtdExistente + $quantidade;

//Actualizar na Base de daos 
$updateQuantidade ="update medicamento set quantidade=".$qtdActualizada." where idMedicamento =".$idMedicamento."";

if (mysql_query($updateQuantidade,$conn)) {
	echo "Actualizado";
}else{
	echo "erro<br>$updateQuantidade";
}




?>