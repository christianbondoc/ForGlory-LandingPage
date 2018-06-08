<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package For-Glory
 */

get_header();
?>

	<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="intro-banner banner vertical-align ">
			<div class="container">
				<div class="row">
					<div class="text-center col-12 intro-banner-txt">
						<h1 class="text-shadow">for glory</h1>
						<p>hand drawn art &nbsp;&nbsp;|&nbsp;&nbsp;open sourced
						</p>
						<h6>A final project by Christian Bondoc, Richcard Percival & Neelam Woolley</h6>
						<div class="CTAbtn btn col-12">
							<a href="http://bcit-for-glory.herokuapp.com/" target="_blank" class="btn btn-default btn-callout playNow" role="button">
								PLAY NOW
							</a>
						</div>
						<div class="CTAbtn btn col-12">
							<a href="https://github.com/christianbondoc/For-Glory" target="_blank" class="btn btn-default btn-callout gitPull" role="button">
								GIT PULL
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="home" id="home">
			<div class="container">
				<div class="section-title  col-12">
					<h2>about for glory</h2>
					<span class="border"></span>
				</div>
				<div class="row">
					<div class="col-md-6 mx-auto">
						<div class="about ">
							<p class="text-center">For Glory is a turn based card game, where players clash in a battle of light versus dark. Rise above the competition with the Valkyrie and her army of armoured troops, or crush your opponents into the dirt with the Wellman and his cutthroat crew. 
							</p>
							<p class="text-center">
								The gameplay is quick and strategic. The simplicity of the deck design makes For Glory easy to pick up, but hard to master. Rounds of the game go by quickly, so you don't have to worry about committing to long play sessions. This makes the game perfect for gamers on the go who want to kill some time during their day.
							</p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/forglorylogo.png" class="img-responsive fade">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="valk-vs-wellman" id="characters">
			<div class="art-banner banner vertical-align fade">
				<div class="container">
				<h1 class="banner-txt text-center col-12">an epic battle between light vs dark</h1>
			</div>
			</div>
			<div class="large-container">
				<div class="container">
				<div class="row text-center">
					
					<div class="col-sm-12 col-md-6 first-monster fade">
						<img src="<?php echo get_stylesheet_directory_uri();?>/Assets/valkryie.gif" class="big-valk img-responsive">
					</div>
					<div class="col-sm-12 col-md-6 first-monster first-monsters-right fade">
						<h1 class=" desc-monster-txt"> valkyrie </h1>
						<span class="border"></span>
						<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto incidunt sed consequatur 
							quaerat beatae magnam iusto sapiente expedita omnis ipsa. Amet officiis deserunt delectus
							rerum atque blanditiis iste maiores itaque consectetur repellat animi eius, consequatur
							quibusdam ducimus autem eveniet, similique voluptatibus debitis quae beatae facilis at?
							Mollitia in reiciendis beatae.
						</p>
						<span class="border"></span>
					</div>


					<div class="col-sm-12 col-md-6 first-monster fade wellman-txt-right">
						<img src="<?php echo get_stylesheet_directory_uri();?>/Assets/wellman.gif" class="big-wellman img-responsive">
					</div>
					<div class="col-sm-12 col-md-6 first-monster fade wellman-txt-right">
								<h1 class="desc-monster-txt ">wellman</h1>
							<span class="border"></span>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto incidunt sed consequatur 
								quaerat beatae magnam iusto sapiente expedita omnis ipsa. Amet officiis deserunt delectus
								rerum atque blanditiis iste maiores itaque consectetur repellat animi eius, consequatur
								quibusdam ducimus autem eveniet, similique voluptatibus debitis quae beatae facilis at?
								Mollitia in reiciendis beatae.
							</p>
							<span class="border"></span>
						</div>


					<div class="col-sm-12 col-md-6 first-monster fade wellman-txt-left">
								<h1 class="desc-monster-txt ">wellman</h1>
							<span class="border"></span>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto incidunt sed consequatur 
								quaerat beatae magnam iusto sapiente expedita omnis ipsa. Amet officiis deserunt delectus
								rerum atque blanditiis iste maiores itaque consectetur repellat animi eius, consequatur
								quibusdam ducimus autem eveniet, similique voluptatibus debitis quae beatae facilis at?
								Mollitia in reiciendis beatae.
							</p>
							<span class="border"></span>
						</div>

						
						<div class="col-sm-12 col-md-6 first-monster fade wellman-txt-left">
						<img src="<?php echo get_stylesheet_directory_uri();?>/Assets/wellman.gif" class="big-wellman img-responsive">
					</div>

					<div class="col-sm-12 col-md-6 first-monster fade">
						<img src="<?php echo get_stylesheet_directory_uri();?>/Assets/tutorialGif1.gif" class="big-valk img-responsive rounded">
					</div>
					<div class="col-sm-12 col-md-6 first-monster first-monsters-right fade">
						<h1 class=" desc-monster-txt"> easy to learn </h1>
						<span class="border"></span>
						<p> The gameplay is quick and strategic. The simplicity of the deck design makes For Glory easy to pick up, but hard to master. Rounds of the game go by quickly, so you don't have to worry about committing to long play sessions. This makes the game perfect for gamers on the go who want to kill some time during their day.

						</p>
						<span class="border"></span>
					</div>
					
				</div>
				</div>
				</div>
			</div>
		</section>
		
		<section class="about-game fade" id="about-game">
				<div class="tech-banner banner vertical-align">
					<div class="container text-center">
						<h1 class="banner-txt col-12">Built using Vanilla technologies</h1>
						<p>So you can edit and change anything you want for this project!</p>
					</div>
				</div>
			<div class="container text-center tech-info">
				<div class="row fade">
					<div class="col-md-3 col-sm-12">						
						<i class="fa fa-plug"></i>
						<h3>Socket.io</h3>
						<p>For Glory uses sockets.io and nodeJS to keep you and your friends connected all the time. 
							Play with your friends, make your own rooms, do whatever!
						</p>
					</div>
					<div class="col-md-3 col-sm-12">						
						<i class="fa fa-object-group"></i>
						<h3>Spritesheets</h3>
						<p>At For Glory, each sprite is hand drawn! We want to ensure that all characters look as spiffy, and as impressive as possible. Each character has been edited to have their own unique style
						</p>
					</div>
					<div class="col-md-3 col-sm-12">						
						<i class="fa fa-code"></i>
						<h3>Javascript ES6</h3>
						<p>For Glory is built using Vanilla Javascript! If you want to fork your own version of For Glory, you can easily do so and edit anything you want!
						</p>
					</div>
					<div class="col-md-3 col-sm-12">						
						<i class="fa fa-heart"></i>
						<h3>Our Hardwork</h3>
						<p>Most importantly, For Glory was made with love! A lot of blood, sweat and tears went into this project and we hope that you would enjoy the fruits of our labors
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="compability fade">
			<div class="container">
				<div class="comp-title col-12">
					<h2>Playable on any computer</h2>
					<span class="border"></span>
					<img src="<?php echo get_stylesheet_directory_uri();?>/Assets/imacMockup2.png" class="img-responsive iMacMockup">
				</div>
			</div>
		</section>

		<section class="waiting-for-glory fade" id="faq">
			<div class="waiting-banner banner vertical-align">
				<div class="container text-center">
					<h1 class="banner-txt col-12">What are you waiting for? <br>Play now!</h1>
					<div class="CTAbtn btn col-sm-6">
						<a href="http://bcit-for-glory.herokuapp.com/" target="_blank" class="btn btn-default btn-callout playNow">
							Play Now!
						</a>
					</div>
				</div>
			</div>
		</section>


		<section class="accordion-section" >
			<div class="container">
					<div class="col-12">
						<div class="text-center faq-txt">
							<h1>faq</h1>
						</div>	
					</div>
					<div class="panel-group text-center" >
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title" data-target="#panel-one" data-toggle="collapse">
									<i class="fa fa-sort-down"></i> How long does a game take to take? 
								</h3>
							</div>
							<div class="panel-collapse collapse" id="panel-one">
								<div class="panel-body">
									<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In repudiandae sequi dicta. Quaerat dignissimos asperiores dolor corrupti enim deleniti, ullam minima eaque? Harum, omnis fuga.</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel-group text-center">
						<div class="panel-heading">
							<h3 class="panel-title" data-target="#panel-two" data-toggle="collapse">
								<i class="fa fa-sort-down"></i> How much does For Glory cost?
							</h3>
						</div>
						<div class="collapse" id="panel-two">
							<div class="panel-body">
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In repudiandae sequi dicta. Quaerat dignissimos asperiores dolor corrupti enim deleniti, ullam minima eaque? Harum, omnis fuga.</p>
							</div>
						</div>					
					</div>
				</div>
					
		</section>


		<section class="email-list email-banner banner vertical-align" id="email-list">
			<div class="container">
					<div class="row">
					<div class="col-12 col-md-12">
						<div class="text-center email-box banner-txt">
							<h2 class="">subscribe to our newsletter</h2>
				
						<div class="col-12">
							<input class="email-form form-control" type="text" require name="Name" placeholder="Your Name">
						</div>
						<div class="col-12">
							<input class="email-form form-control" type="email" require name="email" placeholder="Enter your email">
						</div>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="email-btn btn btn-primary">submit</button>
					</div>
				</div>
			</div>
		</section>



	</div>

