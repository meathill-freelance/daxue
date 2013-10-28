<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php ci_e_title(); ?></title>
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- JS files are loaded via /functions/scripts.php -->

	<!-- CSS files are loaded via /functions/styles.php -->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php do_action('after_open_body_tag'); ?>

<div id="header-wrap">
	<header id="header" class="container">

		<?php ci_e_logo('<h1>', '</h1>'); ?>

    <div id="sub-header" class="four columns alpha">
      海洋国旅 羊坊店
    </div>

		<nav id="navigation" class="ten columns alpha">
			<?php 
				if(has_nav_menu('ci_main_menu'))
					wp_nav_menu( array(
						'theme_location' 	=> 'ci_main_menu',
						'fallback_cb' 		=> '',
						'container' 		=> '',
						'menu_id' 			=> 'nav',
						'menu_class' 		=> 'nav group'
					));
				else
					wp_page_menu();
			?>
		</nav><!-- /navigation -->
		
	</header><!-- /header -->
</div><!-- /container -->

<?php
	if (is_page_template('template-front.php')):
		get_template_part('inc_slider');
	else:
		get_template_part('inc_hero');
	endif;
?>

