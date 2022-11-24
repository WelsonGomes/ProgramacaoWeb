<style>
    ol > li {
        display: inline-block;
        vertical-align: middle;
    }

    ul > li > a {
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9em;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        vertical-align: middle;
        margin-left: auto;
    }

    .local:hover {
        border: 1px solid #736C36;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.568);
    }

    input {
        outline: none;
        border: white;
        border-radius: 5px;
        font-size: 1.2em;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.568);
    }
</style>
<div class="container-fluid" style="background-color: #FFF159;">
    <div class="container" style="height: 100px;">
        <div class="row">
            <!-- LOGO DO ECOMERCE -->
            <div class="col-2" style="background-color: #FFF159; height: 100px;">
                <img class="row col-12 m-auto mt-2" src="imagens/logo.png" alt="Logo do e-commerce">
                <div class="row col-8 m-auto mt-2 local" style="height: 40px;">
                    <i class="fa-solid fa-location-dot col-1 m-auto"></i>
                    <p class="col-7 m-auto p-0" style="font-size: .8em;">Localização</p>
                    <p class="col-9 m-auto pb-0" style="font-size: .8em; color: #736C36;">Enviar para</p>
                </div>
            </div>
            <!-- MENU DO ECOMERCE -->
            <div class="col-7" style="background-color: #FFF159; height: 100px;">
                <div class="row m-auto mt-2 col-12">
                    <input type="search" name="buscar" id="buscar" placeholder="O que você esta procurando">
                </div>
                <div class="row m-auto mt-2 col-12">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item" style="text-align: left;">
                            <a href="">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a href="">Ofertas do dia</a>
                        </li>
                        <li class="nav-item">
                            <a href="">Histórico</a>
                        </li>
                        <li class="nav-item">
                            <a href="">Supermercado</a>
                        </li>
                        <li class="nav-item">
                            <a href="">Moda</a>
                        </li>
                        <li class="nav-item">
                            <a href="">vender</a>
                        </li>
                        <li class="nav-item">
                            <a href="">contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- LOGIN DO ECOMERCE -->
            <div class="col-3" style="background-color: #FFF159; height: 100px;">
                <div class="row col-11 m-auto mt-2 local">
                    <i class="fa-solid fa-tag col-1 m-0 p-0 pt-1"></i>
                    <p class="col-9 m-0 p-0" style="font-size: 1em; text-align: center;">Ofertas por tempo limitado</p>
                </div>
                <div class="row col-3 m-auto mt-2 local">
                    <i class="fa-solid fa-right-to-bracket col-3 m-0 p-0 pt-1"></i>
                    <p class="col-9 m-0 p-0">Entrar</p>
                </div>
            </div>
        </div>
    </div>
</div>

