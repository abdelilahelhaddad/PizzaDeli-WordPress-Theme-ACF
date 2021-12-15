<section class="ftco-about d-md-flex">
  <div class="one-half img"
    style="background-image: url(<?php echo get_field('about_section', 'option')['about_us_image']['url']; ?>);"></div>
  <div class="one-half ftco-animate">
    <div class="heading-section ftco-animate ">
      <h2 class="mb-4">Welcome to <span class="flaticon-pizza">
          <?php echo get_field('about_section', 'option')['about_us_name']; ?></span></h2>
    </div>
    <div>
      <p><?php echo get_field('about_section', 'option')['about_us_text']; ?></p>
    </div>
  </div>
</section>