<?php
/**
 * Template Name: About
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

<section class="home-slider owl-carousel img" style="background-image: url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url()?>);">

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

<?php get_template_part('template-parts/content-infos'); ?>

</section>
<section class="ftco-about d-md-flex">
  <div class="one-half img" style="background-image: url(<?php echo get_field('about_section')['about_us_image']['url']; ?>);"></div>
  <div class="one-half ftco-animate">
    <div class="heading-section ftco-animate ">
      <h2 class="mb-4">Welcome to <span class="flaticon-pizza"> <?php echo get_field('about_section')['about_us_name']; ?></span></h2>
    </div>
    <div>
      <p><?php echo get_field('about_section')['about_us_text']; ?></p>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Our Chef</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
      </div>
    </div>
    <div class="row">
    <?php

// Check rows exists.
if( have_rows('chef_section') ):

    // Loop through rows.
    while( have_rows('chef_section') ) : the_row();

        // Load sub field value.
        $chef_picture = get_sub_field('chef_picture')['url'];
        $chef_name = get_sub_field('chef_name');
        $chef_speciality = get_sub_field('chef_speciality');
        $chef_description = get_sub_field('chef_description');
?>
        <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="mb-4 img" style="background-image: url(<?php echo $chef_picture; ?>);"></div>
          <div class="text-center info">
            <h3><a href="#"><?php echo $chef_name; ?></a></h3>
            <span class="position"><?php echo $chef_speciality; ?></span>
            <div class="text">
              <p><?php echo $chef_description; ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php
    // End loop.
      endwhile;
    endif; ?>
      
    </div>
  </div>
</section>

<section class="ftco-appointment">
  <div class="overlay"></div>
  <div class="container-wrap">
    <div class="row no-gutters d-md-flex align-items-center">
      <div class="col-md-6 d-flex align-self-stretch">
        <div id="map"></div>
      </div>
      <div class="col-md-6 appointment ftco-animate">
        <h3 class="mb-3">Contact Us</h3>
        <form action="#" class="appointment-form">
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="First Name">
            </div>
          </div>
          <div class="d-me-flex">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send" class="px-4 py-3 btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();