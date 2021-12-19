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
          <h2 class="ftco-heading-2">Social Media:</h2>
          <ul class="mt-2 ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['twitter']?>"><span
                  class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['facebook']?>"><span
                  class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['instagram']?>"><span
                  class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="mb-5 col-lg-4 col-md-6 mb-md-5">
        <div class="mb-4 ftco-footer-widget">
          <h2 class="ftco-heading-2">Recent Posts:</h2>
          <?php 
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2
      );

      $the_query = new WP_Query( $args );

      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
          <div class="mb-4 block-21 d-flex">
            <a href="<?php the_permalink(); ?>" class="mr-4 blog-img"
              style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> <?php the_date( 'M j, Y' ); ?></a></div>
                <div><a href="#"><span class="icon-person"></span> <?php the_author(); ?></a></div>
              </div>
            </div>
          </div>
          <?php 
endwhile;
endif;
wp_reset_postdata();
?>

        </div>
      </div>
      <div class="mb-5 col-lg-2 col-md-6 mb-md-5">
        <div class="mb-4 ftco-footer-widget ml-md-4">
          <h2 class="ftco-heading-2">IMPORTANT LINKS:</h2>
          <ul class="list-unstyled">
            <li><a href="<?php echo site_url('/about'); ?>" class="py-2 d-block">About</a></li>
            <li><a href="<?php echo site_url('/menu'); ?>" class="py-2 d-block">Menu</a></li>
            <li><a href="<?php echo site_url('/blog'); ?>" class="py-2 d-block">Blog</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="mb-5 col-lg-3 col-md-6 mb-md-5">
        <div class="mb-4 ftco-footer-widget">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="mb-3 block-23">
            <ul>
              <li><span class="icon icon-map-marker"></span><span
                  class="text"><?php the_field('address', 'option'); ?></span></li>
              <li><a href="#"><span class="icon icon-phone"></span></a><span
                  class="text"><?php the_field('phone', 'option'); ?></span></li>
              <li><a href="#"><span class="icon icon-envelope"></span></a><span
                  class="text"><?php the_field('email', 'option'); ?></span></li>
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
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>

<?php wp_footer(); ?>

</body>

</html>