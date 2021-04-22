<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php wp_head();?>
			<link rel="stylesheet" href="bootstrap.min.css">
		</head>
<body <?php body_class();?>>
	

	<header class="sticky-top">
		
		<?php wp_nav_menu(); 
			array(
				'theme_location' => 'top-menu',
				'menu_class' => 'navigation'
			)
		?>
	</header>
