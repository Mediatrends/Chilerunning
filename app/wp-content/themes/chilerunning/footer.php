			<!--CALENDAR-->

			<section class="calendar">
				<?php $query = new WP_Query('showposts=1&category_name=destacado_calendar'); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					 <article class="calendar_destacado" style="background-image:url(<?php echo $feat_image;?>);">
					    <a href="http://<?php the_field('sitio_web_del_evento'); ?>" rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" target="_blank">
						    <div class="calen_destacado">
						      <h3><?php the_title(); ?></h3>
						      <div class="date"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
						      <div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>
						      <div class="more">leer mas</div>
						    </div>
						</a>
					  </article>

					<?php endwhile; 
					wp_reset_postdata();
					else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			 
			  <aside>
			    <ul>
		    	<?php $query = new WP_Query('category_name=calendario-lista'); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					
						<li>
							<a href="http://<?php the_field('sitio_web_del_evento'); ?>" rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" target="_blank">
								<h3><?php the_title(); ?></h3>
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>
								<div class="date"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								<div class="more">leer mas</div>
							</a>
						</li>

					<?php endwhile; 
					wp_reset_postdata();
					else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			    </ul>
			  </aside>
			</section>

			<!-- footer -->

			<footer id="footer" role="contentinfo">
			  <div class="logo">
			    <svg viewBox="0 0 324.688 324.688">
			      <use xlink:href="#svg_logo"></use>
			    </svg>
			  </div>
			  <div class="about">
			    <h4>nosotros</h4>
			    <p> <?php bloginfo('description'); ?> </p>
			    <ul class="redes">
			    	<li>
						<a href="http://twitter.com/chilerunningscl" target="_blank">
						  <svg viewBox="19 22 29 23.999">
						    <use xlink:href="#svg_icon_twitter"></use>
						  </svg>
						</a>
					</li>
					<li>
						<a href="http://facebook.com/chilerunningscl" target="_blank">
						  <svg viewBox="25.396 17.68 15.208 32.638">
						    <use xlink:href="#svg_icon_facebook"></use>
						  </svg>
						</a>
					</li>
					<li>
						<a href="http://instagram.com/chilerunning" target="_blank">
						  <svg viewBox="0 0 100 100">
						    <use xlink:href="#svg_icon_instagram"></use>
						  </svg>
						</a>
					</li>
			    </ul>
			  </div>
			  <div class="category">
			    <h4>categorias</h4>
			    <script>
					jQuery(document).ready(function($){
						$('.category ul').addClass('cat');
					});
			    </script>
			    
			    <?php html5blank_nav(); ?>
			  </div>
			  <div class="contact">
			    <h4>CONTACTANOS</h4>
			    <div class="btn"><a href="mailto:editor@chilerunning.com">CONTACTO EDITOR</a></div>
			    <div class="btn"><a href="mailto:alvaro@mediatrends.cl">CONTACTO PUBLICITARIO</a></div>
			  </div>
			</footer>
			<!-- /footer -->

		</main>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51156134-2', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
