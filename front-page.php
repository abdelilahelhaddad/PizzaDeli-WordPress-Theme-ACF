<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PizzaDeli
 */

get_header();
?>

<section class="home-slider owl-carousel img"
  style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);">

  <?php if( have_rows('sliders', 'option') ): ?>

  <?php while( have_rows('sliders', 'option') ): the_row(); 
        $subTitle = get_sub_field('sub_title');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $image = get_sub_field('image')['url'];
        ?>
  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center" data-scrollax-parent="true">
        <div class="col-md-6 col-sm-12 ftco-animate <?php if(get_row_index() % 2 == 0) echo 'order-md-last';?>">
          <span class="subheading"><?php echo $subTitle; ?></span>
          <h1 class="mb-4"><?php echo $title; ?></h1>
          <p class="mb-4 mb-md-5"><?php echo $description; ?></p>
          <p><a href="<?php echo site_url('/contact'); ?>" class="p-3 btn btn-primary px-xl-4 py-xl-3">Order Now</a> <a
              href="<?php echo site_url('/menu'); ?>" class="p-3 btn btn-white btn-outline-white px-xl-4 py-xl-3">View
              Menu</a></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <img src="<?php echo $image; ?>" class="img-fluid" alt="<?php echo $title; ?>">
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>

  <?php endif; ?>

</section>

<?php get_template_part('template-parts/content-infos'); ?>

<?php get_template_part('template-parts/content-about'); ?>

<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Hot Pizza Meals</h2>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/content-menu'); ?>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Recent from blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <?php 
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );

      $the_query = new WP_Query( $args );

      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="<?php the_permalink(); ?>" class="block-20"
            style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
          </a>
          <div class="py-4 text d-block">
            <div class="meta">
              <div><a href="#"> <?php the_date( 'M j, Y' ); ?></a></div>
              <div><a href="#"><?php the_author(); ?></a></div>
            </div>
            <h3 class="mt-2 heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
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
</section>

<?php
get_footer();
?>