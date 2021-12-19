<?php
/**
 * Template Name: Contact
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

<section class="ftco-section contact-section">
  <div class="container mt-5">
    <div class="row block-9">
      <div class="col-md-4 contact-info ftco-animate">
        <div class="row">
          <div class="mb-4 col-md-12">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="mb-3 col-md-12">
            <p><span>Address:</span> <?php the_field('address', 'option'); ?></p>
          </div>
          <div class="mb-3 col-md-12">
            <p><span>Phone:</span> <a
                href="tel://<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></p>
          </div>
          <div class="mb-3 col-md-12">
            <p><span>Email:</span> <a
                href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
          </div>
          <div class="mb-3 col-md-12">
            <p><span>Website:</span> <a
                href="<?php the_field('website', 'option'); ?>"><?php the_field('website', 'option'); ?></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 ftco-animate">
        <form action="#" class="contact-form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="px-5 py-3 btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div id="map"></div>

<?php
get_footer();