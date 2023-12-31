<?php
    $hostname = "sql201.infinityfree.com";
    $bancoDados = "if0_35432683_contatos";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $bancoDados, $usuario, $senha);
    if ($mysqli -> connect_errno) {
        echo "Falha ao connectar:(" . $mysqli -> connect_error . ")";
    }
?>