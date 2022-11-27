<?php
    session_start();
    if ($_SESSION['usuario']) {
        $logado = $_SESSION['usuario'];
    } else {
        $logado = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/menu.css">
    <title>Menu</title>
</head>
<body>
<div class="container-fluid" style="background-color: #5368A6;">
    <div class="container" style="height: 100px;">
        <div class="row">
            <!-- LOGO DO ECOMERCE -->
            <div class="col-2" style="background-color: #5368A6; height: 100px;">
                <img class="row col-12 m-auto mt-2" src="_logo/logo.png" alt="Logo do e-commerce">
                <div class="row col-8 m-auto mt-2 local">
                    <img src="_icones/localizacao.png" alt="">
                </div>
            </div>
            <!-- MENU DO ECOMERCE -->
            <div class="col-7" style="background-color: #5368A6; height: 100px;">
                <div class="row m-auto mt-2 col-12">
                    <input type="search" name="buscar" id="buscar" placeholder="O que você esta procurando">
                </div>

                <div class="row m-auto mt-2 col-12">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-inline-block">
                        <li class="nav-item dropdown d-inline-block col-3 m-0">
                            <a class="nav-link dropdown-toggle d-inline-block meumenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <?php
                                $sql = "SELECT * 
                                            FROM meu_commerce.categorias 
                                            WHERE categoria_pai is not null";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                            ?>
                            <ul class="dropdown-menu submenu" style="width: 230px; opacity: .9;">
                            <?php
                                foreach($consulta as $linha){?>
                                
                                    <li>
                                        <a class="meumenu" href="?categoria=<?php echo $linha['id'];?>">
                                            <div class="item-menu" style="padding: 0px 10px 0px 10px;"><?php echo $linha['descricao'];?></div>
                                        </a>
                                        <!-- <a class="dropdown-item" href="?categoria=</a> -->
                                    </li>
                                
                                <?php
                                }?>
                            </ul>

                        </li>

                        <li class="nav-item d-inline-block col-3 m-0">
                            <a class="nav-link active d-inline-block meumenu" aria-current="page" href="index.php">Principal</a>
                        </li>

                        <li class="nav-item d-inline-block col-3 m-0">
                            <a class="nav-link d-inline-block meumenu" href="#">Ofertas</a>
                        </li>

                        <li class="nav-item d-inline-block col-2 m-0">
                            <a class="nav-link d-inline-block meumenu" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- LOGIN DO ECOMERCE -->
            <div class="col-3" style="background-color: #5368A6; height: 100px;">
                <div class="row col-11 m-auto mt-2 local">
                    <i class="fa-solid fa-tag col-1 m-0 p-0 pt-1"></i>
                    <p class="col-9 m-0 p-0" style="font-size: 1em; text-align: center;"><?php if ($logado <> '') { echo $_SESSION['usuario']; }?></p>
                </div>
                <a href="loginnovo.php">
                    <div class="row col-3 m-auto mt-2 local">
                        <i class="fa-solid fa-right-to-bracket col-3 m-0 p-0 pt-1"></i>
                        <p class="col-9 m-0 p-0">Entrar</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>    
</body>
</html>

