<?php require "header.php" ?>

<section id="produtos" class="bg-color-azul bg-nuvem-festa-pijama back_pijama" style="background-position: 25px 75px">
    <div class="container">

        <div class="row espacamento_top">
            <div class="col-md-12">
                <div class="titulo-grande text-color-marrom">
                    <span class="nuvem-pijama">Festa do Pijama</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="espacamento_bottom text-normal text-color-marrom">
                    Que criança não sonha com o dia em que todos os seus melhores amigos vão poder dormir na sua casa? A proposta da Nuvens de Papel para essa festa é aliar diversão e aconchego, tudo feito com muito cuidado e pensado carinhosamente para seu filho!
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="img/nossa-festa-pijama.png" alt="">
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="titulo-grande text-color-marrom">
                        Depoimentos
                    </div>
                </div>
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
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10">
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