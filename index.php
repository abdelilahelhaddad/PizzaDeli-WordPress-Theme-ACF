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
          <h1 class="mt-5 mb-3 bread"><?php single_post_title(); ?></h1>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Read our blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <?php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query= new WP_Query(array(
        'post_type' => 'post',
        'paged' => $paged,
      ));

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
              <div><span class="icon-calendar"></span> <?php the_date( 'M j, Y' ); ?></div>
              <div><span class="icon-person"></span> <?php the_author_posts_link(); ?></div>
            </div>
            <h3 class="mt-2 heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php 
      endwhile;
      $total_pages = $the_query->max_num_pages;

      if ($total_pages > 0){

        $current_page = max(1, get_query_var('paged'));

        $pagin = paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('<'),
            'next_text'    => __('>'),
        ));
      }
      ?>

    </div>

    <div class="mt-5 row">
      <div class="text-center col">
        <div class="block-27">
          <ul>
            <?php echo $pagin; ?>
            <?php else :?>
            <h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
            <?php endif; ?>
            <?php wp_reset_postdata();?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();