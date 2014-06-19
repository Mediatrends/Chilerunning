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
			    <div class="btn">CONTACTO EDITOR</div>
			    <div class="btn">CONTACTO PUBLICITARIO</div>
			  </div>
			</footer>
			<!-- /footer -->

		</main>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
