<?php require "header.php" ?>

<section id="produtos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titulo-grande text-color-marrom espacamento_top">
                    Produtos
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="text-normal text-color-marrom espacamento_bottom">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin hendrerit eros. Aenean a bibendum arcu. Sed scelerisque vulputate viverra. Phasellus feugiat lacinia neque sed consequat. Aliquam porttitor consequat rhoncus. Nunc venenatis ante quis neque blandit varius. Suspendisse lacinia feugiat orci. Ut ut orci vitae ipsum tristique feugiat. Suspendisse arcu quam, tempus at odio et, venenatis sollicitudin enim. Maecenas fermentum lobortis nisl, ut rutrum orci. Nullam ut purus nisi. Suspendisse quis magna a urna porttitor dapibus non at tellus. Nulla.
                </div>
                <div class="row espacamento_bottom">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="javascript:void(0)">
                                    <img src="img/imagem_produto_1.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="javascript:void(0)">
                                    <img src="img/imagem_produto_2.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="javascript:void(0)">
                                    <img src="img/imagem_produto_3.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0)">
                                    <img src="img/imagem_produto_4.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="javascript:void(0)">
                                    <img src="img/imagem_produto_5.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <img src="img/eu_quero_mas_nao_moro.png" alt="">
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="titulo-grande text-color-marrom">
                Depoimentos
            </div>
            <?php require "depoimentos.php" ?>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="titulo-grande text-color-marrom">
                Fotos
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <?php require "fotos.php" ?>
                </div>
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="row">
                <div class="titulo-grande text-color-marrom">
                    Parceiros
                </div>
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <?php require "parceiros.php" ?>
                </div>
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

<?php require "footer.php" ?>