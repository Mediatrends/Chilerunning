<?php /* Template Name: Index */ ?>
<?php get_header(); ?>
<section class="slider_head">
		
	<article class="cont_img_slider">
		
		<main>
			
			<h2>5 COSAS QUE LOS CORREDORES DEBEMOS SABER ACERCA DE LAS RODILLAS</h2>
			<ul>
			 	<li>
			 		<p>
			 			<i class="fa fa-pencil"></i>
			 			<span>Camilo Escalona</span>
			 		</p>
			 	</li>
			 	<li>
			 		<p>
			 			<i class="fa fa-eye"></i>
			 			<span>13000</span>
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
		<footer>
			<div class="more_read">leer mas</div>
			<div class="nav_slider">
				<ul>
					<li><i class="fa fa-circle"></i></li>
					<li><i class="fa fa-circle"></i></li>
					<li><i class="fa fa-circle"></i></li>
				</ul>
			</div>
		</footer>

	</article>
</section>
<section class="ad">
	<div class="open_close_ad">
		<span class="close">Cerrar Publicidad</span>
		<span class="open hide">Abrir Publicidad</span>
		<i class="fa fa-times"></i>
	</div>
	<div class="cont_ad_middle">
		<div class="ad-728x90"></div>
	</div>
</section>
<section class="cont_post">

	<?php get_template_part('loop_main'); ?>

</section>
<?php get_footer(); ?>