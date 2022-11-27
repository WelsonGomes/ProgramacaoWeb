<?php
    include "bdconn.php";
    
    session_start();

    if (empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: index.php');
        exit();
    }
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha   = mysqli_real_escape_string($conn, $_POST['senha']);

    $query   = "SELECT id, 
                       nome, 
                       email 
                  FROM usuarios 
                 WHERE email = '{$usuario}' 
                   and senha = '{$senha}'";
    
    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1){
        $_SESSION['usuario'] = $usuario;
        // header('Location: index.php');
        echo "Olá ", $_SESSION['usuario'];
        exit();
        
    } else {
        // header('Location: index.php');
        echo "NÃO LOGADO";
        exit();
        
    }

?>