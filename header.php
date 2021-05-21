<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
	<head>
		<meta charset="utf-8">
		<meta name="discription" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> >
	<!-- ?php wp_body_open(); ?> -->
	<div class="grid-container">
		<header>
			<div class="l-header">
				<div class="menu">Menu</div>
				<h1><a href="<?php echo esc_url(home_url()) ?>"><?php bloginfo('name'); ?></a></h1>
				<?php get_search_form(); ?>
			</div><!-- /.l-header -->
		</header>