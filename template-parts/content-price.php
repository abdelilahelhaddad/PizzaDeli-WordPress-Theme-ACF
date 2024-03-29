<div class="container">
  <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <h2 class="mb-4">Our Menu Pricing</h2>
      <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <?php
      // Check rows exists.
      if( have_rows('pricing_menu', 'option') ):

          // Loop through rows.
          while( have_rows('pricing_menu', 'option') ) : the_row();

              // Load sub field value.
              $image = get_sub_field('image')['url'];
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              $price = get_sub_field('price');
              // Check row index
              if (get_row_index() % 2 == 0) :
              ?>

      <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(<?php echo $image; ?>);"></div>
        <div class="desc pl-3">
          <div class="d-flex text align-items-center">
            <h3><span><?php echo $title; ?></span></h3>
            <span class="price">$<?php echo $price; ?></span>
          </div>
          <div class="d-block">
            <p><?php echo $description; ?></p>
          </div>
        </div>
      </div>

      <?php
          // End loop.
        endif;
          endwhile;
      endif; ?>
    </div>
    <div class="col-md-6">
      <?php
      // Check rows exists.
      if( have_rows('pricing_menu', 'option') ):

          // Loop through rows.
          while( have_rows('pricing_menu', 'option') ) : the_row();

              // Load sub field value.
              $image = get_sub_field('image')['url'];
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              $price = get_sub_field('price');
              // Check row index
              if (get_row_index() % 2 == 1) :
              ?>

      <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(<?php echo $image; ?>);"></div>
        <div class="desc pl-3">
          <div class="d-flex text align-items-center">
            <h3><span><?php echo $title; ?></span></h3>
            <span class="price">$<?php echo $price; ?></span>
          </div>
          <div class="d-block">
            <p><?php echo $description; ?></p>
          </div>
        </div>
      </div>

      <?php
          // End loop.
        endif;
          endwhile;
      endif; ?>
    </div>
  </div>
</div>