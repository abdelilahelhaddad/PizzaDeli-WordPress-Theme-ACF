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
        <div class="col-md-6 col-sm-12 ftco-animate <?php if(get_row_index() % 2 ==0) echo 'order-md-last';?>">
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
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_1.jpg'?>);">
          </a>
          <div class="py-4 text d-block">
            <div class="meta">
              <div><a href="#">Sept 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="mt-2 heading"><a href="#">The Delicious Pizza</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_2.jpg'?>);">
          </a>
          <div class="py-4 text d-block">
            <div class="meta">
              <div><a href="#">Sept 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="mt-2 heading"><a href="#">The Delicious Pizza</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_3.jpg'?>);">
          </a>
          <div class="py-4 text d-block">
            <div class="meta">
              <div><a href="#">Sept 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="mt-2 heading"><a href="#">The Delicious Pizza</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
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
?>