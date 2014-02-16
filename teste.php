<?php
$nomeFuncionario = "Manuel Ernesto";
$dataNascimento  = "26/06/1989";
$bI				 = "0015499LA039";
$telefone		 = "925584253";
$Morada			 = "Viana";
$perfil			 = 0;
$username		 = "cambota";
$senha 			 = "1234";
$data = explode("/", $dataNascimento);
$data = array_reverse($data);
$dataNascimento = implode("-", $data);

include_once 'fontes/conexao.php';

$sql = "insert into funcionario (nomeFuncionario, dataNascimento, bI, telefone, Morada, perfil, username, senha) values('".$nomeFuncionario."','".$dataNascimento."', '".$bI."', '".$telefone."', '".$Morada."', ".$perfil.", '".$username."', '".$senha."')";

if (mysql_query($sql, $conn)) 
{
	echo " Gravado com seucesso";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>