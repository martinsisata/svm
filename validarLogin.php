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

                echo "Voce é administrador<br>";
                echo $row['nome'];
                echo "<br>";
                echo $row['id'];
                echo "<br>";
                echo $row['perfil'];
        }elseif ($_SESSION["perfil"] == 0) {
            echo "Vocenão é administrador";

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
