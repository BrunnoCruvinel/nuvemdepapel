<?php get_header() ?>



    <?php $p = get_post(6); echo $p->post_content; ?>


<!--
<section id="home-depoimentos" class="espacamento_top espacamento_bottom bg-color-verde">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Depoimentos
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php //require "depoimentos.php"; ?>
            </div>
        </div>
    </div>
</section>
-->

<section id="blog" class="bg-color-rosa espacamento_top espacamento_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Blog
            </div>
        </div>
        <div class="row espacamento_bottom">

          <?php
          // ###########  POSTS  #############
           $args = array( 'post_type' => 'post', 'posts_per_page' => 2);
           query_posts($args); $i = 0;
           while (have_posts()) : the_post();
           $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
           $thumb2 = $src[0];
           if ($i==0):
         ?>

            <div class="col-md-7 post-blog">
                <div class="row">
                    <div class="col-md-12">
                      <a href="<?php the_permalink() ?>">
                        <div class="titulo-post titulo-blog text-color-branco">

                            <?php the_title() ?>

                        </div>
                        </a>
                        <a href="<?php the_permalink() ?>">
                        <div class="texto-post text-normal text-color-branco">

                            <?php the_excerpt() ?>

                        </div>
                        </a>
                        <div class="text-center">
                          <a href="<?php the_permalink() ?>">
                            <img class="img-responsive" src="<?php echo $thumb2 ?>">
                          </a>
                        </div>
                    </div>
                </div>
            </div>

          <?php else: ?>
            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo-post titulo-blog text-color-branco">
                            <a href="<?php the_permalink() ?>">
                              <?php the_title() ?>
                            </a>
                        </div>
                        <div class="texto-post text-normal text-color-branco">
                              <a href="<?php the_permalink() ?>">
                                <?php the_excerpt() ?>
                              </a>
                        </div>
                        <div class="text-center">
                            <a href="<?php the_permalink() ?>">
                              <img class="img-responsive" src="<?php echo $thumb2 ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

<?php endif;$i++;endwhile ?>

        </div>
    </div>

    <div class="mais-post tracejado-branco">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo DOMAIN ?>blog">"><img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/nuvem_mais_posts.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
