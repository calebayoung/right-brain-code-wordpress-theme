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
	<p>Caleb Young:<a href="http://calebayoung.com/wp-content/uploads/2020/09/Resume-Caleb-Young.pdf" target="_blank" style="margin-left: 1rem;">View</a><a href="http://calebayoung.com/wp-content/uploads/2020/09/Resume-Caleb-Young.pdf" target="_blank" download style="margin-left: 1rem;">Download</a></p>
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
			<img src="<?php echo esc_url( "$theme_directory/tool-icons/aws.png" ); ?>">
			<p>AWS</p>
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
	<div class="projects">
		<h2 class="page-content__heading">Past & Current Projects</h2>
		<div>
			<p>BYU Speeches: <a href="https://speeches.byu.edu/" target="_blank">speeches.byu.edu</a></p>
			<a href="https://speeches.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/speeches.png" ); ?>"></a>
		</div>
		<div>
			<p>BYU Performing Arts Management: <a href="https://pam.byu.edu/" target="_blank">pam.byu.edu</a></p>
			<a href="https://pam.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/pam.png" ); ?>"></a>
		</div>
		<div>
			<p>BYU UXD Club: <a href="http://uxd.byu.edu" target="_blank">uxd.byu.edu</a> & <a href="https://github.com/calebayoung/byu-uxd-front-end" target="_blank">source code</a></p>
			<a href="http://calebayoung.com/byu-uxd-front-end/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/byu-uxd-club.png" ); ?>"></a>
		</div>
		<div>
			<p>right-brain code: <a href="https://github.com/calebayoung/right-brain-code-front-end" target="_blank">front-end source</a> & <a href="https://github.com/calebayoung/right-brain-code-wordpress-theme" target="_blank">WordPress theme</a></p>
			<a href="<?php echo esc_url( home_url() ); ?>"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/right-brain-code.png" ); ?>"></a>
		</div>
		<div>
			<p>ChainLink.js: <a href="https://github.com/calebayoung/chainlink.js" target="_blank">view on GitHub</a> & <a href="http://calebayoung.com/chainlink/docs/" target="_blank">documentation</a></p>
			<a href="http://calebayoung.com/chainlink/docs/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/chainlink.png" ); ?>"></a>
		</div>
		<div>
			<p>BYU Brand: <a href="https://brand.byu.edu/" target="_blank">brand.byu.edu</a></p>
			<a href="https://brand.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/brand.png" ); ?>"></a>
		</div>
		<!-- <div>
			<p>BYU Publications & Graphics: <a href="https://create.byu.edu/" target="_blank">create.byu.edu</a></p>
			<a href="https://create.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/create.png" ); ?>"></a>
		</div> -->
		<div>
			<p>PG-Core WordPress Theme Framework: <a href="https://pg-core.byu.edu/" target="_blank">pg-core.byu.edu</a></p>
			<a href="https://pg-core.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/pg-core.png" ); ?>"></a>
		</div>
		<!-- <div>
			<p>Fridget: <a href="https://fridget-5afbc.web.app/" target="_blank">live front end</a>, <a href="https://github.com/calebayoung/fridget-vanilla" target="_blank">source code</a>, & <a href="https://github.com/calebayoung/fridget-modules" target="_blank">basic front-end code</a></p>
			<a href="https://fridget-5afbc.web.app/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/fridget.png" ); ?>"></a>
		</div> -->
		<div>
			<p>BYU Magazine: <a href="https://magazine.byu.edu/" target="_blank">magazine.byu.edu</a></p>
			<a href="https://magazine.byu.edu/" target="_blank"><img class="projects__screenshot" src="<?php echo esc_url( "$theme_directory/images/project-screenshots/magazine.png" ); ?>"></a>
		</div>
	</div>
	<h2 class="page-content__heading" style="text-align: center; margin: 6rem 0;">Have a question? Send me an <a href="mailto:caleb.a.young@gmail.com" style="text-decoration: underline;">email</a></h2>
</div>
<?php
get_footer();
