<?php
$theme_directory = get_template_directory_uri();
?>
        <div class="footer__background">
            <footer class="footer">
                <div class="footer__logo-container">
                    <img class="footer__logo" src="<?php echo sprintf( '%s/icons/code-solid.svg', $theme_directory ); ?>">
                </div>
                <div class="footer__section">
                    <span class="footer__text">Home</span>
                    <span class="footer__text">Portfolio</span>
                    <span class="footer__text">Blog</span>
                </div>
                <div class="footer__section">
                    <span class="footer__text">Icons provided by FontAwesome</span>
                    <span class="footer__text">Photos provided by Unsplash</span>
                    <span class="footer__text">This site is proudly powered by WordPress</span>
                </div>
                <div class="footer__section footer__section--contact">
                    <img class="footer__icon" src="<?php echo sprintf( '%s/icons/envelope-solid.svg', $theme_directory ); ?>">
                    <img class="footer__icon" src="<?php echo sprintf( '%s/icons/linkedin-brands.svg', $theme_directory ); ?>">
                </div>
                <div class="footer__section">
                    <span class="footer__text">&copy; Caleb Young 2020</span>
                </div>
            </footer>
        </div>
    </body>
</html>