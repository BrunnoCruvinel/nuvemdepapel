<?php /* Template Name: Contato */ ?>
  <?php get_header() ?>

    <section id="contato" class="bg-color-azul bg-nuvem-contato back_pijama">

      <div class="container">
        <div class="row espacamento_top espacamento_bottom">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="titulo-grande text-color-marrom">
              Contato
            </div>
            <img id="vamos" src="<?php echo bloginfo("template_directory") ?>/img/vamos-conversar.png">
          </div>
        </div>

        <div class="contato-formulario">
          <form id="contatof" name="contato" method="post">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                    <div id="contato-nome" class="fundo-input text-color-marrom vamor-conversar">
                      <input name="name" class="input-customizado" type="text" placeholder="Nome">

                    </div>
                  </div>
                </div>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="contato-email" class="fundo-input text-color-marrom">
                      <input name="email" class="input-customizado" type="text" placeholder="E-mail">

                    </div>
                  </div>
                </div>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="contato-telefone" class="fundo-input text-color-marrom">
                      <input class="input-customizado" name="phone" type="text" placeholder="Telefone">

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6">
                <div class="fundo-input text_area_margin">
                  <textarea name="msg" id="contato-mensagem" class="input-customizado textarea-customizado" placeholder="Mensagem"></textarea>
                </div>
              </div>
            </div>

            <br>
            <br>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <a id="enviar" href="javascript:void(0)"><img src="<?php echo bloginfo("template_directory") ?>/img/contato_botao_enviar.png" alt=""></a>
              </div>
            </div>

            <input type="hidden" name="contact" value="-1">
          </form>

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

<script type="text/javascript">
  $('#enviar').on('click', function(){
    $('#contatof').submit();
  });
</script>
    <?php get_footer() ?>
