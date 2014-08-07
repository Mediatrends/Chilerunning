<?php /* Template Name: Index */ ?>
<?php get_header(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bjqs-1.3.min.js"></script>
<script type="text/javascript">
	
	jQuery(document).ready(function($){
		$('#slider_top').bjqs({
	        'height' : 440,
	        'width' : '100%',
	        'responsive' : true,
	        'showcontrols' : false,
	    });
	});

</script>

<section class="slider_head">
		
	<div id="slider_top">
		
		<ul class="cont_img_slider bjqs">
		
			<?php get_template_part('loop_slider'); ?>

		</ul>

	</div>
</section>
<section class="ad">
	<div class="open_close_ad">
		<span class="close">Cerrar Publicidad</span>
		<span class="open hide">Abrir Publicidad</span>
		<i class="fa fa-times"></i>
	</div>
	<div class="cont_ad_middle">
		<div class="ad-728x90">
			
			<iframe id='a46cbcbf' name='a46cbcbf' src='http://ads.adnetwork.cl/www/delivery/afr.php?resize=1&amp;zoneid=182&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl}' frameborder='0' scrolling='no' width='728' height='90'><a href='http://ads.adnetwork.cl/www/delivery/ck.php?n=abc5f5cd&amp;cb={random}' target='_blank'><img src='http://ads.adnetwork.cl/www/delivery/avw.php?zoneid=182&amp;cb={random}&amp;n=abc5f5cd&amp;ct0={clickurl}' border='0' alt='' /></a></iframe>
		
		</div>
	</div>
</section>
<section class="cont_post">

	<?php get_template_part('loop_main'); ?>

</section>
<?php get_footer(); ?>