<?php
    $hostname = "sql201.infinityfree.com";
    $usuario = "if0_35432683";
    $senha = "hWua3AAwcqUg1";
    $bancodeDados = "if0_35432683_contatos";
    
    $conn = mysqli_connect($hostname, $usuario, $senha, $bancodeDados);

    if ($conn) {
        echo "A conexão com o banco de dados foi bem sucedida!!";

    } else {
        die('<br>Falha na conexão com o banco de dados: ') . mysqli_connect_error();
    }

    $sql = "SELECT * FROM contatos";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Telefone: " . $row["telefone"] . "<br><br>";
    }
} else {
    echo "Nenhum contato encontrado.";
}
?>