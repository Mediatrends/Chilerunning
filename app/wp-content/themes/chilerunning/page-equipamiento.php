<?php /* Template Name: Equipamiento */ ?>
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
		<div class="ad-300x250" id="content_300x250"></div>
	</div>
</section>
<section class="cont_post">

	<?php get_template_part('loop_equipamiento'); ?>

</section>
<?php get_footer(); ?>