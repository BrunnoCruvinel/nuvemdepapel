   <section id="footer" class="bg-color-marrom">
       <div class="container">
           <div class="row espacamento_top">
               <div class="col-md-4 col-sm-12">
                   <div class="footer-contato">
                       <div class="row">
                           <div class="col-md-2 col-sm-2 col-xs-2">
                               <img src="<?php echo bloginfo("template_directory") ?>/img/contato_telefone.png" alt="">
                           </div>
                           <div class="col-md-10 col-sm-10 col-xs-10 text-pequeno text-color-branco">
                             <a href="tel:+5548999777040" target="_top">
                               48 99977.7040
                             </a>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-2 col-sm-2 col-xs-2">
                               <img src="<?php echo bloginfo("template_directory") ?>/img/contato_email.png" alt="">
                           </div>
                           <div class="col-md-10 col-sm-10 col-xs-10 text-pequeno text-color-branco">
                             <a href="mailto:ola@nuvensdepapel.com" target="_top">
                               OLA@NUVENSDEPAPEL.COM
                             </a>
                           </div>
                       </div>
                   </div>

                    <div class="footer-redesocial">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?=(FACEBOOK=="#")  ?"<!--":""?><a href="<?=FACEBOOK; ?>" target="_blank"><img src="<?=bloginfo("template_directory");?>/img/redesocial-facebook.png"></a><?= (FACEBOOK=="#") ?"-->":""?>
                                <?=(INSTAGRAM=="#") ?"<!--":""?><a href="<?=INSTAGRAM;?>" target="_blank"><img src="<?=bloginfo("template_directory");?>/img/redesocial-instagram.png"></a><?=(INSTAGRAM=="#")?"-->":""?>
                                <?=(PINTEREST=="#") ?"<!--":""?><a href="<?=PINTEREST;?>" target="_blank"><img src="<?=bloginfo("template_directory");?>/img/redesocial-pinterest.png"></a><?=(PINTEREST=="#")?"-->":""?>
                                <?=(YOUTUBE=="#")   ?"<!--":""?><a href="<?=YOUTUBE;  ?>" target="_blank"><img src="<?=bloginfo("template_directory");?>/img/redesocial-youtube.png"></a><?=  (YOUTUBE=="#")  ?"-->":""?>
                            </div>
                        </div>
                    </div>
               </div>
                <?php
                $page_id = 366;
                $page_data = get_page($page_id);

                $imageLink = $page_data->post_content;
                $image[0] = "#";

                if ( has_post_thumbnail($page_id) ) {
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
                }
                ?>
               <div class="col-md-4 col-sm-12">
                    <div class="row"></div>
                    <div class="footer-area-ebook titulo-pequeno text-color-branco text-center"<?=($image[0]!="#")?' style="padding:0;"':''?>>
                        <a href="<?=$imageLink;?>" target="_blank"><img src="<?=$image[0];?>"<?=($image[0]!="#")?' style="width:100%;object-fit:contain;"':''?>></a>
                    </div>
               </div>
               <div class="col-md-4 col-sm-12">
                    <div id="footer-instagram" class="titulo-medio-pequeno text-color-branco">
                        Instagram
                    </div>
                   <div>
                      <?php echo do_shortcode("[jr_instagram id=\"2\"]") ?>
                   </div>
               </div>
           </div>

           <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                  <a href="http://codde.com.br" target="_blank">
                    <img src="<?php echo bloginfo("template_directory") ?>/img/site_feito_codde.png" alt="">
                  </a>
                </div>
           </div>
       </div>
   </section>


    <script src="<?php echo bloginfo("template_directory") ?>/js/plugins/owl-carousel/dist/owl.carousel.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo bloginfo("template_directory") ?>/js/lightbox.min.js"></script>
  <script src="<?php echo bloginfo("template_directory") ?>/js/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo("template_directory") ?>/js/main.js"></script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>

  <script>
    jQuery(document).ready(function($){
      var selector = 'img[src$="eu_quero_mas_nao_moro.png"]';
      $(selector).each(function(){
        $(this).attr('usemap', '#euquero-map');
        $(this).after( ''
          + '<map name="euquero-map">'
            + '<area target="" alt="Eu Quero!" title="Eu Quero!" href="/contato" coords="372,0,0,368" shape="rect">'
            + '<area target="" alt="Eu Quero mas não moro em Floripa" title="Eu Quero mas não moro em Floripa" href="/contato-fora" coords="0,369,372,574" shape="rect">'
          + '</map>'
        );
      });
      selector = 'img[src$="entrega_somente_floripa.png"]';
      $(selector).each(function(){
        $(this).wrap('<a href="/contato"></a>');
      });
    });
  </script>
</body>
</html>
