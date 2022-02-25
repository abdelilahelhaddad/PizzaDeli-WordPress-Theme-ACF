<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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


<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ftco-animate">
        <h2 class="mb-3"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <div class="mt-5 mb-5 tag-widget post-tag-container">
          <?php 
            $tags = wp_get_post_tags(get_the_ID());
            $html = '<div class="tagcloud">';
            foreach ( $tags as $tag ) {
                $tag_link = esc_url(get_tag_link( $tag->term_id ));
                $html .= "<a href='{$tag_link}' class='tag-cloud-link'>";
                $html .= "{$tag->name}</a>";
            }
            $html .= '</div>';
            echo $html;
            ?>
        </div>

        <div class="about-author d-flex">
          <?php 
              $post_id = $post->ID;
              $author_id = get_post_field( 'post_author', $post_id);
              $author_firstname = get_the_author_meta( 'user_firstname', $author_id ); 
              $author_lastname = get_the_author_meta( 'user_lastname', $author_id ); 
              $author_description = get_the_author_meta( 'user_description', $author_id ); 
              ?>
          <div class="mr-5 bio align-self-md-center">
            <img src="<?php echo esc_url(get_avatar_url($author_id)); ?>" alt="Image placeholder"
              class="mb-4 img-fluid">
          </div>
          <div class="desc align-self-md-center">
            <h3><?php echo esc_html($author_firstname) .' '. esc_html($author_lastname); ?></h3>
            <p><?php echo esc_html($author_description); ?></p>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <?php echo do_shortcode("[wpbsearch]"); ?>
          <!-- <form action="#" class="search-form">
            <div class="form-group">
              <div class="icon">
                <span class="icon-search"></span>
              </div>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form> -->
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Categories</h3>
          <?php 
            $categories = get_categories();
            $html = '<div class="categories">';
            foreach ( $categories as $category ) {
                $category_link = esc_url(get_category_link( $category->term_id ));
                $html .= "<li><a href='{$category_link}'>";
                $html .= "{$category->name}<span>($category->count)</span></a></li>";
            }
            $html .= '</div>';
            echo $html;
            ?>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Posts:</h3>
          <?php 
            $recent_posts = wp_get_recent_posts(array(
              'numberposts' => 3,
              'post_status' => 'publish',
            ));
            foreach( $recent_posts as $post_item ) : ?>
          <div class="mb-4 block-21 d-flex">
            <a href="<?php echo esc_url(get_permalink($post_item['ID'])); ?>" class="mr-4 blog-img"
              style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post_item['ID']));?>);"></a>
            <div class="text">
              <h3 class="heading"><a
                  href="<?php echo esc_url( get_permalink($post_item['ID'])); ?>"><?php echo $post_item['post_title']; ?></a>
              </h3>
              <div class="meta">
                <div><span class="icon-calendar"></span>
                  <?php echo esc_html(get_the_date( 'M j, Y', $post_item['ID'] )); ?></div>
                <div><span class="icon-person"></span>
                  <?php echo esc_html(get_the_author_meta( 'user_firstname', $post_item['post_author'])); ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->

<?php
get_footer();