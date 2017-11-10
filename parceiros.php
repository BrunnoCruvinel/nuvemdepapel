<div class="componente-parceiros-container row">
<div class="col-md-12">
        <div class="componente-parceiros owl-carousel owl-theme">

          <?php
          // ###########  POSTS  #############
          // $fptps= array( 'post_type' => 'fotos');
          //  query_posts($fptps);
          //  while (have_posts()) : the_post();
          //  $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
          //  $thumbp = $src[0];
          $parceiros[] = get_field('parceiro_01', $idFoto);
          $parceiros[] = get_field('parceiro_02', $idFoto);
          $parceiros[] = get_field('parceiro_03', $idFoto);
          $parceiros[] = get_field('parceiro_04', $idFoto);
          $parceiros[] = get_field('parceiro_05', $idFoto);
          $parceiros[] = get_field('parceiro_06', $idFoto);
          $parceiros[] = get_field('parceiro_07', $idFoto);
          $parceiros[] = get_field('parceiro_08', $idFoto);
          $parceiros[] = get_field('parceiro_09', $idFoto);
          $parceiros[] = get_field('parceiro_10', $idFoto);
          foreach ($parceiros as $pk => $p): if ($p['url']!=""):
         ?>

            <div class="item">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <img src="<?php echo $p['url'] ?>" alt="">
                    </div>
                </div>
            </div>

    <?php endif;endforeach ?>


        </div>
	</div>
</div>
