<?php
    $num = "";
    $opcao = "";

    session_start();

    if (isset($_GET['opcao'])) {
        session_destroy();
        session_start();
    }

    // se foi clicado em um botão de numero
    if (isset($_POST["botao"])) {
        $num = $_POST["tela"].$_POST["botao"];

    };
    
    // se foi clicado em um botão de conta
    if (isset($_POST["opcao"])) {
        //$opcao = $_POST["opcao"]
        $_SESSION['opcao'] = $_POST["opcao"];

        $_SESSION['tela'] = $_POST["tela"];
        $num = "";

    };

    //se foi clicado no botão de igual
    if (isset($_POST["igual"])) {
        switch ($_SESSION['opcao']) {
            case "+": $num = $_SESSION['tela'] + $_POST['tela']; break;
            case "-": $num = $_SESSION['tela'] - $_POST['tela']; break;
            case "*": $num = $_SESSION['tela'] * $_POST['tela']; break;
            case "/": $num = $_SESSION['tela'] / $_POST['tela']; break; 
        };
        $_SESSION["tela"] = '';
        $_SESSION['opcao'] = '';
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
</head>
<body>
    <form method="post">
        <table border="2">
            <tr>
                <td colspan="4">
                    <input type="number" name="tela" value="<?php echo $num; ?>"><br>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="botao" value="1"></td>
                <td><input type="submit" name="botao" value="2"></td>
                <td><input type="submit" name="botao" value="3"></td>
                <td><input type="submit" name="opcao" value="/"></td>
            </tr>
            <tr>
                <td><input type="submit" name="botao" value="4"></td>
                <td><input type="submit" name="botao" value="5"></td>
                <td><input type="submit" name="botao" value="6"></td>
                <td><input type="submit" name="opcao" value="*"></td>
            </tr>
            <tr>
                <td><input type="submit" name="botao" value="7"></td>
                <td><input type="submit" name="botao" value="8"></td>
                <td><input type="submit" name="botao" value="9"></td>
                <td><input type="submit" name="opcao" value="-"></td>
            </tr>
            <tr>
                <td><input type="submit" name="botao" value="0"></td>
                <td><input type="submit" name="opcao" value="C"></td>
                <td><input type="submit" name="igual" value="="></td>
                <td><input type="submit" name="opcao" value="+"></td>
            </tr>
        </table>
    </form>
</body>
</html>