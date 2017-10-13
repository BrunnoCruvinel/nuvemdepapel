<?php /* Template Name: Arquitetura */ ?>
<?php get_header() ?>

<section id="arquitetura" class="bg-nuvem-arquitetura">
    <div class="container">
        <div class="row espacamento_top">
            <div class="col-md-12 titulo-grande text-color-marrom">
                <span class="nuvem-azul-arquitetura">Arquitetura</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php require "slide-arquitetura.php" ?>

            </div>
        </div>

        <div class="espacamento_bottom">
            <div class="row">
				<div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Parceiros
					</div>
				</div>
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
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
