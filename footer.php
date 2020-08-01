<?php
/**
 * Builds the page footer
 *
 * @author  Caleb Young <caleb.a.young@gmail.com>
 * @package right-brain-code
 */

$theme_directory = get_template_directory_uri();
?>
		<div class="footer__background">
			<footer class="footer">
				<div class="footer__logo-container">
					<a href="<?php echo esc_url( home_url() ); ?>"><img class="footer__logo" src="<?php echo esc_url( "$theme_directory/icons/code-solid.svg" ); ?>"></a>
				</div>
				<div class="footer__section">
					<a class="footer__text" href="<?php echo esc_url( home_url() ); ?>">Home</a>
					<a class="footer__text" href="<?php echo esc_url( sprintf( '%s/portfolio', home_url() ) ); ?>">Portfolio</a>
					<!-- <a class="footer__text" href="">Blog</a> -->
				</div>
				<div class="footer__section">
					<span class="footer__text">Icons provided by FontAwesome</span>
					<span class="footer__text">Photos provided by Unsplash</span>
					<span class="footer__text">This site is proudly powered by WordPress</span>
				</div>
				<div class="footer__section footer__section--contact">
					<a href="mailto:caleb.a.young@gmail.com"><img class="footer__icon" src="<?php echo esc_url( "$theme_directory/icons/envelope-solid.svg" ); ?>"></a>
					<a href="https://github.com/calebayoung" target="_blank"><img class="footer__icon" src="<?php echo esc_url( "$theme_directory/icons/github-brands.svg" ); ?>"></a>
					<a href="https://www.linkedin.com/in/caleb-young-32b9ba169/" target="_blank"><img class="footer__icon" src="<?php echo esc_url( "$theme_directory/icons/linkedin-brands.svg" ); ?>"></a>
				</div>
				<div class="footer__section">
					<span class="footer__text">&copy; Caleb Young 2020</span>
				</div>
			</footer>
		</div>
	</body>
</html>
