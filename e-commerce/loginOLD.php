<?php
    include "_lib/bdconn.php";
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/login.css">
    <script src="https://kit.fontawesome.com/1ebb8d9a9c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Acessar conta</title>
</head>
<body style="background-color: #E6E6E6;">
    <!-- INCLUINDO O MENU -->
    <?php
        include "menu.php";
    ?>

    <!-- INCLUINDO A AREA DE LOGIN -->
    <div class="container-fluid m-auto mt-4">
        <div class="container">
            <div class="row conteiner">
                <div class="col-7 foto p-0">
                    <div class="icon col-11 m-auto">
                        <img class="col-10 m-auto" src="_icones/slide-login.png" alt="Sample image">
                    </div>
                </div>
                <div class="col-5 foto">
                     <form action="executa_login.php" method="post">
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Login</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"/>
                            <label for="email">Email cadastrado</label>
                        </div>
                        <br>
                        <!-- Password input -->
                        <div class="form-floating">
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Entre com sua senha" />
                            <label for="senha">Senha</label>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Manter conectado
                            </label>
                            </div>
                            <a href="#!" class="text-body">Esqueceu a Senha?</a>
                        </div>
                        <!-- Botão do login -->
                        <div class="d-grid gap-2 text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg" name="entrar" style="padding-left: 2.5rem; padding-right: 2.5rem;">Fazer login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Não tem uma conta? <a href="#!" class="link-danger">Criar conta</a></p>
                        </div>
                    </form> 
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>