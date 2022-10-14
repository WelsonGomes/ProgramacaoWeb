<?php
    include "lib/bdconn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .desc {
            text-decoration: none;
            color: black;
        }
        .desc:hover{
            color: blue;
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row" style="background-color: red; height: 100px;">
            TOPO
        </div>
        <div class="row">
            menu horizontal
        </div>
        <div class="row">
            <div class="col-2">
                <?php
                    $sql = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai is null";
                    $consulta = $conn->prepare($sql);
                    $consulta->execute();

                    foreach($consulta as $linha){
                ?>
                    <a href="?categoria=<?php echo $linha['id'];?>">
                        <div class="item-menu"><?php echo $linha['descricao'];?></div>
                    </a>
                    <?php
                        //listar as sub-categorias
                        $sql_itens = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai = ".$linha['id'];
                        $subitens = $conn->prepare($sql_itens);
                        $subitens->execute();
                        foreach($subitens as $item){
                    ?>
                    - <a href="?categoria=<?php echo $item['id'];?>"><?php echo $item['descricao'];?></a><br>
                    <?php
                        }
                    }
                ?>
            </div>

            <div class="col-10">
                <?php
                    if(isset($_GET['categoria'])){
                        $sql = "SELECT p.id as id_produto, 
                                       p.categoria_id, 
                                       p.imagem, 
                                       p.descricao, 
                                       p.resumo, 
                                       c.categoria_pai, 
                                       c.id as id_categoria
                                  FROM produtos p
                            INNER JOIN categorias c
                                    ON p.categoria_id = c.categoria_pai OR p.categoria_id = c.id
                                 WHERE p.categoria_id = {$_GET['categoria']} OR c.categoria_pai = {$_GET['categoria']}
                              ORDER BY RAND()";
                    }
                    else {
                        $sql = "SELECT p.id as id_produto, 
                                       p.categoria_id, 
                                       p.imagem, 
                                       p.descricao, 
                                       p.resumo 
                                  FROM produtos p 
                              ORDER BY RAND()";
                    }
                    $consulta = $conn->prepare($sql);
                    $consulta->execute();
                   
                    foreach($consulta as $linha){?>

                    <div class="card" style="width: 18rem; display: inline-block; margin: 10px;">
                        <img style="width: 18rem;" src="<?php echo $linha['imagem'];?>" alt="...">
                        <div class="card-body">
                            <a class="desc" href="descricao.php"><h5 class="card-title"><?php echo $linha['descricao'];?></h5></a>
                            <p class="card-text"><?php echo $linha['resumo']?></p>

                        </div>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
        <div class="row" style="background-color: blue;">
            Rodapé
        </div>
    </div>  
    
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>