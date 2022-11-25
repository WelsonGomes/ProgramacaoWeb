<?php
    include "_lib/bdconn.php";

    if (!isset($_SESSION)){
        session_start();
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ebb8d9a9c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Meu e-commerce</title>
</head>
<body>
     <!-- INCLUINDO O MENU -->
    <?php
        include "menu.php";
    ?>  
    <!-- INCUINDO O PRODUTO ESCOLHIDO -->
    <div class="container-fluid" style="background-color: blue;">
        <div class="container" style="background-color: red;">
            <div class="row" style="background-color: blue;">
                <div class="icone">
                    <img src="" alt="...">
                </div>
                <div class="desc">

                </div>
            </div>
        </div>
    </div>


    <!-- INCLUINDO PRODUTOS -->
    <?php
        include "produtos.php";
    ?>
    <!-- RODAPÉ -->
    <?php
        include "rodape.php";
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>