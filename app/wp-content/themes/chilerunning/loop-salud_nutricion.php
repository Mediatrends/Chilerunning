<?php $query = new WP_Query('category_name=-salud_nutricion'); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	
	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<article class="box_post" style="background-image:url(<?php echo $feat_image;?>);">
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

	<?php endwhile;
	wp_reset_postdata();
	else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>