<?php
    include "bdconn.php";

    if (isset($_POST['email']) || isset($_POST['senha'])){
        if (strlen($_POST['email']) > 0 and strlen($_POST['senha']) > 0) {
            echo "passou";
        } else {
            echo "Erro";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="" method="post">
        <h4>Email</h4>
        <input type="email" name="email" id="email">
        <br>
        <h4>Senha</h4>
        <input type="password" name="senha" id="senha">
        <br><br>
        <button type="submit" name="entrar">Login</button>
    </form>
</body>
</html>