<?php
$descricao       ="1 uma caixa";
$quantidade      = 1;
$idMedicamento   = 4;
$idFuncionario   = 8;
$data = date('Y-m-d');
include_once 'fontes/conexao.php';

//Buscar o preço do produto a ser vendido
$buscarPreco = "select preco, quantidade from medicamento where idMedicamento=".$idMedicamento."";
$resulte = mysql_query($buscarPreco,$conn);
$row = mysql_fetch_array($resulte);
$precoUnitario = $row [0];
//Verificar a quantidade existente
$quantidadeExistente = $row [1];

if ($quantidadeExistente >=$quantidade) {
$quantidadeActualizada = $quantidadeExistente - $quantidade;

	$descontarQtd ="update medicamento set quantidade =".$quantidadeActualizada."
	where idMedicamento =".$idMedicamento."";
if (mysql_query($descontarQtd,$conn)) {
		//Calcular o total
$total = $precoUnitario * $quantidade;

//Inserir na base de dado a venda feita 

$sql = "insert into venda (precoUnitario,descricao, quantidade,total, idMedicamento, idFuncionario, dataVenda) 
values('".$precoUnitario."','".$descricao."',".$quantidade.",'".$total."',".$idMedicamento.", ".$idFuncionario.", '".$data."')";

if (mysql_query($sql, $conn)) 
{
	echo " Gravado com seucesso";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

}


}else
{
	echo "esta mal";
}

?>