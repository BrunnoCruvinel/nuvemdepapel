<?php /* Template Name: Produtos */ ?>
<?php get_header() ?>

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
                    <?php the_content() ?>
                </div>
                <div id="locacao_produtos" class="row espacamento_bottom">
                    <div class="col-md-12">



                      <div class="row">

                        <?php
                            // ###########  KITS  #############
                             $args = array( 'post_type' => 'produto', 'posts_per_page' => -1);
                             query_posts($args); $i = 0;
                             while (have_posts()) : the_post();
                             $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                             $thum = $src[0];
                             if ($i%2==0):
                           ?>

                           <div class="col-md-6 text-left">
                             <a href="<?php the_permalink() ?>">
                                 <img class="img-responsive" src="<?php echo $thum ?>">
                             </a>
                           </div>

                           <?php else: ?>

                             <div class="col-md-6 text-right">
                               <a href="<?php the_permalink() ?>">
                                 <img class="img-responsive" src="<?php echo $thum ?>">
                               </a>
                             </div>
                      </div>

                      <div class="row">

                        <?php endif;$i++;endwhile; ?>

                      </div>




                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 text-right">
                <img src="<?php echo bloginfo("template_directory") ?>/img/eu_quero_mas_nao_moro.png" alt="">
            </div>
        </div>

        <div class="espacamento_top espacamento_bottom">
            <div class="titulo-grande text-color-marrom">
                Depoimentos
            </div>
            <?php require "depoimentos.php" ?>
        </div>

        <?php $idFoto =  61; $arq = get_post($idFoto); echo $arq->post_content; ?>

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

						<!--begin carousel-->
						<div id="myGallery" class="carousel slide" data-interval="false">
							<div class="carousel-inner">

                <?php
                    // ###########  Produtos  #############
                    wp_reset_query();
                    $args = array( 'post_type' => 'produto', 'posts_per_page' => -1);
                    query_posts($args); $i = 0;
                     while (have_posts()) : the_post();
                     $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                     $thum = $src[0];

                   ?>

								<div class="item">
									<div class="col-md-5 col-sm-5 col-xs-5">
										<img class="img-responsive" src="<?php echo $thum ?>">
									</div>
									<div class="col-md-7 col-sm-7 col-xs-7">
										<span class="titulo-medio text-color-marrom">
											<?php the_title() ?>
										</span>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
									             <?php the_content() ?>
										</div>
										<div class="text-normal text-color-marrom espacamento_top_pijama">
											<strong>Medidas</strong></br>
										</div>
										<div class="text-normal text-color-marrom margin_top_10">
                      <?php echo get_field('medida') ?>
										</div>
									</div>
								</div>

              <?php endwhile ?>

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
						<div class="col-md-12 col-sm-12 col-xs-12">


							<!-- <a href="#myGallery" role="button" data-slide="prev">
								<img src="<?php //echo $thi?>">
							</a> -->

						</div>
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
					<img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/casas.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>
