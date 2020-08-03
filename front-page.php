<?php
/**
 * The auto-generated template file for the front page
 *
 * @author  Caleb Young <caleb.a.young@gmail.com
 * @package right-brain-code
 */

$theme_directory = get_template_directory_uri();

get_header();
?>
<div class="hero__shadow">
	<div class="hero">
		<header class="home-header">
			<div class="home-header__title-container">
				<a href="#"><img class="home-header__icon" src="<?php echo esc_url( "$theme_directory/icons/code-solid.svg" ); ?>"></a>
				<h1 class="home-header__title"><a href="#">Right-Brain Code</a></h1>
			</div>
			<div class="home-header__link-container">
				<h2 class="home-header__link"><a class="home-header__anchor" href="<?php echo esc_url( home_url() ); ?>">Home</a></h2>
				<h2 class="home-header__link"><a class="home-header__anchor" href="<?php echo esc_url( sprintf( '%s/portfolio', home_url() ) ); ?>">Portfolio</a></h2>
				<!-- <h2 class="home-header__link"><a class="home-header__anchor" href="#">Blog</a></h2> -->
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
<div class="page-content">
	<p class="mobile-portfolio-link"><a href="<?php echo esc_url( sprintf( '%s/portfolio', home_url() ) ); ?>">View my portfolio >></a></p>
	<h2 class="page-content__heading">Introduction</h2>
	<p>Do limitations stifle or enable creativity? While it’s easy to believe more options will result in a better final product, more options actually don't guarantee higher quality. Orson Welles, a prominent filmmaker and actor, argued that limitations are necessary in order to create something compelling. Anthony Frashaug, a typographer and designer from Welles’ generation, felt the same way. He said “Admit constraints; then, having admitted, fill with discovery”.</p>
	<p>This idea is especially applicable in web development and design. The web is a virtually infinite canvas. While the possibilities are empowering, newcomers and natives alike can become lost and arrive at less-than-stellar destinations. Defining and discovering boundaries is central to creating a web product that goes beyond functional.</p>
	<p>That’s where I live. From fleshing out a design system to establishing database relationships, I find purpose and energy in creating artful web applications. I spend most of my time in front-end development, but I enjoy stretching on both sides of the spectrum. I’ve dabbled in the world of UX design, and I’m not afraid to dig into the back-end of an application or the devops processes of a team.</p>
	<p>My name is <b>Caleb Young</b>, and I'm excited to work with you on a project, collaborate to solve a problem, or learn one of the many things you probably know more about. Feel free to reach out to me through <a href="mailto:caleb.a.young@gmail.com">email</a> or on <a href="https://www.linkedin.com/in/caleb-young-32b9ba169/" target="_blank">LinkedIn</a>. If you'd like, you can view my resum&eacute; <a href="http://calebayoung.com/wp-content/uploads/2020/07/Resume-Caleb-Young.pdf" target="_blank">here</a>.</p>
	<div class="home-cards">
		<div class="home-card">
			<img class="home-card__icon" src="<?php echo esc_url( "$theme_directory/icons/laptop-code-solid.svg" ); ?>">
			<h2 class="home-card__title">Web Developer</h2>
			<p>3+ years of professional web development experience</p>
			<hr class="home-card__separator">
			<h3 class="home-card__subtitle">Languages:</h3>
			<p>HTML, CSS, JavaScript, PHP, Java, C++, Python</p>
			<h3 class="home-card__subtitle">Dev Tools:</h3>
			<p>Git/GitHub, Docker,<br>Node.js, Clubhouse.io, JetBrains IDEs</p>
		</div>
		<div class="home-card">
			<img class="home-card__icon" src="<?php echo esc_url( "$theme_directory/icons/drafting-compass-solid.svg" ); ?>">
			<h2 class="home-card__title">Designer</h2>
			<p>Familiar with common design problems and solutions</p>
			<hr class="home-card__separator">
			<h3 class="home-card__subtitle">Specific Experience:</h3>
			<p>Content management systems, inventory management, branding</p>
			<h3 class="home-card__subtitle">Design Tools:</h3>
			<p>Adobe XD, Sketch,<br>Figma, zeroheight</p>
		</div>
		<div class="home-card">
			<img class="home-card__icon" src="<?php echo esc_url( "$theme_directory/icons/pencil-alt-solid.svg" ); ?>">
			<h2 class="home-card__title">Writer</h2>
			<p>Enjoys articulating thoughts and communicating clearly</p>
			<hr class="home-card__separator">
			<h3 class="home-card__subtitle">Literature Review</h3>
			<p><a href="http://calebayoung.com/wp-content/uploads/2020/08/Literature-Review-Building-Simple-Maintainable-and-Accessible-Web-Interfaces.pdf" target="_blank">Building Simple, Maintainable, and Accessible Web Interfaces</a></p>
			<h3 class="home-card__subtitle">Blog Posts:</h3>
			<p>(coming soon)</p>
		</div>
	</div>
	<h2 class="page-content__heading">Recent Work</h2>
	<ul>
		<li>BYU Publications & Graphics Sites:</li>
		<ul>
			<li><a href="https://speeches.byu.edu" target="_blank">speeches.byu.edu</a></li>
			<li><a href="https://pam.byu.edu" target="_blank">pam.byu.edu</a></li>
			<li><a href="https://brand.byu.edu" target="_blank">brand.byu.edu</a></li>
		</ul>
		<li>right-brain code</li>
		<ul>
			<li><a href="https://github.com/calebayoung/right-brain-code-front-end" target="_blank">Front-end code</a></li>
			<li><a href="https://github.com/calebayoung/right-brain-code-wordpress-theme" target="_blank">WordPress theme</a></li>
		</ul>
		<li>BYU UXD Club Website</li>
		<ul>
			<li><a href="http://calebayoung.com/byu-uxd-front-end/" target="_blank">Homepage rough draft</a></li>
			<li><a href="https://github.com/calebayoung/byu-uxd-front-end" target="_blank">Front-end code</a></lie>
		</ul>
	</ul>
	<h2 class="page-content__heading">Recent Thoughts</h2>
	<p class="recent-thought"><b>July 31st, 2020:</b> Why are object-oriented patterns so rare in front-end development? I found a neat way to combine the two with Handlebars and JavaScript classes, check out <a href="https://github.com/calebayoung/chainlink.js" target="_blank">this repo</a> or <a href="http://calebayoung.com/chainlink/docs/" target="_blank">the docs</a> (still a work in progress).</p>
	<p class="recent-thought"><b>July 2nd, 2020:</b> CSS variables are so cool! I've only ever used them to store hex values. There are so many other applications. <a href="#">https://www.youtube.com/watch?v=NtRmIp4eMjs</a></p>
	<p class="recent-thought"><b>June 25th, 2020:</b> JavaScript debouncing - I was recently reminded of this important function, especially for code bound to the window.scroll event. <a href="https://davidwalsh.name/javascript-debounce-function">https://davidwalsh.name/javascript-debounce-function</a></p>
</div>
<?php
get_footer();
