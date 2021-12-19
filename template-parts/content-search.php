<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PizzaDeli
 */

get_header();
?>
<?php if ( 'post' === get_post_type() ) : ?>
<div class="col-md-4 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20"
      style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    </a>
    <div class="py-4 text d-block">
      <div class="meta">
        <div><a href="#"> <?php the_date( 'M j, Y' ); ?></a></div>
        <div><a href="#"><?php the_author(); ?></a></div>
      </div>
      <h3 class="mt-2 heading"><a href="#"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
</div>
<?php endif; ?>