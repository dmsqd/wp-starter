<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie7 lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie8 lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!--[if IE 7]>
		    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/csswizardry-grids-ie7-polyfill.min.js"></script>
		<![endif]-->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div class="inner-header wrap">

					<div class="grid">

						<div class="grid__item">
							<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo"><?php bloginfo('name'); ?></a>
							<?php // bloginfo('description'); ?>
						</div><!--

					 --><div class="grid__item">
							<button class="nav-toggle">Menu</button>
						</div><!--

					 --><div class="grid__item">
							<nav role="navigation">
								<?php bones_main_nav(); ?>
							</nav>
						</div>

					</div><!-- end .grid -->

				</div> <!-- end .inner-header -->

			</header> <!-- end header -->