<!--
	.entry-title
	.entry-header,
	.entry-summary,
	.entry-content
	.entry-footer
		.cat-link
		.comments-link
		.edit-link
	.page-content
-->

		<section id="dev-logs">
			<div class="container">
					<div class="log-title col-12">
					<h2>dev logs</h2>
					<span class="border"></span>
					</div>
				<div class="row">
						<?php
							
								if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) :
							?>
								<header>
										<h1 class="page-title screen-reader-text "><?php single_post_title(); ?></h1>
								</header>
									<?php
										endif;
								/* Start the Loop */
									while ( have_posts() ) :
										echo '<div class="dev-logs col-md-4 col-sm-12">';
										the_post();
									/*
									* Include the Post-Type-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Type name) and that will be used instead.
									*/
									get_template_part( 'template-parts/content', get_post_type() );
									echo '</div>';
								endwhile;
								the_posts_navigation();
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
								?>	
					
				</div>
			</div>
		</section>
	</main><!-- #main -->
		<section class="waiting-for-glory">
			<div class="waiting-banner banner vertical-align">
				<div class="container text-center">
					<h1 class="banner-txt col-12">excitied to play?</h1>
					<div class="CTAbtn btn col-sm-6">
						<a href="http://bcit-for-glory.herokuapp.com/" target="_blank" class="btn btn-default btn-callout playNow">
							Play Now!
						</a>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>

</div><!-- #primary -->
		
	<!-- < ?
		// get_sidebar();
		// get_footer();
