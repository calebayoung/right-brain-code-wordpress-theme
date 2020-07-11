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
		<link rel="shortcut icon" href="<?php echo esc_url( "$theme_directory%s/images/favicon.png" ); ?>" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?> >
	<div class="hero__shadow">
		<div class="hero">
			<header class="header">
				<div class="header__title-container">
					<a href="#"><img class="header__icon" src="<?php echo esc_url( "$theme_directory/icons/code-solid.svg" ); ?>"></a>
					<h1 class="header__title"><a href="#">Right-Brain Code</a></h1>
				</div>
				<div class="header__link-container">
					<h2 class="header__link"><a class="header__anchor" href="#">Home</a></h2>
					<h2 class="header__link"><a class="header__anchor" href="#">Portfolio</a></h2>
					<h2 class="header__link"><a class="header__anchor" href="#">Blog</a></h2>
				</div>
			</header>
			<div class="hero__quote-container">
				<div class="hero__quote">
					<blockquote class="hero__quote-text">"The enemy of art is the absence of limitations."</blockquote>
					<cite class="hero__quote-cite">&mdash; Orson Welles</cite>
				</div>
			</div>
		</div>
	</div>
