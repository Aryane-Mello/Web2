<?php
    $conexao = mysqli_connect ("localhost", "root", "", "FashionWall");

    if (!$conexao){
        echo "Erro ao conectar" . mysqli_connect_error();
    }
?>
