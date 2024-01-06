<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <?php 
        include("banco.php");
    ?>

    <header>
        <h1>
            Agenda de Contatos
        </h1>
    </header>
    
    <main>
        <h2>Login</h2>

        <form action="post">
            <label for="src/php/banco.php">
                <p>Nome do usuário</p>
                <input type="text" id="usuario" name="nome">
            </label>
            
            <label for="">
                <p>Senha</p>
                <input type="password" id="senha">
            </label>
        </form>

        <input type="submit" value="Enviar" src="src/php/banco.php">
        <a href="http://">Cadastrar</a>
    </main>
</body>
</html>