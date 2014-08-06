<?php get_header(); ?>

	<!-- section -->
	<section class="cont_post cont_author">
		
		<div class="cont_author">
		<?php if (have_posts()): the_post(); ?>
			
			<div class="img_author"><?php echo get_avatar(get_the_author_meta('user_email')); ?></div>

			<h2><?php _e( 'Autor:', 'html5blank' ); ?></h2>

			<p class="nombre"><?php echo get_the_author(); ?></p>
			<p><?php if ( get_the_author_meta('description')) : ?></p>
		<br>
			<h2><?php _e( 'Algo sobre el autor:', 'html5blank' ); ?></h2>
			<p><?php echo wpautop( get_the_author_meta('description') ); ?></p>

		<?php endif; ?>
		</div>
		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

		<!-- article -->
		
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('box_post'); ?> style="background-image:url(<?php echo $feat_image;?>);">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<main class="post">
							<h3><?php the_title(); ?></h3>
							<div class="data">
								<i class="fa fa-calendar-o"></i>
								<span> <?php the_time('d/j/Y'); ?></span>
								<i class="fa fa-share-alt"></i>
								<span>300</span>
							</div>
							<div class="more">leer mas</div>
						</main>
					</a>
				</article>

		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

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
			<div class="ad-300x250" id="content_300x250">
				
<!--/* OpenX iFrame Tag v2.8.11 (Rich Media - OpenX) */-->

<iframe id='ae24c4c6' name='ae24c4c6' src='http://ads.adnetwork.cl/www/delivery/afr.php?resize=1&amp;zoneid=181&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl}' frameborder='0' scrolling='no' width='300' height='250'><a href='http://ads.adnetwork.cl/www/delivery/ck.php?n=a0846826&amp;cb={random}' target='_blank'><img src='http://ads.adnetwork.cl/www/delivery/avw.php?zoneid=181&amp;cb={random}&amp;n=a0846826&amp;ct0={clickurl}' border='0' alt='' /></a></iframe>


			</div>
		</div>
	</section>

<?php get_footer(); ?>
