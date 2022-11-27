<?php
    include "_lib/bdconn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Meu e-commerce</title>
    <script src="https://kit.fontawesome.com/1ebb8d9a9c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="background-color: #E6E6E6;">
    <!-- INCLUINDO O MENU -->
    <?php
        include "menu.php";
    ?>
    <!-- SLIDES DE APRESENTAÇÃO -->
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="_slides/01.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="_slides/02.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="_slides/03.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <div class="container m-auto pt-4 pb-4">
        <div class="row col-12 m-auto mt-3" style="background-color: white; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.568);">
            <div class="col-3 m-0 p-3">
                <h5>Pagamento rápido e seguro</h5>
                <p>Pague com o Mercado Pago</p>
            </div>
            <div class="col-3 m-0 p-3">
                <h5>Em até 10x sem juros</h5>
                <p>Ver mais</p>
            </div>
            <div class="col-3 m-0 p-3">
                <h5>Parcelamento sem cartão</h5>
                <p>Conheça o mercado credito</p>
            </div>
            <div class="col-3 m-0 p-3">
                <h5>Aprovado na hora com Pix</h5>
                <p>Ver mais</p>
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