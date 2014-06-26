<?php $query = new WP_Query('category_name=-all'); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	
	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	
	<li class="cont_post_slider" style="background-image:url(<?php echo $feat_image;?>) !important;">
		<main>
		
			<h2><?php the_title(); ?></h2>
			<ul>
			 	<li>
			 		<p>
			 			<i class="fa fa-pencil"></i>
			 			<span><?php the_author_posts_link(); ?></span>
			 		</p>
			 	</li>
			 	<li>
			 		<p>
			 			<i class="fa fa-eye"></i>
			 			<span>000</span>
			 		</p>
			 	</li>
			 	<li>
			 		<p>
			 			<i class="fa fa-share-alt"></i>
			 			<span>300</span>
			 		</p>
			 	</li>
			 </ul> 

		</main>
		<div class="more_read"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">leer mas</a></div>
	</li>

	<?php endwhile; 
	wp_reset_postdata();
	else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>