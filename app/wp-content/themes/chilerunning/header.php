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
		
		<script type='text/javascript'>
		googletag.defineSlot('/92947493/300x250_CR', [300, 250], 'div-gpt-ad-1408742889084-0').addService(googletag.pubads());
		googletag.defineSlot('/92947493/300x250_CR_sidebar', [300, 250], 'div-gpt-ad-1408742889084-1').addService(googletag.pubads());
		googletag.defineSlot('/92947493/300x250_CR_sidebar_2', [300, 250], 'div-gpt-ad-1408742889084-2').addService(googletag.pubads());
		googletag.defineSlot('/92947493/728X90_CR', [728, 90], 'div-gpt-ad-1408742889084-3').addService(googletag.pubads());
		googletag.defineSlot('/92947493/728x90_CR_cont', [728, 90], 'div-gpt-ad-1408742889084-4').addService(googletag.pubads());
		googletag.pubads().enableSyncRendering();
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
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

		          <div class="cont_ad">
		          	
		          	<!-- 728X90_CR -->
					<div id='div-gpt-ad-1408742889084-3'>
					<script type='text/javascript'>
					googletag.display('div-gpt-ad-1408742889084-3');
					</script>
					</div>

		          </div>

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
		            	<li><a href="http://twitter.com/chilerunningscl" target="_blank">
		                  <svg viewBox="19 22 29 23.999">
		                    <use xlink:href="#svg_icon_twitter"></use>
		                  </svg></a>
		              	</li>
		              	<li><a href="http://facebook.com/chilerunningscl" target="_blank">
		                  <svg viewBox="25.396 17.68 15.208 32.638">
		                    <use xlink:href="#svg_icon_facebook"></use>
		                  </svg></a>
		              	</li>
		              	<li><a href="http://instagram.com/chilerunning" target="_blank">
		                  <svg viewBox="0 0 100 100">
		                    <use xlink:href="#svg_icon_instagram"></use>
		                  </svg></a>
		              	</li>
		            </ul>
		          </div>
		        </div>

		      </header>
			<!-- /header -->
