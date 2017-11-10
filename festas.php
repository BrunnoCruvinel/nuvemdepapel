<?php /* Template Name: Festas */ ?>
<?php get_header() ?>

<section id="produtos" class="festas bg-nuvem-arquitetura">
    <div class="container">
        <div class="row espacamento_top">
            <div class="col-md-6">
                <div class="titulo-grande text-color-marrom">
                    <span class="nuvem-aniversario">Festas</span>
                </div>
            </div>
        </div>

        <?php $idFoto = 45; $f = get_post(45); echo $f->post_content;?>

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
					<img class="img-responsive" src="/wp-content/themes/nuvens/img/casas.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>
