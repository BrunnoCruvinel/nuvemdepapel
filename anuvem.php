<?php /* Template Name: A Nuvem */ ?>
<?php get_header() ?>

    <section id="anuvem" class="bg-nuvens bg-nuvem-arquitetura">

        <div class="container">
            <section>
                <div class="row espacamento_top">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="titulo-grande text-color-marrom">
                            A Nuvens de Papel
                        </div>
                    </div>
                </div>

                <div class="row espacamento_bottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-normal text-color-marrom">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row espacamento_top">
                    <div class="col-md-10 col-sm-10 col-xs-10 text-left">
                        <img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/quem-somos-2.png " alt="">
                    </div>
                </div>

                <div class="row">
                    <?php the_field('arquitetas') ?>
                </div>
            </section>
            <?php  $idFoto = 103;?>
            <!-- <div class="espacamento_top espacamento_bottom">
            <div class="row">
				<div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Parceiros
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-10 fotos-carousel">
                    <?php //require "parceiros.php"?>
                </div>
            </div>
        </div> -->
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
