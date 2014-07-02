<?php if (have_posts()): while (have_posts()) : the_post(); ?>


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

		<?php// html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<!--article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article-->
	<!-- /article -->

<?php endif; ?>
