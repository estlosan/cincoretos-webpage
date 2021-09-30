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
		<?php wp_nav_menu( 
				array( 
					'container' => 'nav',
					'container_class' => 'footer__nav',
					'theme_location' => 'footer-menu',
					'menu' => '',
					'menu_class' => 'footer-menu',
					'menu_id' => ''
				) 
			); 
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
