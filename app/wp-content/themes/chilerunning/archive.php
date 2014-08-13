<?php get_header(); ?>

	<!-- section -->
	<section class="cont_post cont_author">
		<div class="cont_author">

			<h2><?php _e( 'Archives', 'html5blank' ); ?></h2>

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
			<div class="ad-300x250" id="content_300x250">
				
				<!--/* OpenX iFrame Tag v2.8.11 (Rich Media - OpenX) */-->

				<iframe id='ae24c4c6' name='ae24c4c6' src='http://ads.adnetwork.cl/www/delivery/afr.php?resize=1&amp;zoneid=181&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl}' frameborder='0' scrolling='no' width='300' height='250'><a href='http://ads.adnetwork.cl/www/delivery/ck.php?n=a0846826&amp;cb={random}' target='_blank'><img src='http://ads.adnetwork.cl/www/delivery/avw.php?zoneid=181&amp;cb={random}&amp;n=a0846826&amp;ct0={clickurl}' border='0' alt='' /></a></iframe>


			</div>
		</div>
	</section>

<?php get_footer(); ?>
