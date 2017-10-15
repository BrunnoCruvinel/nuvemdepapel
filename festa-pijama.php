<?php /* Template Name: Festa do Pijama */ ?>
<?php get_header() ?>


<section id="produtos" class="bg-color-azul bg-nuvem-festa-pijama back_pijama" style="background-position: 25px 75px">
    <div class="container">

        <div class="row espacamento_top_pijama">
            <div class="col-md-6">
                <div class="titulo-grande text-color-marrom">
                    <h1 class="nuvem-azul-capacete">Festa do pijama</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="espacamento_bottom text-normal text-color-marrom pijama-description">
                  <?php $fp = get_post(43); echo $fp->post_content;?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive itens-pijama" src="img/nossa-festa-pijama.png" alt="">
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


            <?php require "depoimentos_arq.php" ?>

        </div>

        <div class="espacamento_top espacamento_bottom">
			<div class="row">
                <div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Fotos
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10 fotos-carousel">
                    <?php require "fotos.php" ?>
                </div>
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="row">
				<div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Parceiros
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-10 fotos-carousel">
                    <?php require "parceiros.php" ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
		<div id="home-casa" class="espacamento_top">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/casas.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>
