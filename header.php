<?php
/**
 * Builds the page header
 *
 * @author  Caleb Young <caleb.a.young@gmail.com>
 * @package right-brain-code
 */

$theme_directory = get_template_directory_uri();

/**
 * Returns the correct <title></title> value for the current page
 */
function wp_blueprint_site_title() {
	if ( is_front_page() ) {
		return get_bloginfo( 'name' );
	} else {
		return wp_title();
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#2e3440">
		<title>right-brain code</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="shortcut icon" href="<?php echo esc_url( "$theme_directory/images/favicon.png" ); ?>" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?> >
	<div class="header__background">
		<header class="header">
			<div class="header__title-container">
				<a href="<?php echo esc_url( home_url() ); ?>"><img class="header__icon" src="<?php echo esc_url( "$theme_directory/icons/code-solid.svg" ); ?>"></a>
				<h1 class="header__title"><a href="<?php echo esc_url( home_url() ); ?>">Right-Brain Code</a></h1>
			</div>
			<div class="header__link-container">
				<h2 class="header__link"><a class="header__anchor" href="<?php echo esc_url( home_url() ); ?>">Home</a></h2>
				<h2 class="header__link"><a class="header__anchor" href="<?php echo esc_url( sprintf( '%s/portfolio', home_url() ) ); ?>">Portfolio</a></h2>
				<!-- <h2 class="header__link"><a class="header__anchor" href="#">Blog</a></h2> -->
			</div>
		</header>
	</div>
