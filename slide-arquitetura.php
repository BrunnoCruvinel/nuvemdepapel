<ul id="navArquitetura" class="text-pequeno">
  <li class="active" data-go="slide-arquitetura" data-text="ARQUITETURA">ARQUITETURA</li>
  <li data-text="O QUE FAZEMOS" data-go="oqf"></li>
  <li data-text="COMO FUNCIONA" data-go="cf"></li>
  <li data-text="EXTRAS" data-go="extras"></li>
  <li data-text="DEPOIMENTOS" data-go="depoimentos"></li>
  <li data-text="FOTOS" data-go="fotos"></li>
</ul>

    <?php $idFoto =  29; $arq = get_post($idFoto); echo $arq->post_content; ?>

    <div id="depoimentos" class="item-arquitetura">
        <div class="row text-normal text-color-marrom">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="titulo-grande text-color-marrom">
                    Depoimentos
                </div>
                <div id="arq">
                  <?php require "depoimentos_arq.php" ?>
                </div>

            </div>
        </div>
    </div>

    <div id="fotos" class="item-arquitetura">
        <div class="row">
            <div class="col-md-12">
				<div class="titulo-grande text-color-marrom">
					Fotos
				</div>
			</div>
		</div>

        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10 fotos-carousel">
                <?php require "fotos.php" ?>
            </div>
        </div>
    </div>
