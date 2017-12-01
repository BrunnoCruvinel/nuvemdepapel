<div class="row">
<div class="col-md-12">
<div id="componente-depoimentos" class="owl-carousel owl-theme">



        <?php
          // ###########  BANNERS  ###########
          $depoimentos = array( 'post_type' => 'depoimentos', 'meta_key' => 'pagina', 'meta_value' => $idDep);
          query_posts($depoimentos);
          while (have_posts()) : the_post();
          $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
          $thumb = $src[0];


        ?>

    <div class="item-slide">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="text-medio text-color-marrom">
                    <?php the_content() ?>
                </div>
                <div class="usuario-depoimento">
                    <div class="usuario-depoimento-nome titulo-pequeno text-color-marrom">
                        <?php the_title() ?>
                    </div>
					<div class="img-depoimento">
						<img class="img-avatar" src="<?php echo $thumb ?>">
					</div>
                    <img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/nuvem_depoimentos.png" alt="">
                </div>
            </div>
        </div>
    </div>

  <?php endwhile ?>
</div>
</div>
</div>
