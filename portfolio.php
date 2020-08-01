<?php
/**
 * Template Name: Portfolio
 *
 * @author  Caleb Young <caleb.a.young@gmail.com
 * @package right-brain-code
 */

get_header();

$theme_directory = get_template_directory_uri();
?>
<div class="portfolio page-content">
	<h2 class="page-content__heading">Resume</h2>
	<p>Caleb Young, July 2020:<a href="http://calebayoung.com/wp-content/uploads/2020/07/Resume-Caleb-Young.pdf" target="_blank" style="margin-left: 1rem;">View</a><a href="http://calebayoung.com/wp-content/uploads/2020/07/Resume-Caleb-Young.pdf" target="_blank" download style="margin-left: 1rem;">Download</a></p>
	<h2 class="page-content__heading">past & current projects</h2>
	<ul>
		<li>BYU Speeches: speeches.byu.edu</li>
		<li>BYU Performing Arts Management: pam.byu.edu</li>
		<li>BYU Brand: brand.byu.edu</li>
		<li>BYU Magazine: magazine.byu.edu</li>
		<li>BYU Publications & Graphics: create.byu.edu</li>
		<li>PG-Core WordPress Theme Framework: pg-core.byu.edu</li>
		<li>right-brain code: front-end source & WordPress theme</li>
		<li>BYU UXD Club: Homepage rough draft</li>
		<li>Fridget: fridget-5afbc.web.app</li>
		<li>ChainLink.js: view on GitHub</li>
	</ul>
	<h2 class="page-content__heading">Programming Toolkit</h2>
	<div class="programming-toolkit">
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/html5-brands.svg" ); ?>">
			<p>HTML5</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/css3-alt-brands.svg" ); ?>">
			<p>CSS3</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/js-square-brands.svg" ); ?>">
			<p>JavaScript</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/php-brands.svg" ); ?>">
			<p>PHP</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/wordpress-brands.svg" ); ?>">
			<p>WordPress</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/java-brands.svg" ); ?>">
			<p>Java</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/git-alt-brands.svg" ); ?>">
			<p>Git</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/jquery.svg" ); ?>">
			<p>jQuery</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/docker-brands.svg" ); ?>">
			<p>Docker</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/cplusplus.png" ); ?>">
			<p>C++</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/python-brands.svg" ); ?>">
			<p>Python</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/database-solid.svg" ); ?>">
			<p>SQL</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/node-js-brands.svg" ); ?>">
			<p>Node.js</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/firebase.png" ); ?>">
			<p>Firebase</p>
		</div>
		<div class="portfolio__tool">
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/angular-brands.svg" ); ?>">
			<p>Angular</p>
		</div>
	</div>
</div>
<?php
get_footer();
