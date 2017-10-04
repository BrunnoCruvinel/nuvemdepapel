<?php require "header.php" ?>

<section id="arquitetura" class="bg-nuvem-arquitetura">
    <div class="container">
        <div class="row espacamento_top">
            <div class="col-md-12 titulo-grande text-color-marrom">
                <span class="nuvem-azul-capacete">Arquitetura</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php require "slide-arquitetura.php" ?>
            </div>
        </div>

        <div class="espacamento_bottom">
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