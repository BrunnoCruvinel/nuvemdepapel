<style media="screen">
  .owl-item .active{
    margin-right:0px !important;
  }
</style>
<div class="componente-fotos-container col-md-12">
    <div class="componente-fotos owl-carousel owl-theme lightbox">

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
      $fotos[] = get_field('foto_07', $idFoto);
      $fotos[] = get_field('foto_08', $idFoto);
      $fotos[] = get_field('foto_09', $idFoto);
      $fotos[] = get_field('foto_10', $idFoto);
      foreach ($fotos as $fk => $f): if ($f['url']!=""):
     ?>

        <div class="item" style="margin-right:0px !important;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 np" style="overflow:hidden;height:225px">
                    <img style="height:100%" src="<?php echo $f['url'] ?>" class="fotos_galeria">
                </div>
            </div>
        </div>

    <?php endif;endforeach ?>

    </div>
</div>
