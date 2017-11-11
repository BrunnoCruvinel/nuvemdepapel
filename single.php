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

						<div class="disqus">
              <div id="disqus_thread"></div>
              <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                */
                /*
                var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() {  // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://nuvensdepapel.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
						</div>


          </div>

        </div>

      <?php get_sidebar() ?>
      </div>
    </div>

  </section>






      <?php get_footer() ?>
