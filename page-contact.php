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

<?php get_template_part('template-parts/content-header'); ?>

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
        <?php echo do_shortcode('[contact-form-7 id="134" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>

<div id="map"></div>

<?php
get_footer();