<?php
$idMedicamento     = 4;
$nomeMedicamento   = "Paracetamor";
$preco             = "175";
$idTipoMedicamento = 6;
$quantidade        = 21;
$idFuncionario     = 8;

include_once 'fontes/conexao.php';

$sql = "update medicamento set
		nomeMedicamento   ='".$nomeMedicamento."',
		preco             ='".$preco."', 
		idTipoMedicamento =".$idTipoMedicamento.",
		quantidade        =".$quantidade."
		where idMedicamento =".$idMedicamento."
		";

if (mysql_query($sql, $conn)) 
{
	echo " Actualizado com sucesso!";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>