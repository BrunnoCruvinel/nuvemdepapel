<?php /* Template Name: Kits Locação */ ?>
  <?php get_header() ?>

    <section id="kit-locacao" class="bg-nuvem-arquitetura">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="titulo-grande text-color-marrom espacamento_top">
              Kits Locação
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="text-normal text-color-marrom espacamento_bottom">
              <?php the_content() ?>
            </div>
          </div>
          <div class="col-md-5 text-center"></div>
        </div>

        <div class="row">
          <div class="col-md-7 col-sm-7">
            <div id="locacao_produtos" class="row espacamento_bottom">
              <div class="col-md-12">

                <div class="row">

                  <?php
                      // ###########  KITS  #############
                       $args = array( 'post_type' => 'kits', 'posts_per_page' => -1);
                       query_posts($args); $i = 0;
                       while (have_posts()) : the_post();
                       $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                       $thum = $src[0];
                       if ($i%2==0):
                     ?>

                    <div class="col-md-6 text-left">
                      <a href="<?php the_permalink() ?>">
                          <img class="img-responsive" src="<?php echo $thum ?>">
                      </a>
                    </div>

                    <?php else: ?>

                      <div class="col-md-6 text-right">
                        <a href="<?php the_permalink() ?>">
                          <img class="img-responsive" src="<?php echo $thum ?>">
                        </a>
                      </div>
                </div>

                <div class="row">

                  <?php endif;$i++;endwhile; ?>

                </div>





              </div>
            </div>
          </div>
            <div class="col-md-5 col-sm-5 text-right">
                <img class="img-responsive margin_kits_entrega" src="<?php echo bloginfo("template_directory") ?>/img/entrega_somente_floripa.png" alt="">
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

        <div class="espacamento_top espacamento_bottom">
        </div>


      </div>

      </div>

    </section>

    <?php get_footer() ?>
