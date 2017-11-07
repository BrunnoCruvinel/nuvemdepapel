<?php require "header.php" ?>

    <section id="page-kit" class="bg-color-azul">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titulo-grande text-color-marrom espacamento_top">
                        Kits Festa War
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="text-normal text-color-marrom espacamento_bottom">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin hendrerit eros. Aenean a bibendum arcu. Sed scelerisque vulputate viverra. Phasellus feugiat lacinia neque sed consequat. Aliquam porttitor consequat rhoncus.
                    </div>
                    <div class="row espacamento_bottom">
                        <div class="col-md-12">
                            <img class="img-responsive" src="img/foto-kit-festa-war.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <div class="espacamento_bottom">
                        <img class="img-responsive pull-right" src="img/o-kit-war.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive pull-right" src="img/eu_quero_mas_nao_moro.png" alt="">
                    </div>
                </div>
            </div>

            <div class="espacamento_top espacamento_bottom">
                <div class="titulo-grande text-color-marrom">
                    Depoimentos
                </div>
                <?php require "depoimentos.php" ?>
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
