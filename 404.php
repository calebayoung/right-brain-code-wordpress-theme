<?php
/**
 * Auto-generated 404 page template
 *
 * @author  Caleb Young <caleb.a.young@gmail.com
 * @package right-brain-code
 */

get_header();
?>
<div class="lost page-content">
	<h1 class="lost__title">404 - Not Found</h1>
	<p>Sorry, it looks like this page is missing. Try one of these instead:</p>
	<p><a href="<?php echo esc_url( home_url() ); ?>">Home</a></p>
	<p><a href="<?php echo esc_url( sprintf( '%s/portfolio', home_url() ) ); ?>">Portfolio</a></p>
	<p><a href="http://calebayoung.com/wp-content/uploads/2020/07/Resume-Caleb-Young.pdf">Resumé</a></p>
</div>
<?php
get_footer();
