<?php
error_reporting(0);
ini_set( 'default_charset', 'utf-8');
    //sessao -> espaço de memória no navegador
    session_start();
    $user = trim($_POST["user"]);
    $senha = $_POST["senha"];

    $sql = "select * from login where username = '".$user."'
     and senha = '".$senha."'";

    include_once 'fontes/conexao.php';

    $result = mysql_query($sql,$conn);

    if(mysql_num_rows($result) == 1){
        //echo "Logado!";
        $row = mysql_fetch_array($result);


        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["id"] = $row["id"];
#Verificar as categoria
        if ($_SESSION["perfil"]==1) {
            $dataActual = date('d-m-Y');
            $hora = date('H:i');
            $idFuncionario = $_SESSION ['id'];
            $entrada = "insert into controleUser values (null,1,'".$dataActual."','".$hora."',".$idFuncionario.") ";
            if (mysql_query($entrada,$conn)) {
                print"<script> alert('Senja Bem Vindo')</script>";
            header("Location:home.php");
            }else{
                echo "não gravou";
            }
            
        }elseif ($_SESSION["perfil"] == 0) {
            echo "Voce não é administrador";

        }else{
                    print"<script>
                alert('Não tem Categoria')
                location.href='index.php?pg=login';
                </script>";
        }
#Termino da verificação da categoria



    }else{
print"<script>
                alert('Login/Senha inválido')
                location.href='index.php?pg=login';
                </script>";
    }

    mysql_close($conn);   

?>
