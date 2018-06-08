<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package For-Glory
 */

?>

</div><!-- #content -->

	<footer class="container py-5 footer">
			<div class="row">
				<div class="col-12 col-md">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/forglorylogo.png" class="img-responsive footer-logo">
					<small class="d-block mb-3 text-muted text-center">For Glory! © 2018</small>

					<form  method="get">
						<div class="form-search">
							<input type="text" class="search-input" name="s" placeholder="Search" />
						</div>
					</form>

				</div>
			<div class="col-6 col-md">
				<h5>Features</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Lorem Lipsum</a></li>
					<li><a class="text-muted" href="#">Random Loren</a></li>
					<li><a class="text-muted" href="#">Lorem Lipsum</a></li>
					<li><a class="text-muted" href="#">Stuff Lorem Lipsum</a></li>
					<li><a class="text-muted" href="#">Lorem Lipsum</a></li>
					<li><a class="text-muted" href="#">Lorem Lipsum</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Resource One</a></li>
					<li><a class="text-muted" href="#">Resource Two</a></li>
					<li><a class="text-muted" href="#">Another Resource</a></li>
					<li><a class="text-muted" href="#">Last Resource</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Business</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Business Opt One</a></li>
					<li><a class="text-muted" href="#">Business Opt Two</a></li>
					<li><a class="text-muted" href="#">Business Opt Three</a></li>
					<li><a class="text-muted" href="#">Business Opt Four</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>About</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Team</a></li>
					<li><a class="text-muted" href="#">Locations</a></li>
					<li><a class="text-muted" href="#">Privacy</a></li>
					<li><a class="text-muted" href="#">Terms</a></li>
				</ul>
			</div>
		</div>

	</footer>
	

		
</div><!-- #page -->

<?php wp_footer(); ?>

		

</body>
</html>
