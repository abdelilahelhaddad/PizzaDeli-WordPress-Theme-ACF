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
  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center" data-scrollax-parent="true">

        <div class="col-md-6 col-sm-12 ftco-animate">
          <span class="subheading">Delicious</span>
          <h1 class="mb-4">Italian Cuizine</h1>
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary
            regelialia.</p>
          <p><a href="#" class="p-3 btn btn-primary px-xl-4 py-xl-3">Order Now</a> <a href="#"
              class="p-3 btn btn-white btn-outline-white px-xl-4 py-xl-3">View Menu</a></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <img src="<?php echo get_template_directory_uri().'/images/bg_1.png'?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>

  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center" data-scrollax-parent="true">

        <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
          <span class="subheading">Crunchy</span>
          <h1 class="mb-4">Italian Pizza</h1>
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary
            regelialia.</p>
          <p><a href="#" class="p-3 btn btn-primary px-xl-4 py-xl-3">Order Now</a> <a href="#"
              class="p-3 btn btn-white btn-outline-white px-xl-4 py-xl-3">View Menu</a></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <img src="<?php echo get_template_directory_uri().'/images/bg_2.png'?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>

  <div class="slider-item">
    <div class=" overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center" data-scrollax-parent="true">

        <div class="col-md-6 col-sm-12 ftco-animate">
          <span class="subheading">Welcome</span>
          <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary
            regelialia.</p>
          <p><a href="#" class="p-3 btn btn-primary px-xl-4 py-xl-3">Order Now</a> <a href="#"
              class="p-3 btn btn-white btn-outline-white px-xl-4 py-xl-3">View Menu</a></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <img src="<?php echo get_template_directory_uri().'/images/pizza-5.jpg'?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/content-infos'); ?>

<?php get_template_part('template-parts/content-about'); ?>

<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Hot Pizza Meals</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
          blind texts.</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters d-flex">
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-1.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>Italian Pizza</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-2.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>Greek Pizza</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-3.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>Caucasian Pizza</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img order-lg-last"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-4.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>American Pizza</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img order-lg-last"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-5.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>Tomatoe Pie</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="services-wrap d-flex">
          <a href="#" class="img order-lg-last"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/pizza-6.jpg'?>);"></a>
          <div class="p-4 text">
            <h3>Margherita</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
      <div class="text-center col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Recent from blog</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
          blind texts.</p>
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