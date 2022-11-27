<?php
//conexao
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'meu_commerce');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel passar o proxy');