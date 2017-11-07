<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1">
	<div class="espacamento_bottom">
		<form class="fundo-input" id="form_search_blog" action="/" method="get">
			<input  name="s" id="search_blog" class="input-customizado" type="text" placeholder="Pesquisar..." style="font-size:20px;">
			<label class="dashed_lupa" style=""></label>
			<label class="lupa_pesquisa_blog" style=""></label>
		</form>
	</div>

	<div class="area-ebook espacamento_bottom">
		<?php $p = get_post(68); echo $p->post_content; ?>
	</div>

	<div class="posts-mais-lidos espacamento_bottom">
		<div class="titulo-medio-pequeno">
			Posts mais lidos
		</div>

		<div class="lista-posts-mais-lidos">

			<?php
                                // *********************   MOST READ  *********************
                                        wp_reset_query();
                                        $nova_consulta = new WP_Query(
                                                array(
                                                        'posts_per_page'      => 3,
                                                        'no_found_rows'       => true,
                                                        'post_status'         => 'publish',
                                                        'ignore_sticky_posts' => true,
                                                        'orderby'             => 'meta_value_num',
                                                        'meta_key'            => 'tp_post_counter',
                                                        'order'               => 'DESC'
                                                )
                                        );


                                         if ($nova_consulta->have_posts()): while ($nova_consulta->have_posts()):
                                        $nova_consulta->the_post();
                                        $tp_post_counter = get_post_meta($post->ID, 'tp_post_counter', true);
                                        ?>





			<div class="text-minimo">
				<a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
			</div>

			<div class="separador-blog"></div>

			<?php endwhile;endif?>
		</div>
	</div>

	<div class="categorias-blog">
		<div class="titulo-medio-pequeno">
			Categorias
		</div>

		<div class="lista-categorias espacamento_bottom">

			<?php
                                    // ##################  CATEGORIES  ##################
                                                     $categories = get_categories();
                                                     foreach ($categories as $c => $cat) :
                                    ?>


			<div class="text-minimo">
				<a href="<?php echo DOMAIN."/category/".$cat->slug ?>"><?php echo $cat->name ?></a>
			</div>

			<div class="separador-blog"></div>

	<?php endforeach?>

		</div>
	</div>

	<div class="area-facebook">
		<div class="fb-page" data-height="300" data-href="https://www.facebook.com/lojanuvensdepapel/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="https://www.facebook.com/lojanuvensdepapel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lojanuvensdepapel/">Nuvens de Papel</a></blockquote>
		</div>
	</div>
</div>
						<?php
                        // ##################  POST TYPES  ##################

                            // FIRST MODEL
                            // $posts = get_posts('post_type=post&orderby=rand&numberposts=1');
                            // foreach ($posts as $post):
                            //
                            //
                            // endforeach;

                            // SECOND TYPE
                            // wp_reset_query();
                            // $args = array( 'post_type' => 'post', 'numberposts'=>10,'order'=>'DESC');
                            // query_posts($args);
                            // while (have_posts()) : the_post();

                            //endwhile;
                        ?>
