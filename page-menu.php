<?php
/**
 * Template Name: Menu
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
  style="background-image: url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url()?>);">

  <div class="slider-item" style="background-image: url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url()?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="text-center col-md-7 col-sm-12 ftco-animate">
          <h1 class="mt-5 mb-3 bread"><?php the_title(); ?></h1>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Menu</h2>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/content-menu'); ?>

  <?php get_template_part('template-parts/content-price'); ?>

</section>

<section class="ftco-menu">
  <div class="container-fluid">
    <div class="row d-md-flex">
      <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0"
        style="background-image: url(<?php echo get_template_directory_uri().'/images/about.jpg'?>);">
      </div>
      <div class="col-lg-8 ftco-animate p-md-5">
        <div class="row">
          <?php get_template_part('template-parts/content-meals'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();