<?php require "header.php"; ?>


  <section id="destaque-fotos">
    <div class="row">
        <div class="col-md-4">
            <div class="row ajusta-nuvem-home">
                <div class="col-md-12 text-center">
                    <img src="img/nuvem-aniversario.png" alt="">
                </div>
            </div>
            <img class="" src="img/imagem_destaque_1.png" alt="">
        </div>
        <div class="col-md-4">
            <div class="row ajusta-nuvem-home">
                <div class="col-md-12 text-center">
                    <img src="img/nuvem-batismo.png" alt="">
                </div>
            </div>
            <img src="img/imagem_destaque_2.png" alt="">
        </div>
        <div class="col-md-4">
            <div class="row ajusta-nuvem-home">
                <div class="col-md-12 text-center">
                    <img src="img/nuvem-cha.png" alt="">
                </div>
            </div>
            <img src="img/imagem_destaque_3.png" alt="">
        </div>
    </div>
  </section>

<section class="espacamento_top bg-color-azul">
    <div class="container">
        <div id="festa-pijama" class="row">
            <div class="col-md-6">
                <div class="titulo-grande text-color-marrom">
                    <span class="nuvem-pijama">Festa do pijama</span>
                </div>
                <div class="text-color-marrom text-medio">
                    QUE CRIANÇA NÃO SONHA COM O DIA EM QUE TODOS OS SEUS MELHORES AMIGOS VÃO PODER DORMIR NA SUA CASA?
                </div>
                <div id="img-eu-quero">
                    <img src="img/eu_quero.png" alt="">
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <div id="arquitetura" class="row espacamento_top">
            <div class="col-md-8">
                <div class="titulo-grande text-color-marrom">
                    <span class="nuvem-branca-capacete">Arquitetura</span>
                </div>
                <div class="text-color-marrom text-medio">
                    AQUI, ARQUITETURA E DESIGN SE MISTURAM PARA DEIXAR O AMBIENTE DAS CRIAÇAS MAIS LÚDICO, ONDE ELAS POSSAM SE DESENVOLVER DE FORMA MAIS AUTÔNOMA, DIVERTIDA E FELIZ. PODE SER UM QUARTO, UMA BRINQUEDOTECA OU UM AMBIENTE COMERCIAL.
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-quero-mas-nao-moro" src="img/eu_quero_mas_nao_moro.png" alt="">
            </div>
        </div>
    </div>
    <div id="home-casa" class="espacamento_top">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-xs-10">
                <img class="img-responsive" src="img/casas.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="home-depoimentos" class="espacamento_top espacamento_bottom bg-color-verde">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Depoimentos
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php require "depoimentos.php"; ?>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="bg-color-rosa espacamento_top espacamento_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Blog
            </div>
        </div>
        <div class="row espacamento_bottom">
            <div class="col-md-7 post-blog">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo-post titulo-blog text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="texto-post text-normal text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="text-center">
                            <img class="img-responsive" src="img/foto-urso.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo-post titulo-blog text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="texto-post text-normal text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum.
                        </div>
                        <div class="text-center">
                            <img src="img/foto-festa-war.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mais-post tracejado-branco">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href=""><img src="img/nuvem_mais_posts.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<?php require "footer.php"; ?>
