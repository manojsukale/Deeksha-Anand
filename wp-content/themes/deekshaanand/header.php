<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php ((!is_front_page()) ? body_class('nothomepage ' . $post->post_name) : body_class()) ?>>
	<?php wp_body_open(); ?>
	<div class="dummy--header"></div>
	<header class="header--wrap">
		<div class="container--responsive">
			<div class="nav--wrap">
				<a href="/" class="logo">
					<img class="logo--img" src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="logo">
					<div class="logo--inner">
						<div class="logo--text">
							<span class="text-one">Deeksha Anand</span>
							<span class="text-two">Mortgage Broker</span>
						</div>
						<img class="logo--moco" src="<?php echo get_template_directory_uri(); ?>/src/images/moco-logo.png" alt="logo">
					</div>
				</a>
				<!-- <div class="nav--menu-wrap">
					<ul class="nav--menu">
						<li class="nav-link"><a href="#">About</a></li>
						<li class="nav-link"><a href="#">Home Purchase</a></li>
						<li class="nav-link"><a href="#">Refinance</a></li>
						<li class="nav-link"><a href="#">Mortgage Renewal</a></li>
						<li class="nav-link"><a href="#">Mortgage Pre-Approval</a></li>
					</ul>
					<ul class="contact--info">
						<li class="contact-link"><a href="8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
						<li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
					</ul>
				</div> -->

				<div class="nav--menu-wrap">
					<div class="nav--menu-inner">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'custom-menu',
							'container' => false,
							'menu_class' => 'nav--menu',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>'
						));
						?>
					</div>
					<ul class="contact--info">
						<li class="contact-link"><a href="tel:8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
						<li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
					</ul>
				</div>
				<div class="nav--hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>