<?php
$theme_directory = get_template_directory_uri();

get_header();
?>
<div class="page-content">
    <h2 class="page-content__heading">Introduction</h2>
    <p>Do limitations hold back creativity or enable it? While it's easy to believe more options will result in more possibilities, they don't guarantee a particularly meaningful result. Orson Welles, a prominent filmmaker and actor, argued that limitations are necessary in order to create something compelling. Anthony Frashaug, a typographer and designer from Welles' generation, felt the same way. He said "Admit constraints; then, having admitted, fill with discovery".</p>
    <p>This idea of constraints enabling creativity is especially applicable in web development and design. The web is a virtually infinite canvas. While the possibilities are empowering, newcomers and natives alike can become lost and arrive at a less-than-stellar destination. Defining and discovering boundaries is central to creating a web product that goes beyond functional.</p>
    <p>That's where I live. From flushing out a design system to establishing database relationships, I find purpose and energy in creating artful web applications. I'm centered in front-end development (where I spend most of my time), but I enjoy stretching on both sides of the spectrum. I've dabbled in the world of UX design, and I'm not afraid to dig into the back-end of an application or the devops processes of a team.</p>
    <p>My name is Caleb Young, and I'm excited to work with you on a project, collaborate on solving a problem, or learn one of the many things you probably know more about. Feel free to reach out to me through <a href="mailto:caleb.a.young@gmail.com">email</a> or on <a href="https://www.linkedin.com/in/caleb-young-32b9ba169/" target="_blank">LinkedIn</a>. If you'd like, you can view my resum&eacute; <a href="#">here</a>.</p>
    <div class="home-cards">
        <div class="home-card">
            <img class="home-card__icon" src="<?php echo sprintf( '%s/icons/laptop-code-solid.svg', $theme_directory ); ?>">
            <h2 class="home-card__title">Front-End Developer</h2>
            <p>3+ years of professional web development experience</p>
            <hr class="home-card__separator">
            <h3 class="home-card__subtitle">Languages:</h3>
            <p>HTML, CSS, JavaScript, PHP, Java, C++, Python</p>
            <h3 class="home-card__subtitle">Dev Tools:</h3>
            <p>Git/GitHub, Docker,<br>Node.js, Clubhouse.io, JetBrains IDEs</p>
        </div>
        <div class="home-card">
            <img class="home-card__icon" src="<?php echo sprintf( '%s/icons/drafting-compass-solid.svg', $theme_directory ); ?>">
            <h2 class="home-card__title">Designer</h2>
            <p>Familiar with common design problems and solutions</p>
            <hr class="home-card__separator">
            <h3 class="home-card__subtitle">Specific Experience:</h3>
            <p>Content management systems, inventory management, branding</p>
            <h3 class="home-card__subtitle">Design Tools:</h3>
            <p>Adobe XD, Sketch,<br>Figma, zeroheight</p>
        </div>
        <div class="home-card">
            <img class="home-card__icon" src="<?php echo sprintf( '%s/icons/pencil-alt-solid.svg', $theme_directory ); ?>">
            <h2 class="home-card__title">Writer</h2>
            <p>Enjoys articulating thoughts and communicating clearly</p>
            <hr class="home-card__separator">
            <h3 class="home-card__subtitle">Articles:</h3>
            <p><a href="#">Progressive Enhancement</a>, <a href="#">Semantic HTML</a></p>
            <h3 class="home-card__subtitle">Blog Posts:</h3>
            <p><a href="#">Holding to a Higher Standard</a>, <a href="#">What Spotify Taught Me About Connection</a></p>
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
            <li><a href="https://gitlab.com/calebayoung/right-brain-code-front-end" target="_blank">Front-end code</a></li>
            <li><a href="https://gitlab.com/calebayoung/right-brain-code-wordpress-theme" target="_blank">WordPress theme</a></li>
        </ul>
    </ul>
    <h2 class="page-content__heading">Recent Thoughts</h2>
    <p>CSS variables are so cool! I've only ever used them to store hex values. There are so many other applications. <a href="#">https://www.youtube.com/watch?v=NtRmIp4eMjs</a></p>
    <p>JavaScript debouncing: I was recently reminded of this important function, especially code is bound to the window.scroll event. <a href="https://davidwalsh.name/javascript-debounce-function">https://davidwalsh.name/javascript-debounce-function</a></p>
</div>
<?php
get_footer();
