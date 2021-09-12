<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header>
		<nav class="nav">
			<div class="nav__logo">
				<div class="hamburger">
					<span class="hamburger__line"></span>
					<span class="hamburger__line"></span>
					<span class="hamburger__line"></span>
				</div>
				<a href="#"><img class="logo__img" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Logo 5retos"></a>
			</div>
			<ul class="nav__items">
				<li class="nav__item"><a href="#"><i class="fas fa-syringe"></i>Cosmética</a></li>
				<li class="nav__item"><a href="#"><i class="fas fa-magic"></i>Maquillaje</a></li>
				<li class="nav__item"><a href="#"><i class="fas fa-paw"></i>Cosmética mascotas</a></li>
				<li class="nav__item"><a href="#"><i class="fas fa-shopping-bag"></i>Accesorios</a></li>
				<li class="nav__item"><a href="#"><i class="fas fa-headset"></i>Asesoramiento on-line</a></li>
				<li class="nav__item"><a href="#"><i class="fas fa-comments"></i>Contacto</a></li>
			</ul>
			<div class="nav__icons">
				<a href="#"><i class="fas fa-search"></i></a>
				<a href="#"><i class="fas fa-user"></i></a>
				<a href="#"><i class="fas fa-shopping-basket"></i></a>
			</div>
		</nav>
	</header>
