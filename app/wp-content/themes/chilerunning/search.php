<?php get_header(); ?>
	
	<!-- section -->
	<section class="cont_post cont_author">
		<div class="cont_author">

			<h2><?php echo sprintf( __( '%s Coinciden con: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

		</div>

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
	<section class="ad">
		<div class="open_close_ad">
			<span class="close">Cerrar Publicidad</span>
			<span class="open hide">Abrir Publicidad</span>
			<i class="fa fa-times"></i>
		</div>
		<div class="cont_ad_middle">
			<div class="ad-300x250" id="content_300x250"></div>
		</div>
	</section>

<?php get_footer(); ?>
