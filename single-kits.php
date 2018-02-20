<?php get_header() ?>


<section id="kit-war" class="bg-color-azul bg-nuvem-festa-pijama">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="titulo-grande text-color-marrom espacamento_top">
                  <?php the_title() ?>
                </div>
            </div>
        </div>

		<div class="row">

      <?php
                    while (have_posts()) : the_post();
                        // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                        // $thumb = $src[0];
            ?>


        <?php the_content() ?>


			<?php endwhile; ?>
		</div>

		<!-- <div class="espacamento_top espacamento_bottom">
			<div class="row">
				<div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Depoimentos
					</div>
				</div>
			</div>
            <?php //require "depoimentos.php"?>
        </div>

      <div class="espacamento_top espacamento_bottom">
            <div class="row">
                <div class="titulo-grande text-color-marrom">
                    Parceiros
                </div>
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <?php //require "parceiros.php"?>
                </div>
            </div>
        </div> -->

		<div id="home-casa" class="espacamento_top">
		</div>
    </div>

</section>

<?php get_footer() ?>
