<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PizzaDeli
 */

?>


<footer class="ftco-footer ftco-section img">
		<div class="overlay"></div>
		<div class="container">
			<div class="mb-5 row">
				<div class="mb-5 col-lg-3 col-md-6 mb-md-5">
					<div class="mb-4 ftco-footer-widget">
						<h2 class="ftco-heading-2">About Us</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
							blind texts.</p>
						<ul class="mt-5 ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['twitter']?>"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['facebook']?>"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['instagram']?>"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="mb-5 col-lg-4 col-md-6 mb-md-5">
					<div class="mb-4 ftco-footer-widget">
						<h2 class="ftco-heading-2">Recent Blog</h2>
						<div class="mb-4 block-21 d-flex">
							<a class="mr-4 blog-img" style="background-image: url(<?php echo get_template_directory_uri().'/images/image_1.jpg'?>);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
									<div><a href="#"><span class="icon-person"></span> Admin</a></div>
									<div><a href="#"><span class="icon-chat"></span> 19</a></div>
								</div>
							</div>
						</div>
						<div class="mb-4 block-21 d-flex">
							<a class="mr-4 blog-img" style="background-image: url(<?php echo get_template_directory_uri().'/images/image_2.jpg'?>);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
									<div><a href="#"><span class="icon-person"></span> Admin</a></div>
									<div><a href="#"><span class="icon-chat"></span> 19</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-5 col-lg-2 col-md-6 mb-md-5">
					<div class="mb-4 ftco-footer-widget ml-md-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Cooked</a></li>
							<li><a href="#" class="py-2 d-block">Deliver</a></li>
							<li><a href="#" class="py-2 d-block">Quality Foods</a></li>
							<li><a href="#" class="py-2 d-block">Mixed</a></li>
						</ul>
					</div>
				</div>
				<div class="mb-5 col-lg-3 col-md-6 mb-md-5">
					<div class="mb-4 ftco-footer-widget">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="mb-3 block-23">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"><?php the_field('address', 'option'); ?></span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php the_field('phone', 'option'); ?></span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php the_field('email', 'option'); ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="text-center col-md-12">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by
						<a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>

<?php wp_footer(); ?>

</body>
</html>
