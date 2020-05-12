<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header>
		<h1><?php single_cat_title(); ?></h1>
		<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_class' => 'top-bar'
				)
			);
		?>
	</header>