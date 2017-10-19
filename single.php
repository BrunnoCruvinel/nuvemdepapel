<?php get_header() ?>

  <section id="blog" class="espacamento_bottom bg-nuvem-arquitetura">
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
          <div class="post">



						  <?php
                                            while (have_posts()) : the_post();
                                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                                $thumb = $src[0];
                                    ?>
            <div class="titulo-post text-pequeno text-color-marrom">
              <a href=""> <?php the_title() ?></a>
            </div>
            <div class="text-blog text-normal text-color-marrom">
              <?php the_content() ?>
            </div>
            <img class="img-responsive" src="img/foto-urso.png" alt="">
            <div class="post-compartilhar">
              <div class="text-pequeno text-color-marrom post-tracejado text-right">
                Compartilhar:
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
									<img class="img-responsive pull-right" src="<?php echo bloginfo("template_directory") ?>/img/comparilhar.png" alt=""></a>
              </div>
            </div>

					<?php endwhile ?>
          </div>

          <div class="comentario">
            <div class="titulo-medio-pequeno text-color-marrom espacamento_bottom_pequeno">
              Deixe seu comentário
            </div>
            <div class="aviso-comentario text-normal text-color-marrom post-tracejado">
              Atenção: Os comentarios abaixo são de inteira responsabilidade de seus respectivos autores e não representam necessáriamente, a opinião da Nuvens de Papel
            </div>

						<div class="">
							<!-- DISQUS AQUI -->
						</div>



          </div>

        </div>

      <?php get_sidebar() ?>
      </div>
    </div>

  </section>







      <?php get_footer() ?>
