<div class="componente-fotos-container col-md-12">
    <div class="componente-fotos owl-carousel owl-theme">

      <?php
      // ###########  POSTS  #############
      $fptps= array( 'post_type' => 'fotos');
       query_posts($fptps);
       while (have_posts()) : the_post();
       $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
       $thumbp = $src[0];

     ?>

        <div class="item">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <img src="<?php echo $thumbp ?>" alt="">
                </div>
            </div>
        </div>

    <?php endwhile ?>

    </div>
</div>
