<?php require "header.php" ?>

<section id="produtos" class="bg-nuvem-arquitetura">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titulo-grande text-color-marrom espacamento_top">
                    Produtos
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="text-normal text-color-marrom espacamento_bottom">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin hendrerit eros. Aenean a bibendum arcu. Sed scelerisque vulputate viverra. Phasellus feugiat lacinia neque sed consequat. Aliquam porttitor consequat rhoncus. Nunc venenatis ante quis neque blandit varius. Suspendisse lacinia feugiat orci. Ut ut orci vitae ipsum tristique feugiat. Suspendisse arcu quam, tempus at odio et, venenatis sollicitudin enim. Maecenas fermentum lobortis nisl, ut rutrum orci. Nullam ut purus nisi. Suspendisse quis magna a urna porttitor dapibus non at tellus. Nulla.
                </div>
                <div id="locacao_produtos" class="row espacamento_bottom">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 text-left" data-toggle="modal" data-target="#myModal">
                                <a href="#myGallery" data-slide-to="0">
                                    <img src="img/imagem_produto_1.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 text-right" data-toggle="modal" data-target="#myModal">
                                <a href="#myGallery" data-slide-to="0">
                                    <img src="img/imagem_produto_2.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" data-toggle="modal" data-target="#myModal">
                                <a href="#myGallery" data-slide-to="0">
                                    <img src="img/imagem_produto_3.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6" data-toggle="modal" data-target="#myModal">
                                <a href="#myGallery" data-slide-to="0">
                                    <img src="img/imagem_produto_4.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" data-toggle="modal" data-target="#myModal">
                                <a href="#myGallery" data-slide-to="0">
                                    <img src="img/imagem_produto_5.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 text-right">
                <img src="img/eu_quero_mas_nao_moro.png" alt="">
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="titulo-grande text-color-marrom">
                Depoimentos
            </div>
            <?php require "depoimentos.php" ?>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="titulo-grande text-color-marrom">
                Fotos
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <?php require "fotos.php" ?>
                </div>
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="row">
                <div class="titulo-grande text-color-marrom">
                    Parceiros
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <?php require "parceiros.php" ?>
                </div>
            </div>
        </div>
		
		<!--begin modal window-->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove img_close"></span></button>
					</div>
					<div class="modal-body">
						<div class="border_dashed">
						<div class="modal_nuvem_prod">
							<span class="text-medio text-color-marrom">Produto 1</span>
							<img src="img/nuvem_produto_1.png">
						</div>
						<!--begin carousel-->
						<div id="myGallery" class="carousel slide" data-interval="false">
							<div class="carousel-inner">
								<div class="item active"> 
									<div class="col-md-5 col-sm-5 col-xs-5">
										<img src="img/produto_modal_1.png" alt="item0">
									</div>
									<div class="col-md-7 col-sm-7 col-xs-7">
										<span class="titulo-medio text-color-marrom">
											Produtos
										</span>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin hendrerit eros. Aenean a bibendum arcu. Sed scelerisque vulputate viverra. Phasellus feugiat lacinia neque sed consequat. Aliquam porttitor consequat rhoncus. Nunc venenatis ante quis neque blandit varius. Suspendisse lacinia feugiat orci. Ut ut orci vitae ipsum tristique feugiat.
										</div>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
											<strong>Medidas</strong></br>
										</div>
										<div class="text-normal text-color-marrom margin_top_10">
											80cm x 120cm
										</div>
									</div>
								</div>
								<div class="item"> 
									<div class="col-md-5 col-sm-5 col-xs-5">
										<img src="img/produto_modal_1.png" alt="item0">
									</div>
									<div class="col-md-7 col-sm-7 col-xs-7">
										<span class="titulo-medio text-color-marrom">
											Produtos
										</span>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin hendrerit eros. Aenean a bibendum arcu. Sed scelerisque vulputate viverra. Phasellus feugiat lacinia neque sed consequat. Aliquam porttitor consequat rhoncus. Nunc venenatis ante quis neque blandit varius. Suspendisse lacinia feugiat orci. Ut ut orci vitae ipsum tristique feugiat.
										</div>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
											<strong>Medidas</strong></br>
										</div>
										<div class="text-normal text-color-marrom margin_top_10">
											80cm x 120cm
										</div>
									</div>
								</div>
								<!--end carousel-inner-->
							</div>
							<!--Begin Previous and Next buttons-->
							<a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> 
								<span class=" glyphicon glyphicon-chevron-left previous_car"></span>
							</a> 								<a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> 
								<span class="glyphicon glyphicon-chevron-right next_car"></span>
							</a>
							<!--end carousel-->
						</div>
						</div>
					<!--end modal-body-->
					</div>
					<div class="modal-footer">
						<div class="pull-left">
							
						</div>
						<button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
						<!--end modal-footer-->
					</div>
					<!--end modal-content-->
				</div>
				<!--end modal-dialoge-->
			</div>
			<!--end myModal-->
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

<?php require "footer.php" ?>