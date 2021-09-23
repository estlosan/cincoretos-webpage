<?php
get_header();
?>
	<main class="main">
		<div class="product__contiainer">
			<div class="product-container__img">
				<img src="<?php echo get_template_directory_uri() ?>/images/product_Test1Big.jpg">
			</div>
			<div class="product__info">
				<h1 class="product__name">
					Serum Noche
				</h1>
				<span class="product__price">
					1500€
				</span>
				<button class="product__cart">Añadir al carrito</button>
				<button class="product__wishlist">Añadir a la wishlist</button>
				<p class="product__description">
					El Sublime Eye Serum está elaborado a base de ácido hialurónico vegetal, extracto de pepino y aceite de jojoba ecológico. Su potente acción multi-correctora ataca de manera holística y efectiva todos los signos de deshidratación y envejecimiento de la zona que rodea los ojos, desvelando una mirada luminosa, rejuvenecida y descansada. 
				</p>
				<p class="product__ingredients">
					15 ml | Vegano | Bote de vidrio con cuenta-gotas | Testado dermatológicamente | 99,51% Ingredientes de origen natural
				</p>
			</div>
			<div class="products__dropdown">
				<div class="product__dropdown">
					<div class="button__dropdown">
						<h2 class="product__dropdown-title">¿Por que te gustará?</h2>
					</div>
					<div class="dropdown__content">
						<div class="dropdown__content-wrapper">
							<p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
						</div>
					</div>
				</div>
				<div class="product__dropdown">
					<div class="button__dropdown">
						<h2 class="product__dropdown-title">Activos Clave</h2>
					</div>
					<div class="dropdown__content">
						<div class="dropdown__content-wrapper">
							<p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
						</div>
					</div>
				</div>
				<div class="product__dropdown">
					<div class="button__dropdown">
						<h2 class="product__dropdown-title">Como usarlo</h2>
					</div>
					<div class="dropdown__content">
						<div class="dropdown__content-wrapper">
							<p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
						</div>
					</div>
				</div>
				<div class="product__dropdown">
					<div class="button__dropdown">
						<h2 class="product__dropdown-title">Ingredientes</h2>
					</div>
					<div class="dropdown__content">
						<div class="dropdown__content-wrapper">
							<p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
						</div>
					</div>
				</div>
			</div><!-- Product dropdown -->
			<div class="interesting-product">
				<h2 class="interesting-product-title">Te puede interesar...</h2>
				<div class="product-interesting">
					<img class="product-interesting__img" src="<?php echo get_template_directory_uri() ?>/images/product_Test1.jpg" alt="Producto">
					<h3 class="product-interesting__name">Sublime serum</h3>
					<p class="product-interesting__price">100€</p>
					<a href="http://localhost/5retos/product/" class="product-interesting__button button--black">Compra ahora</a>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
