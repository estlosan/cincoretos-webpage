<?php
	get_header();
?>
	<main class="main">
		<div class="banner">
			<img class="banner__img" src="<?php echo get_template_directory_uri() ?>/images/banner.jpg">
				<div class="banner__text">
					<h3 class="banner__parragraf">¿Piel cansada y llena de poros?</h3>
					<h2 class="banner__title">Serum noche</h2>
					<button class="banner__button button">Lo necesito</button>
				</div>
		</div>
		
		<?php
			get_template_part('loop','');
		?>
	</main><!-- .site-main -->

<?php
get_footer();
?>
