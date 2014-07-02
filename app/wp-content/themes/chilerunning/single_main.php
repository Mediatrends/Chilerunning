<?php /*
	Single Post Template: Single Main
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<section class="inner_slider slider_head">
		
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<article class="cont_img_slider_inner" style="background-image:url(<?php echo $url; ?>);">
			<header></header>
			<main>
			  <div class="icon_category"></div>
			  <h2><?php the_title(); ?></h2>
			  <ul>
			    <li>
			      <p><i class="fa fa-pencil"></i><span><?php the_author_posts_link(); ?></span></p>
			    </li>
			    <li>
			      <p><i class="fa fa-eye"></i><span>000</span></p>
			    </li>
			    <li class="shared_hide">
			      <p><i class="fa fa-share-alt"></i><span>300</span></p>
			    </li>
			  </ul>
			</main>
			<footer>
				<?php
                        $prev_post = get_previous_post();
                        if($prev_post) {
                           $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                           echo "\t" . '<div class="prev_post"><a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '"><i class="fa fa-chevron-left"></i><span>post anterior</span></a></div>' . "\n";
                                        }

                        $next_post = get_next_post();
                        if($next_post) {
                           $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                           echo "\t" . '<div class="next_post"><a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '"><span>post siguiente</span><i class="fa fa-chevron-right"></i></a></div>' . "\n";
                                        }
                      ?>
			</footer>
		</article>
	</section>

	<section id="post-<?php the_ID(); ?>" <?php post_class('inner_cont'); ?>>
		
		

<script type="text/javascript">
			jQuery(document).ready(function($){
				addthis.counter("#atcounter");
			});
</script>

		<article class="post_content">
			<div class="shared">

				<?php do_action( 'addthis_widget', get_permalink(), get_the_title(), 'above'); ?>

			  <!--div class="btn_facebook">
			    <svg viewBox="25.396 17.68 15.208 32.638">
			      <use xlink:href="#svg_icon_facebook"></use>
			    </svg><span>compartir con facebook</span>
			  </div>
			  <div class="btn_twitter">
			    <svg viewBox="19 22 29 23.999">
			      <use xlink:href="#svg_icon_twitter"></use>
			    </svg><span>compartir con twitter</span>
			  </div>
			  <div class="btn_more"><i class="fa fa-plus"></i></div-->
			  	
			  <div class="count_share">
			    <p class="count"><a id="atcounter"></a></p>
			    <p>compartidos</p>
			  </div>
			  <div class="back"><i class="fa fa-chevron-left"></i></div>
			</div>
			<?php the_content(); // Dynamic Content ?>
			<div class="tags"><i class="fa fa-tag"></i><?php the_tags( __( '', 'html5blank' ), ' ', ''); // Separated by commas with a line break at the end ?></div>
			<div class="date"><?php the_time('j F Y'); ?></div>
		</article>

		<?php get_sidebar('main'); ?>

	</section>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


<?php get_footer(); ?>
