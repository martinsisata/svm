<?php

    session_start();
    $nome = $_SESSION["nome"];

    session_destroy();

    print"<script>
    alert('Sr. $nome Obrigado por utilizar o sistema!')
    location.href='index.php?pg=login';
    </script>";


?>
