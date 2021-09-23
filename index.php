<?php
	get_header();
?>
	<main class="main">
		<div class="banner">
			<img class="banner__img" src="<?php echo get_template_directory_uri() ?>/images/banner.jpg">
				<div class="banner__text">
					<h3 class="banner__parragraf">¿Piel cansada y llena de poros?</h3>
					<h2 class="banner__title">Serum noche</h2>
					<button class="banner__button button--black">Lo necesito</button>
				</div>
		</div>
		<div class="products">
			<div class="product">
				<img class="product__img" src="<?php echo get_template_directory_uri() ?>/images/product_Test1.jpg" alt="Producto">
				<h3 class="product__name">Sublime serum</h3>
				<p class="product__price">100€</p>
				<a href="http://localhost/5retos/product/" class="product__button button--black">Compra ahora</a>
			</div>
			<div class="product">
				<img class="product__img" src="<?php echo get_template_directory_uri() ?>/images/product_Test2.jpg" alt="Producto">
				<h3 class="product__name">Sublime serum</h3>
				<p class="product__price">100€</p>
				<a class="product__button button--black">Compra ahora</a>
			</div>
		</div>
	</main><!-- .site-main -->

<?php
get_footer();
?>
