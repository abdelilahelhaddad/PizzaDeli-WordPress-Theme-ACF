<div class="container-wrap">
  <div class="row no-gutters d-flex">

    <?php
      // Check rows exists.
      if( have_rows('our_menu', 'option') ):

          // Loop through rows.
          while( have_rows('our_menu', 'option') ) : the_row();

              // Load sub field value.
              $image = get_sub_field('image')['url'];
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              $price = get_sub_field('price');
              $orderLink = get_sub_field('order_link');
              ?>

    <div class="col-lg-4 d-flex ftco-animate">
      <div class="services-wrap d-flex">
        <a href="#" class="img <?php if(get_row_index() > 3) echo 'order-lg-last'; ?>"
          style="background-image: url(<?php echo $image; ?>);"></a>
        <div class="text p-4">
          <h3><?php echo $title; ?></h3>
          <p><?php echo $description; ?> </p>
          <p class="price"><span>$<?php echo $price; ?></span> <a href="<?php echo $orderLink; ?>"
              class="ml-2 btn btn-white btn-outline-white">Order</a></p>
        </div>
      </div>
    </div>

    <?php
          // End loop.
          endwhile;
      endif; ?>

  </div>
</div>