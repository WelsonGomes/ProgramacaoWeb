<style>
    div.todo {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-color: white;
    }
    div.meio {
       padding: 0 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    main.display {
        display: flex;
    }
    main.display section.sessao {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 1rem 16px;
        border: none;
    }
    main.display section.sessao .icone {
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    main.display section.sessao .img {
        width: 100%;
    }
    p.text {
        text-align: center;
        margin-top: 20px;
    }
    .card-title {
        display: block;
        text-align: center;
    }
    @media screen and (max-width: 600px) {
        main.display {
            flex-direction: column;
        }
    }
</style>

<div class="container-fluid todo">
    <div class="container meio">
        <main class="display">
            <section class="sessao">
                <div class="icone">
                    <img src="_icones/tipodepagamento.png" alt="Escolha o tipo de pagamento">
                </div>  
                <div class="card-body">
                    <h5 class="card-title">Escolha a forma de pagamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro cumque hic rerum dolore optio ab nobis, accusantium quae vitae harum ex consectetur deleniti officia ea obcaecati molestiae voluptas aperiam dicta?</p>
                </div>
            </section>
            <section class="sessao">
                <div class="icone">
                    <img src="_icones/entrega.png" alt="Escolha o tipo de pagamento">
                </div>  
                <div class="card-body">
                    <h5 class="card-title">Frete gratis à partir de R$ 99,90</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro cumque hic rerum dolore optio ab nobis, accusantium quae vitae harum ex consectetur deleniti officia ea obcaecati molestiae voluptas aperiam dicta?</p>
                </div>
            </section>
            <section class="sessao">
                <div class="icone">
                    <img src="_icones/seguro.png" alt="Escolha o tipo de pagamento">
                </div>  
                <div class="card-body">
                    <h5 class="card-title">Segurança do inicio ao fim</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro cumque hic rerum dolore optio ab nobis, accusantium quae vitae harum ex consectetur deleniti officia ea obcaecati molestiae voluptas aperiam dicta?</p>
                </div>
            </section>
        </main>
    </div>
</div>

<div class="container-fluid rodape">
    
    <p class="text"><img src="_icones/direito-autoral.png" alt="">Todos os direitos reservados.</p>
    <p class="text">Endereço: Cratera 39 leste 10 horas sol sul - Saturno</p>
    
</div>