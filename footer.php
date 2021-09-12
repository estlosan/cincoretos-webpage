<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<footer class="footer">
	<div class="footer__container">
		<div class="newsletter">
			<h2 class="newsletter__title">¡Sé el primero en enterarte!</h2>
			<p class="newsletter__text">Suscríbete para recibir las últimas noticas de nuestros productos</p>
			<input class="newsletter__input" type="text" placeholder="Dirección Correo" class="newsletter__email">
			<button class="newsletter__button">Suscribirse</button>
			<div class=newsletter__rrss>
				<ul class=rrss__logos>
					<li><a href="#"><img class="rrss__img" src="<?php echo get_template_directory_uri() ?>/images/facebook_logo.png" alt=""></a></li>
					<li><a href=""><img class="rrss__img" src="<?php echo get_template_directory_uri() ?>/images/instagram_logo.png" alt=""></a></li>
					<li><a href=""><img class="rrss__img" src="<?php echo get_template_directory_uri() ?>/images/whatsapp_logo.png" alt=""></a></li>
				</ul>
			</div>
		</div>

		<nav class="footer__nav">
			<ul class="footer-menu">
				<li class="footer__menu__element">
					<a class="footer__nav__title">About 5Retos</a>
					<ul class="sub-menu">
						<li><a href="#">About us</a></li>				
						<li><a href="#">Jobs</a></li>
					</ul>
				</li>
				<li class="footer__menu__element">
					<a class="footer__nav__title">My 5Retos</a>
					<ul class="sub-menu">
						<li><a href="#">Mi cuenta</a></li>				
						<li><a href="#">Mi estado</a></li>
						<li><a href="#">Recompensas</a></li>
					</ul>
				</li>
				<li class="footer__menu__element">
					<a class="footer__nav__title">Ayuda</a>
					<ul class="sub-menu">
						<li><a href="#">Faqs</a></li>				
						<li><a href="#">Estado envio</a></li>
						<li><a href="#">Gastos envío</a></li>
					</ul>
				</li>
				<li class="footer__menu__element">
					<a class="footer__nav__title">Premios</a>
					<ul class="sub-menu">
						<li><a href="#">Novedades</a></li>				
						<li><a href="#">Gasto premio</a></li>
						<li><a href="#">Envios gratis</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
