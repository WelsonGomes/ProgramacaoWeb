<?php
    include "_lib/bdconn.php";
    
    session_start();

    if (empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: login.php');
        exit();
    }
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha   = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query   = "SELECT id, 
                       nome, 
                       email 
                  FROM usuarios 
                 WHERE email = '{$usuario}'  
                   and senha = '{$senha}'";
    
    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        exit();
    } else {
        header('Location: login.php');
        exit();
    }

?>