<div class="componente-parceiros-container row">
<div class="col-md-12">
        <div class="componente-parceiros owl-carousel owl-theme">

          <?php
          // ###########  POSTS  #############
          $parceiros= array( 'post_type' => 'parceiros');
           query_posts($parceiros);
           while (have_posts()) : the_post();
           $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
           $thumb2 = $src[0];

         ?>

            <div class="item">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <img src="<?php echo $thumb2 ?>" alt="<?php the_title() ?>">
                    </div>
                </div>
            </div>

    <?php endwhile ?>


        </div>
	</div>
</div>
