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
		          <div style="width:728px;height:90px;margin:0 auto;" class="cont_ad" id="header_top">

						<iframe id='a6c21010' name='a6c21010' src='http://ads.adnetwork.cl/www/delivery/afr.php?resize=1&amp;zoneid=182&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl}' frameborder='0' scrolling='no' width='728' height='90'><a href='http://ads.adnetwork.cl/www/delivery/ck.php?n=a9ecc9b4&amp;cb={random}' target='_blank'><img src='http://ads.adnetwork.cl/www/delivery/avw.php?zoneid=182&amp;cb={random}&amp;n=a9ecc9b4&amp;ct0={clickurl}' border='0' alt='' /></a></iframe>

		          </div>
		        </div>

		        <div class="control_header">
		          <div class="enter_menu">
		            <svg viewBox="0 0 80 70">
		              <use xlink:href="#svg_icon_menu"></use>
		            </svg>
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
