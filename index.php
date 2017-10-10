<?php get_header() ?>


  <section >
    <?php $p = get_post(6); echo $p->post_content; ?>
  </section>

<section class="bg-color-azul backNuvem">
    <div class="container">
        <div id="festa-pijama" class="row">
            <div class="col-md-6">
                <div class="titulo-grande text-color-marrom">
                    <h1 class="nuvem-azul-capacete">Festa do pijama</h1>
                </div>
                <div class="text-color-marrom text-medio">
                    QUE CRIANÇA NÃO SONHA COM O DIA EM QUE TODOS OS SEUS MELHORES AMIGOS VÃO PODER DORMIR NA SUA CASA?
                </div>
                <div id="img-eu-quero">
                    <img class="img-responsive" src="img/eu_quero.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
              <div id="slideNuvem" class="owl-carousel owl-theme">

                  <div class="item-slide">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">


                                  <img src="img/nuvemSlide.png" alt="">

                          </div>
                      </div>
                  </div>

                  <div class="item-slide">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">


                                  <img src="img/nuvemSlide.png" alt="">

                          </div>
                      </div>
                  </div>

                  <div class="item-slide">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">


                                  <img src="img/nuvemSlide.png" alt="">

                          </div>
                      </div>
                  </div>
              </div>


            </div>
        </div>

        <div id="arquitetura" class="row espacamento_top">
            <div class="col-md-8">
                <div class="titulo-grande text-color-marrom">
                    <span class="nuvem-branca-capacete">Arquitetura</span>
                </div>
                <div class="text-color-marrom text-medio">
                    AQUI, ARQUITETURA E DESIGN SE MISTURAM PARA DEIXAR O AMBIENTE DAS CRIAÇAS MAIS LÚDICO, ONDE ELAS POSSAM SE DESENVOLVER DE FORMA MAIS AUTÔNOMA, DIVERTIDA E FELIZ. PODE SER UM QUARTO, UMA BRINQUEDOTECA OU UM AMBIENTE COMERCIAL.
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-quero-mas-nao-moro img-responsive" src="img/eu_quero_mas_nao_moro.png" alt="">
            </div>
        </div>
    </div>
	<div class="container">
		<div id="home-casa" class="espacamento_top">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<img class="img-responsive" src="img/casas.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home-depoimentos" class="espacamento_top espacamento_bottom bg-color-verde">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Depoimentos
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php require "depoimentos.php"; ?>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="bg-color-rosa espacamento_top espacamento_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 titulo-grande text-color-branco">
                Blog
            </div>
        </div>
        <div class="row espacamento_bottom">
            <div class="col-md-7 post-blog">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo-post titulo-blog text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="texto-post text-normal text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="text-center">
                            <img class="img-responsive" src="img/foto-urso.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo-post titulo-blog text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique.
                        </div>
                        <div class="texto-post text-normal text-color-branco">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum. Sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis arcu dolor. Integer tempus ipsum vitae est malesuada interdum.
                        </div>
                        <div class="text-center">
                            <img class="img-responsive" src="img/foto-festa-war.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mais-post tracejado-branco">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href=""><img class="img-responsive" src="img/nuvem_mais_posts.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
