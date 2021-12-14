<section class="ftco-intro">
  <div class="container-wrap">
    <div class="wrap d-md-flex">
      <div class="info">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">
              <h3>Phone:</h3>
              <p><?php the_field('phone', 'option'); ?></p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-my_location"></span></div>
            <div class="text">
              <h3>Address:</h3>
              <p><?php the_field('address', 'option'); ?></p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-clock-o"></span></div>
            <div class="text">
            <h3>Openning - Closing:</h3>
            <p><?php the_field('openning', 'option')?></p>
            <p><?php the_field('closing', 'option')?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 social d-md-flex pl-md-5 align-items-center">
        <ul class="social-icon">
          <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['twitter']?>"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['facebook']?>"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="<?php echo get_field('social_media', 'option')['instagram']?>"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
  </div>