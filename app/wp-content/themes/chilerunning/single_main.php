<?php /*
	Single Post Template: Single Main
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<section class="inner_slider slider_head">
		
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('cont_img_slider_inner'); ?> style="background-image:url(<?php echo $url; ?>);">
			<header></header>
			<main>
			  <div class="icon_category"></div>
			  <h2><?php the_title(); ?></h2>
			  <ul>
			    <!--li>
			      <p><i class="fa fa-pencil"></i><span><?php the_author_posts_link(); ?></span></p>
			    </li-->
			    <li>
			      <p><i class="fa fa-eye"></i><span><?php echo gapp_get_post_pageviews(); ?></span></p>
			    </li>
			    <li class="shared_hide">
			      <p><i class="fa fa-share-alt"></i><span class="count_share"><a class="atcounter"></a></span></p>
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

			<?php the_content(); // Dynamic Content ?>

			<div class="tags"><i class="fa fa-tag"></i><?php the_tags( __( '', 'html5blank' ), ' ', ''); // Separated by commas with a line break at the end ?></div>
			<div class="date"><?php the_time('j F Y'); ?></div>

			    <div id="disqus_thread"></div>
			    <script type="text/javascript">
			        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			        var disqus_shortname = 'chilerunningcom'; // required: replace example with your forum shortname

			        /* * * DON'T EDIT BELOW THIS LINE * * */
			        (function() {
			            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			        })();
			    </script>
			    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

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
