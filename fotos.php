<div class="componente-fotos-container col-md-12">
    <div class="componente-fotos owl-carousel owl-theme">

      <?php
      // ###########  POSTS  #############
      // $fptps= array( 'post_type' => 'fotos');
      //  query_posts($fptps);
      //  while (have_posts()) : the_post();
      //  $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
      //  $thumbp = $src[0];
      $fotos[] = get_field('foto_01', $idFoto);
      $fotos[] = get_field('foto_02', $idFoto);
      $fotos[] = get_field('foto_03', $idFoto);
      $fotos[] = get_field('foto_04', $idFoto);
      $fotos[] = get_field('foto_05', $idFoto);
      $fotos[] = get_field('foto_06', $idFoto);
      // $fotos[] = get_field('foto_01', $idFoto);
      // $fotos[] = get_field('foto_01', $idFoto);
      foreach ($fotos as $fk => $f):
     ?>

        <div class="item">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <img src="<?php echo $f['url'] ?>" class="fotos_galeria">
                </div>
            </div>
        </div>

    <?php endforeach ?>

    </div>
</div>
