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
			      <li><a href="#">
			          <svg viewBox="3.437 7.681 49.819 44.752">
			            <use xlink:href="#svg_icon_google"></use>
			          </svg></a></li>
			      <li><a href="#">
			          <svg viewBox="8.623 8 7.001 9.043">
			            <use xlink:href="#svg_icon_pinterest"></use>
			          </svg></a></li>
			      <li><a href="#">
			          <svg viewBox="19 22 29 23.999">
			            <use xlink:href="#svg_icon_twitter"></use>
			          </svg></a></li>
			      <li><a href="#">
			          <svg viewBox="25.396 17.68 15.208 32.638">
			            <use xlink:href="#svg_icon_facebook"></use>
			          </svg></a></li>
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