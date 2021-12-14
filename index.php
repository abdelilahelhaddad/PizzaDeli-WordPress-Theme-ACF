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
  style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);">

  <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_3.jpg'?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="text-center col-md-7 col-sm-12 ftco-animate">
          <h1 class="mt-5 mb-3 bread">Read our Blog</h1>
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
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20"
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_4.jpg'?>);">
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
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_5.jpg'?>);">
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
            style="background-image: url(<?php echo get_template_directory_uri().'/images/image_6.jpg'?>);">
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
    <div class="mt-5 row">
      <div class="text-center col">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// get_sidebar();
get_footer();