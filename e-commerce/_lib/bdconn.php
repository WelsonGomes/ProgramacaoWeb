<?php
//conexao
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=meu_commerce', $username, $password);
} catch(PDOException $e) {
    echo 'ERROr: ' . $e->getMessage();
};

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'meu_commerce');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel passar o proxy');