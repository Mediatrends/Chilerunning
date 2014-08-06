<section class="inner_cont" >

	<article class="post_content">

		<div class="shared">

			<div class="addthis_toolbox addthis_default_style ">
			    <a class="addthis_button_facebook">
			    	<svg viewBox="25.396 17.68 15.208 32.638">
				      <use xlink:href="#svg_icon_facebook"></use>
				    </svg>
			    	<span>compartir con facebook</span>
			    </a>
			    <a class="addthis_button_twitter">
			    	<svg viewBox="19 22 29 23.999">
				      <use xlink:href="#svg_icon_twitter"></use>
				    </svg>
					<span>compartir con twitter</span>
				</a>

			    <a class="addthis_button_compact"><i class="fa fa-plus"></i></a>

				<div class="count_share">
					<p class="count"><a class="atcounter"></a></p>
					<p>compartidos</p>
				</div>
			</div>

			<div class="back" OnClick="window.history.back()"><i class="fa fa-chevron-left"></i></div>
		</div>
		
		<h2>titulo corridas</h2>
		<p>parrafa intro en corridas</p>

		<?php $query = new WP_Query('category_name=-calendario'); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

			<article class="box_post">

				<a href="http://<?php the_field('sitio_web_del_evento'); ?>" rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" target="_blank">
					<main class="post">

						<h3><?php the_title(); ?></h3>

						<div class="data">

						    <div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>
							<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>

						</div>
						<div class="more"><i class="fa fa-plus"></i></div>
					</main>
				</a>

			</article>

			<?php endwhile;
			wp_reset_postdata();
			else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>

	</article>

	<?php get_sidebar('main'); ?>

</section>