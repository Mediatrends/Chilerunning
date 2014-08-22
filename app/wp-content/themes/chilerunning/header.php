<!doctype html>
<html <?php language_attributes(); ?> class="no-js" itemscope itemtype="http://schema.org/Article">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
		<?php wp_head(); ?>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bjqs.css"/>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <?php //TAG GOOGLE DFP ?>
        <script type='text/javascript'>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		(function() {
		var gads = document.createElement('script');
		gads.async = true;
		gads.type = 'text/javascript';
		var useSSL = 'https:' == document.location.protocol;
		gads.src = (useSSL ? 'https:' : 'http:') + 
		'//www.googletagservices.com/tag/js/gpt.js';
		var node = document.getElementsByTagName('script')[0];
		node.parentNode.insertBefore(gads, node);
		})();
		</script>

	</head>
	<body <?php body_class(); ?>>
		
		<?php include (TEMPLATEPATH . '/svg_graph.php'); ?>

		<!-- wrapper -->
		<main class="cont_all">

			<!-- header -->
			<header class="header">
		        <div class="logo">
		        	<a href="<?php echo home_url(); ?>">
			          <svg viewBox="0 0 324.688 324.688">
			            <use xlink:href="#svg_logo"></use>
			          </svg>
			        </a>
		        </div>
		        <div class="ad_header">

		          <div class="cont_ad"></div>

		        </div>

		        <div class="control_header">
		          <div class="enter_menu">
					<div id="icon_menu">
						<div class="linea_01"></div>
						<div class="linea_02"></div>
						<div class="linea_03"></div>
					</div>

		          </div>
		        </div>

		        <nav id="menu_open" class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>

		        <div id="tools_open" class="tools">
		          <div class="search">
		          	<?php get_template_part('searchform'); ?>
		          </div>
		          <div class="redes-sociales">
		            <p>Encuentranos:</p>
		            <ul>
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
		        </div>

		      </header>
			<!-- /header -->
