<?php /* Template Name: Blog */ ?>
  <?php get_header() ?>

    <section id="blog" class="espacamento_bottom bg-nuvem-blog bg-nuvem-arquitetura">
      <div class="container espacamento_bottom">

        <div class="row">
          <div class="col-md-12">
            <div class="titulo-grande text-color-marrom espacamento_top">
              Blog
            </div>
          </div>
        </div>

        <div class="row espacamento_bottom">
          <div class="col-md-7 col-sm-7">

            <?php
                      // ###########  KITS  #############
                       $args = array( 'post_type' => 'post', 'posts_per_page' => -1);
                       query_posts($args); $i = 0;
                       while (have_posts()) : the_post();
                       $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                       $thum = $src[0];

                     ?>

              <div class="post <?php echo  $i%2==0 ? " post-tracejado " : " " ?>">
                <div class="titulo-post text-pequeno text-color-marrom">
                  <a href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                  </a>
                </div>
                <div class="text-blog text-normal text-color-marrom">
                      <a href="<?php the_permalink() ?>">
                  <?php the_content() ?>
                </a>
                </div>
                    <a href="<?php the_permalink() ?>">
                <img class="img-responsive" src="<?php echo $thum ?>">
              </a>
              </div>

              <?php $i++;endwhile ?>

          </div>

          <?php get_sidebar() ?>
        </div>
      </div>

      <div class="mais-post tracejado-azul">
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="load_more" href="javascript: void(0);"><img src="<?php echo bloginfo("template_directory") ?>/img/nuvem_mais_posts.png" alt="" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer() ?>
